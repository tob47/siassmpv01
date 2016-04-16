<?php
include("../../_db.php");
?>
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function sendValue (s,s2){

window.opener.document.getElementById('kodebarang').value = s;
window.opener.document.getElementById('namabarang').value = s2;
window.close();
}
//  End -->
</script>

<style>
.pagin {
padding: 10px 0;
font:bold 11px/30px arial, serif;
}
.pagin * {
padding: 2px 6px;
color:#0A7EC5;
margin: 2px;
border-radius:3px;
}
.pagin a {
		border:solid 1px #8DC5E6;
		text-decoration:none;
		background:#F8FCFF;
		padding:6px 7px 5px;
}

.pagin span, a:hover, .pagin a:active,.pagin span.current {
		color:#FFFFFF;
		background:-moz-linear-gradient(top,#B4F6FF 1px,#63D0FE 1px,#58B0E7);
		    
}
.pagin span,.current{
	padding:8px 7px 7px;
}
.content{
	padding:10px;
	font:bold 12px/30px gegoria,arial,serif;
	border:1px dashed #0686A1;
	border-radius:5px;
	background:-moz-linear-gradient(top,#E2EEF0 1px,#CDE5EA 1px,#E2EEF0);
	margin-bottom:10px;
	text-align:left;
	line-height:20px;
}
.outer_div{
	margin:auto;
	width:600px;
}
#loader{
	position: absolute;
	text-align: center;
	top: 75px;
	width: 100%;
	display:none;
}

</style>
<h2>Data Barang</h2>
<?php 
	/* Koneksi database*/
	include 'paging.php'; //include pagination file
	
	//pagination variables
	$hal = (isset($_REQUEST['hal']) && !empty($_REQUEST['hal']))?$_REQUEST['hal']:1;
	$per_hal = 5; //berapa banyak blok
	$adjacents  = 5;
	$offset = ($hal - 1) * $per_hal;
	$reload="viewbarang.php?";
	//Cari berapa banyak jumlah data*/
	
	$count_query   = mysql_query("SELECT COUNT(data_barang.kode_barang) AS numrows,data_barang.kode_barang, data_barang.nama_barang, data_barang.jenis_barang, data_persediaan.stok_tersedia
FROM data_barang LEFT JOIN data_persediaan ON data_barang.kode_barang = data_persediaan.kode_barang");
	if($count_query === FALSE) {
    die(mysql_error()); 
	}
	$row     = mysql_fetch_array($count_query);
	$numrows = $row['numrows']; //dapatkan jumlah data
	
	$total_hals = ceil($numrows/$per_hal);

	
	//jalankan query menampilkan data per blok $offset dan $per_hal
	$query = mysql_query("SELECT data_barang.kode_barang, data_barang.nama_barang, data_barang.jenis_barang, data_persediaan.stok_tersedia
FROM data_barang LEFT JOIN data_persediaan ON data_barang.kode_barang = data_persediaan.kode_barang GROUP BY data_barang.kode_barang LIMIT $offset,$per_hal");

?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="responsive table table-striped table-bordered">
<thead>
  <tr>
    <td colspan="2" align="right" class="no_sort">      </td>
    </tr>
  <tr>
    <td class="no_sort"></td>
    <td class="no_sort"></td>
  </tr>
  <tr>
    <td class="no_sort">Nama Barang</td>
    <td class="no_sort">Jenis Barang</td>
    <td class="no_sort">Tersedia</td>
    <td class="no_sort"></td>
    </tr>
  </thead>
<?php
while($result = mysql_fetch_array($query)){
?>
<tr >
    
    <td><?php echo $result['nama_barang']; ?></td> 
    <td><?php echo $result['jenis_barang']; ?></td> 
    <td><?php echo $result['stok_tersedia']; ?></td> 
    <?php
	$ids=sha1($result['kode_barang']);
	?>  
    <td><a href="#" onClick="sendValue('<?php echo $result['kode_barang']; ?>','<?php echo $result['nama_barang']; ?>');"><span class="btn btn-success"><i class="icon-edit"></i>Pilih</span></a></td>   
  </tr>
<?php
}
?>
</table>
<?php
echo paginate($reload, $hal, $total_hals, $adjacents);
?>

