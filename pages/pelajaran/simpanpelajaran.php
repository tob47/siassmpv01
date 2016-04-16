<?php

if(isset($_GET['act']))

$cekdata="select namapelajaran from pelajaran where namapelajaran='".$_POST['namapelajaran']."'";
$ada=mysql_query($cekdata) or die(mysql_error());

if(mysql_num_rows($ada)>0) {
	echo '<script>
	alert("NAMA MATA PELAJARAAN SUDAH TERDAFTAR !!!"); window.location="?cat=pelajaran&page=inputpelajaran"; </script>';
exit();}

else if ((!$_POST['namapelajaran'])||(!$_POST['kkm'])) {
	echo '<script> 
	alert("Ada data yang masih kosong. Harap cek ulang !!!!"); window.location="?cat=pelajaran&page=inputpelajaran"; </script>';
exit();}

else

{
	
	$rs=mysql_query("Insert into pelajaran (`namapelajaran`,`kkm`) values ('".$_POST['namapelajaran']."','".$_POST['kkm']."')") or die(mysql_error());
	if($rs)
	{
		echo "<script>window.location='?cat=pelajaran&page=tampil'</script>";
	}
}
?>