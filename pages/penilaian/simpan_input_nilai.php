<?php
mysql_connect("localhost","root",""); 
mysql_select_db("siassmp"); 

$id=$_POST['id'];
$t=$_POST['tahun'];
$s=$_POST['semester'];
$p=$_POST['pelajaran'];
$kkm=$_POST['kkm'];
$kls=$_POST['kelas'];
$wk=$_POST['walikelas'];
$nip=$_POST['nip'];


{
mysql_query("Insert into inputnilai (`tahun`,`semester`,`pelajaran`,`kkm`,`kelas`,`walikelas`,`nip`) values ('".$_POST['tahun']."','".$_POST['semester']."','".$_POST['pelajaran']."','".$_POST['kkm']."','".$_POST['kelas']."','".$_POST['walikelas']."','".$_POST['nip']."')") or die(mysql_error());
}
?>

<html>
<title>Input Nilai Siswa</title>
<style type="text/css">
<!--
.style2 {
	color: #FFFFFF;
	font-size: 30px;
}
.style3 {font-size: 24px}
.style4 {font-size: 22px; }
-->
</style>
<form name="formkelas" id="formkelas" action="update_nilai.php" method="post">
<body background="../../img/gray_jean.png">

<table width="1746" height="80" border="0" bgcolor="#999900">
  <tr>
    <td width="1740" height="50"><h2 align="center" class="style2 style3">Form Input Data Nilai Siswa</h2></td>
  </tr>
  <tr>
    <td height="24" bgcolor="#000000"></td>
  </tr>
</table><a href="../../dashboard.php?cat=penilaian&page=inputnilai" class="style4">Kembali</a>
<table width="957" border="0">
 <?php
 mysql_connect("localhost","root",""); 
mysql_select_db("siassmp"); 

  $rw=mysql_query('Select * from inputnilai order by id desc limit 0,1');
  while($s=mysql_fetch_array($rw))
  {
  ?>
  <tr>
    <td width="155" height="33">Tahun Ajaran Aktif</td>
    <td width="11">:</td>
    <td width="164"><input name="tahun" type="text" value="<?php echo $s['tahun']; ?>" ></td>
    <td width="126" height="31">Nama Mapel</td>
    <td width="17">:</td>
    <td width="181"><input name="pelajaran" type="text"  value="<?php echo $s['pelajaran']; ?>"></td>
    <td width="91" height="33">Nama Kelas</td>
    <td width="13">:</td>
    <td width="161"><input name="kelas" type="text"  value="<?php echo $s['kelas']; ?>"></td>
  </tr>
  <tr>
    <td height="31">Semester</td>
    <td>:</td>
    <td><input name="semester" type="text" value="<?php echo $s['semester']; ?>"></td>
    <td>Kkm</td>
    <td>:</td>
    <td><input name="kkm" type="text"  value="<?php echo $s['kkm']; ?>"></td>
    <td>Wali Kelas</td>
    <td>:</td>
    <td><input name="walikelas" type="text"  value="<?php echo $s['walikelas']; ?>"></td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>NIP</td>
    <td>:</td>
    <td><input name="nip" type="text"  value="<?php echo $s['nip']; ?>"></td>
  </tr>
  <?php
  }
  ?>
</table>
<br />
<table width='1747' height="30" border='1' cellpadding="0" cellspacing="0" bordercolor="#666666" bgcolor="" >
  <tr>
  <td width='1' rowspan="3"></td>
    <td width='47' rowspan="3"><div align="center">No</div></td>
    <td width='155' rowspan="3"><div align="center">Nama</div></td>
    <td colspan="16"><div align="center">Jenis Tagihan</div></td>
    <td width='60' rowspan="3"><div align="center">Nilai Harian </div></td>
    <td width="72" rowspan="3"><div align="center">Nilai Ulangan Semester </div></td>
    <td width="68" rowspan="3"><p align="center">Rerata (Rumus)</p>    </td>
    <td width="69" rowspan="3"><div align="center">NA (Rapor) </div></td>
    <td width="60" rowspan="3"><div align="center">KKM</div></td>
    <td width="65" rowspan="3"><div align="center">Ket.</div></td>
  </tr>
  <tr>
    <td colspan="11"><div align="center">Ulangan Harian </div></td>
    <td colspan="5"><div align="center">Tugas</div></td>
  </tr>
  <tr>
    <td width='60'><div align="center">1</div></td>
    <td width='60'><div align="center">Rm</div></td>
    <td width='60'><div align="center">2</div></td>
    <td width='60'><div align="center">Rm</div></td>
    <td width='60'><div align="center">3</div></td>
    <td width='60'><div align="center">Rm</div></td>
    <td width='60'><div align="center">4</div></td>
    <td width='60'><div align="center">Rm</div></td>
    <td width='60'><div align="center">5</div></td>
    <td width='60'><div align="center">Rm</div></td>
    <td width='60'><div align="center">Rata2</div></td>
    <td width='60'><div align="center">1</div></td>
    <td width='63'><div align="center">2</div></td>
    <td width='63'><div align="center">3</div></td>
    <td width='63'><div align="center">4</div></td>
    <td width='63'><div align="center">Rata2</div></td>
  </tr>
</table>

		  <?php
		
		mysql_connect("localhost","root",""); 
		mysql_select_db("siassmp"); 
		
		$k= $_POST['kelas'];
		
		$cari=mysql_query ("SELECT * from siswa WHERE kelas like '%$k%'");
		while ($s=mysql_fetch_array($cari))

 {

$c=$c+1;
$ni=$s['ni'];
$nm=$s['name'];

echo ("<table width='1747' height='28' border='1' align='left' cellpadding='0' cellspacing='0' bordercolor='#000000'>
  <tr>
  <td width='1'><div align='center'><input name='ni' readonly='true' type='hidden' value='$ni' size='0'></div></td>
	<td width='47'><div align='center'>$c</div></td>
    <td width='155'><div align='center'><input name='nama' type='text' value='$nm' size='15'></div></td>
	<td width='60'><div align='center'><input name='uh1' type='text' size='3'></div></td>
    <td width='60'><div align='center'><input name='rm1' type='text' size='3'></div></td>
    <td width='60'><div align='center'><input name='uh2' type='text' size='3'></div></td>
    <td width='60'><div align='center'><input name='rm2' type='text' size='3'></div></td>
    <td width='60'><div align='center'><input name='uh3' type='text' size='3'></div></td>
    <td width='60'><div align='center'><input name='rm3' type='text' size='3'></div></td>
    <td width='60'><div align='center'><input name='uh4' type='text' size='3'></div></td>
    <td width='60'><div align='center'><input name='rm4' type='text' size='3'></div></td>
    <td width='60'><div align='center'><input name='uh5' type='text' size='3'></div></td>
    <td width='60'><div align='center'><input name='rm5' type='text' size='3'></div></td>
    <td width='60'><div align='center'><input name='ratauh' type='text' size='3'></div></td>
    <td width='60'><div align='center'><input name='tugas1' type='text' size='3'></div></td>
    <td width='63'><div align='center'><input name='tugas2' type='text' size='3'></div></td>
    <td width='63'><div align='center'><input name='tugas3' type='text' size='3'></div></td>
    <td width='63'><div align='center'><input name='tugas4' type='text' size='3'></div></td>
    <td width='63'><div align='center'><input name='ratatugas' type='text'   size='3'></div></td>
    <td width='60'><div align='center'><input name='nilaiharian' type='text' size='3'> </div></td>
    <td width='72'><div align='center'><input name='us' type='text' size='3'></div></td>
    <td width='68'><p align='center'><input name='rerata' type='text' size='3'></p>    </td>
    <td width='69'><div align='center'><input name='rapor' type='text' size='3'></div></td>
	<td width='60'><div align='center'><input name='kkmm' type='text' size='3' value='$kkm'></div></td>
    <td width='65'><div align='center'><input name='ket' type='text' size='3'></div></td>
  </tr>
</table>
");
}
?>
<table width="1746">
<tr>
<td width='1070'><center>
  <div align="center" >
    <input type='submit' value='Update' name='submit'/>
  </div></td>
  </tr>
</table>

</form>
</body>
</html>
