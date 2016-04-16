<?php
mysql_connect("localhost","root",""); 
mysql_select_db("siassmp"); 

{
	
	$rs=mysql_query("Update nilai SET tahun='".$_POST['tahun']."',semester ='".$_POST['semester']."' ,pelajaran='".$_POST['pelajaran']."',kkm='".$_POST['kkm']."',kelas='".$_POST['kelas']."',walikelas='".$_POST['walikelas']."',nip='".$_POST['nip']."',ni='".$_POST['ni']."',nama='".$_POST['nama']."',uh1='".$_POST['uh1']."',rm1='".$_POST['rm1']."',uh2='".$_POST['uh2']."',rm2='".$_POST['rm2']."',uh3='".$_POST['uh3']."',rm3='".$_POST['rm3']."',uh4='".$_POST['uh4']."',rm4='".$_POST['rm4']."',uh5='".$_POST['uh5']."',rm5='".$_POST['rm5']."',ratauh='".$_POST['ratauh']."',tugas1='".$_POST['tugas1']."',tugas2='".$_POST['tugas2']."',tugas3='".$_POST['tugas3']."',tugas4='".$_POST['tugas4']."',ratatugas='".$_POST['ratatugas']."',nilaiharian='".$_POST['nilaiharian']."',us='".$_POST['us']."',rerata='".$_POST['rerata']."',rapor='".$_POST['rapor']."',kkmm='".$_POST['kkmm']."',ket='".$_POST['ket']."' Where sha1(id)='".$_GET['id']."'"); 
	if($rs)
	{
		echo "<script>window.location='../../dashboard.php?cat=penilaian&page=inputnilai'</script>";
	}
}
?>