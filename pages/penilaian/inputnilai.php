<style type="text/css">
<!--
.style1 {color: #333333}
-->
</style>
<form id="form1" name="form1" method="post" action="pages/penilaian/simpan_input_nilai.php" target="_self">
<table width="" border="0">
  <tr>
    <td width=""><h2>INPUT NILAI SISWA </h2></td>
  </tr>
</table>
<p>
<table width="348">
<?php
  $rw=mysql_query("Select * from sekolah");
  while($s=mysql_fetch_array($rw))
  {
  ?>
   <tr>
      <td width="122" height="30">Tahun Ajaran Aktif </td>
      <td width="10">:</td>
      <td width="200"><input type="text" name="tahun" value="<?php echo $s['tahun']; ?>" readonly="true"/></td>
   </tr>
	<tr>
      <td height="30">Semester</td>
      <td>:</td>
      <td><input type="text" name="semester" value="<?php echo $s['semester']; ?>" readonly="true" /></td>
    </tr>
	<tr>
	<?php // Koneksi 
mysql_connect("localhost","root",""); 
mysql_select_db("siassmp"); 

$result = mysql_query("select * from pelajaran"); 
$jsArray = "var prdName = new Array();\n"; 

	  echo '<td height="30">Nama Mapel</td>
	  <td>:</td>
	  <td><select name="pelajaran" onchange="document.getElementById(\'prd_name\').value = prdName[this.value]">'; echo '<option>---Pilih Mapel----</option>'; 
while ($row = mysql_fetch_array($result)) { 
echo '<option value="' . $row['namapelajaran'] . '">' . $row['namapelajaran'] . '</option>'; 
$jsArray .= "prdName['" . $row['namapelajaran'] . "'] = '" . addslashes($row['kkm']) . "';\n"; 
} 
echo '</select>'; ?>
	</td>
    </tr>
	<tr>
	  <td height="30">kkm</td>
	  <td>: </td>
	  <td><input type="text" name="kkm" id="prd_name" readonly="true" />
      <script type="text/javascript"> 
<?php echo $jsArray; ?> 
  </script></td>
    </tr>
	<tr>
					 <?php mysql_connect("localhost","root",""); 
				mysql_select_db("siassmp"); 
				
				$result = mysql_query("select * from kelas"); 
				$jsArray = "var pdName = new Array();\n"; 
				
	  echo '<td height="30">Nama Kelas </td>
	  <td>:</td>
	  <td>
	  <select name="kelas" onchange="changeValue(this.value)">'; 
echo '<option>---Pilih Kelas----</option>'; 
while ($row = mysql_fetch_array($result)) { 
	echo '<option value="' . $row['namakelas'] . '">' . $row['namakelas'] . '</option>'; 
	$jsArray .= "pdName['" . $row['namakelas'] . "'] = {name:'" . addslashes($row['walikelas']) . "',desc:'".addslashes($row['nip'])."'};\n"; 
	} 
	echo '</select>'; 
	?> </td>
    </tr>
	<tr>
	  <td height="30">Wali Kelas</td>
	  <td>:</td>
	  <td><input type="text" name="walikelas" id="pd_name" readonly="true" /> </td>
    </tr>
	<tr>
	  <td height="30">NIP</td>
	  <td>:</td>
	  <td><input type="text" name="nip" id="pd_desc" readonly="true" /> 
	<script type="text/javascript"> 
	<?php echo $jsArray; ?> 
	function changeValue(id){ 
	document.getElementById('pd_name').value = pdName[id].name; 
	document.getElementById('pd_desc').value = pdName[id].desc; }; 
	</script> </td>
    </tr>
	<tr>
	  <td height="30">&nbsp;</td>
	  <td>&nbsp;</td>
	  <td><input name="act" type="submit" id="cari" class="btn btn-primary" value="OK" /> </td>
  </tr>
	<?php
  }
  ?>
  </table>
</form>


