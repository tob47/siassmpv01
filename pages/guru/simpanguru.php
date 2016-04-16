<?php
if(isset($_GET['act']))

$cekdata="select nip from guru where nip='".$_POST['nip']."'";
$ada=mysql_query($cekdata) or die(mysql_error());

if(mysql_num_rows($ada)>0) {
	echo '<script>
	alert("NIP GURU SUDAH TERDAFTAR !!!"); window.location="?cat=guru&page=inputguru"; </script>';
exit();}

else if ((!$_POST['nip'])||(!$_POST['nama'])||(!$_POST['kota'])||(!$_POST['tgl'])||(!$_POST['jenken'])||(!$_POST['agama'])||(!$_POST['alamat'])||(!$_POST['mengajar'])||(!$_POST['pendidikan'])||(!$_POST['golongan'])||(!$_POST['jabatan'])||(!$_POST['gambar'])||(!$_POST['username'])||(!$_POST['password'])) {
	echo '<script> 
	alert("Ada data yang masih kosong. Harap cek ulang !!!!"); window.location="?cat=guru&page=inputguru"; </script>';
exit();}

else

{
	$newDate = date("Y-m-d", strtotime($_POST['tgl']));
	$newDatee = date("Y-m-d", strtotime($_POST['mengajar']));
	$rs=mysql_query("Insert into guru (`nip`,`nama`,`kota`,`tgl`,`jenken`,`agama`,`alamat`,`mengajar`,`pendidikan`,`golongan`,`jabatan`,`gambar`,`username`,`password`,`login_hash`) values 
	('".$_POST['nip']."','".$_POST['nama']."','".$_POST['kota']."','".$newDate."','".$_POST['jenken']."','".$_POST['agama']."','".$_POST['alamat']."','".$newDatee."','".$_POST['pendidikan']."','".$_POST['golongan']."','".$_POST['jabatan']."','".$_FILES['gambar']['name']."','".$_POST['username']."','".md5($_POST['password'])."','".$_POST['login_hash']."')") or die(mysql_error());
	if($rs)
	{
		echo "<script>window.location='?cat=guru&page=tampil'</script>";
		
	}
}
?>