<?php
if(isset($_GET['act']))

$cekdata="select ni from siswa where ni='".$_POST['ni']."'";
$ada=mysql_query($cekdata) or die(mysql_error());

$cekricek="select nisn from siswa where nisn='".$_POST['nisn']."'";
$adadihati=mysql_query($cekricek) or die(mysql_error());

if(mysql_num_rows($ada)>0) {
	echo '<script>
	alert("NOMOR INDUK SISWA SUDAH TERDAFTAR !!!"); window.location="?cat=siswa&page=inputsiswa"; </script>';
exit();}

else if(mysql_num_rows($adadihati)>0) {
	echo '<script>
	alert("NOMOR INDUK SISWA NASIONAl SUDAH TERDAFTAR !!!"); window.location="?cat=siswa&page=inputsiswa"; </script>';
exit();}

else if ((!$_POST['name'])||(!$_POST['ni'])||(!$_POST['nisn'])||(!$_POST['kota'])||(!$_POST['tgl'])||(!$_POST['jenken'])||(!$_POST['agama'])||(!$_POST['status'])||(!$_POST['anakke'])||(!$_POST['alamat'])||(!$_POST['hp'])||(!$_POST['sekolahasal'])||(!$_POST['kelas'])||(!$_POST['padatanggal'])||(!$_POST['ayah'])||(!$_POST['ibu'])||(!$_POST['alamatortu'])||(!$_POST['hportu'])||(!$_POST['pekerjaanayah'])||(!$_POST['pekerjaanibu'])||(!$_POST['username'])||(!$_POST['password'])) {
	echo '<script> 
	alert("Ada data yang masih kosong. Harap cek ulang !!!!"); window.location="?cat=siswa&page=inputsiswa"; </script>';
exit();}

else

{
	$newDate = date("Y-m-d", strtotime($_POST['tgl']));
	$newDatee = date("Y-m-d", strtotime($_POST['padatanggal']));
	$rs=mysql_query("Insert into siswa (`name`,`ni`,`nisn`,`kota`,`tgl`,`jenken`,`agama`,`status`,`anakke`,`alamat`,`hp`,`sekolahasal`,`kelas`,`padatanggal`,`ayah`,`ibu`,`alamatortu`,`hportu`,`pekerjaanayah`,`pekerjaanibu`,`wali`,`alamatwali`,`hpwali`,`pekerjaanwali`,`gambar`,`username`,`password`,`login_hash`) values 
	('".$_POST['name']."','".$_POST['ni']."','".$_POST['nisn']."','".$_POST['kota']."','".$newDate."','".$_POST['jenken']."','".$_POST['agama']."','".$_POST['status']."','".$_POST['anakke']."','".$_POST['alamat']."','".$_POST['hp']."','".$_POST['sekolahasal']."','".$_POST['kelas']."',
	'".$newDatee."','".$_POST['ayah']."','".$_POST['ibu']."','".$_POST['alamatortu']."','".$_POST['hportu']."','".$_POST['pekerjaanayah']."','".$_POST['pekerjaanibu']."','".$_POST['wali']."','".$_POST['alamatwali']."','".$_POST['hpwali']."','".$_POST['pekerjaanwali']."','".$_FILES['gambar']['name']."','".$_POST['username']."','".md5($_POST['password'])."','".$_POST['login_hash']."')") or die(mysql_error());
	if($rs)
	{
		echo "<script>window.location='?cat=siswa&page=tampil'</script>";
		
	}
}
?>

