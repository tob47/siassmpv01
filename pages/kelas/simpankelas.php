<?php
if(isset($_GET['act']))

$cekdata="select namakelas from kelas where namakelas='".$_POST['namakelas']."'";
$ada=mysql_query($cekdata) or die(mysql_error());

if(mysql_num_rows($ada)>0) {
	echo '<script>
	alert("NAMA KELAS SUDAH TERDAFTAR !!!"); window.location="?cat=kelas&page=inputkelas"; </script>';
exit();}

else if ((!$_POST['namakelas'])||(!$_POST['jurusan'])||(!$_POST['walikelas'])) {
	echo '<script> 
	alert("Ada data yang masih kosong. Harap cek ulang !!!!"); window.location="?cat=kelas&page=inputkelas"; </script>';
exit();}

else

{
	
	$rs=mysql_query("Insert into kelas (`namakelas`,`jurusan`,`walikelas`,`nip`) values ('".$_POST['namakelas']."','".$_POST['jurusan']."','".$_POST['walikelas']."','".$_POST['nip']."')") or die(mysql_error());
	if($rs)
	{
		echo "<script>window.location='?cat=kelas&page=tampil'</script>";
	}
}
?>