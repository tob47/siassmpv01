<?php
if(isset($_GET['act']))

$cekdata="select namapegawai from pegawai where namapegawai='".$_POST['namapegawai']."'";
$ada=mysql_query($cekdata) or die(mysql_error());

if(mysql_num_rows($ada)>0) {
	echo '<script>
	alert("NAMA GOLONGAN SUDAH TERDAFTAR !!!"); window.location="?cat=pegawai&page=inputpegawai"; </script>';
exit();}

else if ((!$_POST['namapegawai'])||(!$_POST['pengertian'])) {
	echo '<script> 
	alert("Ada data yang masih kosong. Harap cek ulang !!!!"); window.location="?cat=pegawai&page=inputpegawai"; </script>';
exit();}

else

{
	
	$rs=mysql_query("Insert into pegawai (`namapegawai`,`pengertian`) values ('".$_POST['namapegawai']."','".$_POST['pengertian']."')") or die(mysql_error());
	if($rs)
	{
		echo "<script>window.location='?cat=pegawai&page=tampil'</script>";
	}
}
?>