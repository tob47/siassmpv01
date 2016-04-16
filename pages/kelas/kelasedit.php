<?php
ob_start();
if(isset($_GET['id_kelas']))
{
	$rs=mysql_query("Select * from kelas where sha1(id_kelas)='".$_GET['id_kelas']."'");
	$row=mysql_fetch_array($rs);
?>
<form name="form1" method="post" action="?cat=kelas&page=kelasedit&id_kelas=<?php echo $_GET['id_kelas']; ?>&edit=1">
<center>
  <table width="393" height="183" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="40" colspan="2"><h2 align="center">Edit data Kelas </h2></td>
      </tr>
    <tr>
      <td width="155" height="40">Nama Kelas : </td>
      <td width="296"><label for="namakelas"></label>
      <input type="text" name="namakelas" id="namakelas" value="<?php echo $row['namakelas']; ?>" maxlength="30" /></td>
    </tr>
	<tr>
      <td width="155" height="35">Jurusan : </td>
		<td width="296"><label>
			<select name="jurusan" id="jurusan">
			<option value="">--Jurusan--</option>
			<option value="SSN">SSN</option>
			<option value=""></option>
			<option value=""></option>
			</select></label>	  </td>
    </tr>
    <tr>
      <td width="155" height="37">Wali Kelas : </td>
      <td width="296"><label>
		   <?php // Koneksi 
						mysql_connect("localhost","root",""); 
						mysql_select_db("siassmp"); 
						
						$result = mysql_query("select * from guru"); 
						$jsArray = "var prdName = new Array();\n"; 
						
						echo '<select name="walikelas" onchange="document.getElementById(\'prd_name\').value = prdName[this.value]">'; echo '<option>--Pilih Wali Kelas--</option>'; 
						while ($row = mysql_fetch_array($result)) { 
						echo '<option value="' . $row['nama'] . '">' . $row['nama'] . '</option>'; 
						$jsArray .= "prdName['" . $row['nama'] . "'] = '" . addslashes($row['nip']) . "';\n"; 
						} 
						echo '</select>'; ?> 
	     </label></td>
	   </tr>
	   <tr>
	   <td height="47">NIP :  </td>
	   <td><input type="text" name="nip" id="prd_name"/></td>
		 <script type="text/javascript"> 
			<?php echo $jsArray; ?> 
			</script>
	   </tr>
    <tr>
      <td height="31">&nbsp; &nbsp; &nbsp;</td>
      <td><input type="submit" class="btn btn-primary" name="button" id="button" value="Ubah">&nbsp;&nbsp;<input type="button" class="btn btn-danger" name="reset" id="reset" value="Cancel" onclick="window.location='?cat=kelas&page=tampil'"></td>
    </tr>
  </table>
  </center>
</form>
<?php
ob_end_flush();
}else{
	echo "<script>window.location='?cat=kelas&page=tampil'</script>";
}
?>

<?php
if(isset($_GET['edit']))
{
	
	$rs=mysql_query("Update kelas SET namakelas='".$_POST['namakelas']."',jurusan='".$_POST['jurusan']."',walikelas='".$_POST['walikelas']."',nip='".$_POST['nip']."' Where sha1(id_kelas)='".$_GET['id_kelas']."'");
	if($rs)
	{
		echo "<script>window.location='?cat=kelas&page=tampil'</script>";
	}
}
?>
