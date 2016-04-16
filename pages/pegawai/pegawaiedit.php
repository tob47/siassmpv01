<?php
ob_start();
if(isset($_GET['id']))
{
	$rs=mysql_query("Select * from pegawai where sha1(id)='".$_GET['id']."'");
	$row=mysql_fetch_array($rs);
?>
<form name="form1" method="post" action="?cat=pegawai&page=pegawaiedit&id=<?php echo $_GET['id']; ?>&edit=1">
<center>
  <table width="451" height="155" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="40" colspan="2"><h2 align="center">Edit Nama Golongan </h2></td>
      </tr>
    <tr>
      <td width="44%" height="40">Nama Golongan </td>
      <td width="56%"><label for="namapegawai"></label>
      <input type="text" name="namapegawai" id="namapegawai" value="<?php echo $row['namapegawai']; ?>" maxlength="30" /></td>
    </tr>
	  <tr>
		  <td height="40">Pengertian </td>
		  <td><input name="pengertian" type="text" id="pengertian" value="<?php echo $row['pengertian']; ?>" maxlength="30" /></td>
	  </tr>
    <tr>
      <td height="35">&nbsp; &nbsp; &nbsp;</td>
      <td><input type="submit" class="btn btn-primary" name="button" id="button" value="Ubah">&nbsp;&nbsp;<input type="button" class="btn btn-danger" name="reset" id="reset" value="Cancel" onclick="window.location='?cat=pegawai&page=tampil'"></td>
    </tr>
  </table>
  </center>
</form>
<?php
ob_end_flush();
}else{
	echo "<script>window.location='?cat=pegawai&page=tampil'</script>";
}
?>
<?php
if(isset($_GET['edit']))

$cekdata="select namapegawai from pegawai where namapegawai='".$_POST['namapegawai']."'";
$ada=mysql_query($cekdata) or die(mysql_error());

if(mysql_num_rows($ada)>0) {
	echo '<script>
	alert("NAMA GOLONGAN SUDAH TERDAFTAR !!!"); window.location="?cat=pegawai&page=pegawaiedit"; </script>';
exit();}

else if ((!$_POST['namapegawai'])||(!$_POST['pengertian'])) {
	echo '<script> 
	alert("Ada data yang masih kosong. Harap cek ulang !!!!"); window.location="?cat=pegawai&page=pegawaiedit"; </script>';
exit();}

else
{
	
	$rs=mysql_query("Update pegawai SET namapegawai='".$_POST['namapegawai']."',pengertian='".$_POST['pengertian']."' Where sha1(id)='".$_GET['id']."'");
	if($rs)
	{
		echo "<script>window.location='?cat=pegawai&page=tampil'</script>";
	}
}
?>
