<?php
mysql_connect("localhost","root",""); 
mysql_select_db("siassmp"); 

{
	
	$rs=mysql_query("Insert into nilai (`tahun`,`semester`,`pelajaran`,`kkm`,`kelas`,`walikelas`,`nip`,`ni`,`nama`,`uh1`,`rm1`,`uh2`,`rm2`,`uh3`,`rm3`,`uh4`,`rm4`,`uh5`,`rm5`,`ratauh`,`tugas1`,`tugas2`,`tugas3`,`tugas4`,`ratatugas`,`nilaiharian`,`us`,`rerata`,`rapor`,`kkmm`,`ket`) values ('".$_POST['tahun']."','".$_POST['semester']."','".$_POST['pelajaran']."','".$_POST['kkm']."','".$_POST['kelas']."','".$_POST['walikelas']."','".$_POST['nip']."','".$_POST['ni']."','".$_POST['nama']."','".$_POST['uh1']."','".$_POST['rm1']."','".$_POST['uh2']."','".$_POST['rm2']."','".$_POST['uh3']."','".$_POST['rm3']."','".$_POST['uh4']."','".$_POST['rm4']."','".$_POST['uh5']."','".$_POST['rm5']."','".$_POST['ratauh']."','".$_POST['tugas1']."','".$_POST['tugas2']."','".$_POST['tugas3']."','".$_POST['tugas4']."','".$_POST['ratatugas']."','".$_POST['nilaiharian']."','".$_POST['us']."','".$_POST['rerata']."','".$_POST['rapor']."','".$_POST['kkmm']."','".$_POST['ket']."')") or die(mysql_error());
	if($rs)
	{
		echo "<script>window.location='../../dashboard.php?cat=penilaian&page=inputnilai'</script>";
	}
}
?>