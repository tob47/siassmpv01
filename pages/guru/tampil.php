
<span class="">
<h2>
<a href="?cat=guru&page=inputguru" class="btn btn-primary">Tambah Guru</a></h2>
<p>
</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped">
  <tr><h1>
  <td>No </td>
 	<td>NIP </td>
    <td>Nama Guru </td>
    <td>Pendidikan </td>   
	<td>Jabatan </td>
	<td>Mengajar </td>
	<td>Tools</td></h1>
  </tr>
  <?php
  $rw=mysql_query("Select * from guru");
  while($s=mysql_fetch_array($rw))
  {
  ?>
  <tr>
   <td><?php echo $c=$c+1;?></td>
    <td><?php echo $s['nip']; ?></td>
    <td><?php echo $s['nama']; ?></td>
	<td><?php echo $s['pendidikan']; ?></td>
	<td><?php echo $s['jabatan']; ?></td>
	<td><a href="?cat=mengajar&page=tampil&id=<?php echo sha1($s['nama']); ?>">Lihat</a> - <a href="?cat=mengaar&page=inputmengajar&del=1&id_guru=<?php echo sha1($s['ni']); ?>">Tambah</a></td>
    <td><a href="?cat=guru&page=editguru&id_guru=<?php echo sha1($s['id_guru']); ?>">Edit</a> - <a href="?cat=guru&page=tampil&del=1&id_guru=<?php echo sha1($s['id_guru']); ?>">Hapus</a></td>
  </tr>
  <?php
  }
  ?>
</table>
</span>

<?php
if(isset($_GET['del']))
{
	$ids=$_GET['id_guru'];
	$ff=mysql_query("Delete from guru Where sha1(id_guru)='".$ids."'");
	if($ff)
	{
		echo "<script>window.location='?cat=guru&page=tampil'</script>";
	}
}
?>