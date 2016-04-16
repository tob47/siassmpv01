
<form id="loginform" action="indexsiswa.php?login_attempt=1" method="post">
    <p class=""><input type="text" id="username" name="ni" placeholder="Nomor Induk" /></p>
    <p class=""><input type="password" id="password" name="password" placeholder="Password" /></p>
    <p class=""><button class="btn btn-default btn-block">Masuk</button></p>
    
</form>
<?php
if(isset($_GET['login_attempt']))
{
	$spf=sprintf("Select * from siswa where ni='%s' and password='%s'",$_POST['ni'],md5($_POST['password']));
	$rs=mysql_query($spf);
	$rw=mysql_fetch_array($rs);
	$rc=mysql_num_rows($rs);
	
	if($rc==1)
	{
		$_SESSION['login_hash']=$rw['login_hash'];
		$_SESSION['login_user']=$rw['ni'];
		echo "<script>window.location='dashboard.php'</script>";
	}
	else
		echo "<script>alert('Nomor Induk dan Password yang anda masukan belum benar, silahkan login kembali')</script>";
}
?>