<h2>Perubahan password untuk</h2>
<?php
echo "<h3> Username ".$_SESSION['login_user']."</h3>";
?>
<form method="post">
<label>Password Lama</label>
<input type="password" name="old_password">
<label>Password Baru</label>
<input type="password" name="new_password">
<p></p>
<input type="submit" class="btn btn-default" name="button" value="Ubah">
</form>
<?php
if(isset($_POST['button']))
{
	$sc1=sprintf("Select * from user_login where username='%s' and password='%s'",$_SESSION['login_user'],md5($_POST['old_password']));
	
	$q1=mysql_query($sc1);
	$rc1=mysql_num_rows($q1);
	if($rc1==1)
	{
		$sc2=sprintf("Update user_login Set password='%s' Where username='%s'",md5($_POST['new_password']),$_SESSION['login_user']);
		$q2=mysql_query($sc2);
		if($q2)
		{
			echo "<script>alert('Password berhasil diubah,silahkan login kembali nanti');window.location='dashboard.php'</script>";
		}
	}else{
		echo "<script>alert('Verifikasi Password lama salah')</script>";
	}
}
?>