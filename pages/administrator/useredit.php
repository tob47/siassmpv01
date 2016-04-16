<?php
ob_start();
if(isset($_GET['id']))
{
	$rs=mysql_query("Select * from user_login where sha1(username)='".$_GET['id']."'");
	$row=mysql_fetch_array($rs);
?>
<form name="form1" method="post" action="?cat=administrator&page=useredit&id=<?php echo $_GET['id']; ?>&edit=1">
<center>
  <table width="367" height="270" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="48" colspan="2"><h2 align="center">Edit Data Admin </h2></td>
    </tr>
    <tr>
      <td width="39%" height="40">Nama</td>
      <td width="61%"><label for="name"></label>
      <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>" ></td>
    </tr>
	<tr>
      <td width="39%" height="40">Username</td>
      <td width="61%"><label for="username"></label>
      <input type="text" name="username" id="username" value="<?php echo $row['username']; ?>" ></td>
    </tr>
    <tr>
      <td width="39%" height="40">Password</td>
      <td><input type="password" name="password" id="password" value="<?php echo $row['password']; ?>"></td>
    </tr>
    <tr>
      <td width="39%" height="39">Jenis Login</td>
      <td> <select name="jenis" id="jenis">
        <option value="">Jenis login</option>
        <option value="siswa">Siswa</option>
        <option value="guru">Guru</option>
        <option value="walikelas">Wali Kelas</option>
      </select></td>
	  <td width="0%"></td>
    </tr>
    <tr>
      <td height="63">&nbsp; &nbsp; &nbsp;</td>
      <td><input type="submit" class="btn btn-primary" name="button" id="button" value="Ubah">&nbsp;&nbsp;<input type="button" class="btn btn-danger" name="reset" id="reset" value="Cancel" onclick="window.location='?cat=administrator&page=user'"></td>
    </tr>
  </table>
  </center>
</form>
<?php
ob_end_flush();
}else{
	echo "<script>window.location='?cat=administrator&page=user'</script>";
}
?>
<?php
if(isset($_GET['edit']))
 
{
	$rs=mysql_query("Update user_login SET name='".$_POST['name']."',username='".$_POST['username']."',password='".md5($_POST['password'])."',login_hash='".$_POST['jenis']."' Where sha1(username)='".$_GET['id']."'");
	if($rs)
	{
		echo "<script>window.location='?cat=administrator&page=user'</script>";
	}
}
?>
