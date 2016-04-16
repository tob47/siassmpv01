
<form id="loginform" action="indexadmin.php?login_attempt=1" method="post">
    <p class=""><input type="text" id="username" name="username" placeholder="Username" /></p>
    <p class=""><input type="password" id="password" name="password" placeholder="Password" /></p>
    <p class=""><button class="btn btn-default btn-block">Masuk</button></p>
    
</form>
<?php
if(isset($_GET['login_attempt']))
{
	$spf=sprintf("Select * from user_login where username='%s' and password='%s'",$_POST['username'],md5($_POST['password']));
	$rs=mysql_query($spf);
	$rw=mysql_fetch_array($rs);
	$rc=mysql_num_rows($rs);
	
	if($rc==1)
	{
		$_SESSION['login_hash']=$rw['login_hash'];
		$_SESSION['login_user']=$rw['username'];
		echo "<script>window.location='dashboard.php'</script>";
	}
	else
		echo "<script>alert('Username dan Password yang anda masukan belum benar, silahkan login kembali')</script>";
}
?>