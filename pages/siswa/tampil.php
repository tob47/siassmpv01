
<span class="">
<h2>
<a href="?cat=siswa&page=inputsiswa" class="btn btn-primary">Tambah Siswa</a></h2>
<p>
</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped">
  <tr><h1>
  <td>No</td>
  <td>Nama</td>
    <td>Nomor Induk</td>
    <td>No. HP/Telp</td>   
	<td>Jenis Kelamin</td>
	<td>Agama</td>
	<td>TTL</td>
	<td>Kelas</td></h1>
    <td>&nbsp;</td>
  </tr>
  <?php
  $rw=mysql_query("Select * from siswa");
  while($s=mysql_fetch_array($rw))
  {
  ?>
  <tr>
  <td><?php echo $c=$c+1;?></td>
	<td><?php echo $s['name']; ?></td>
    <td><?php echo $s['ni']; ?></td>
    <td><?php echo $s['hp']; ?></td>
	<td><?php echo $s['jenken']; ?></td>
	<td><?php echo $s['agama']; ?></td>
	<td><?php echo $s['tgl']; ?></td>
	<td><?php echo $s['kelas']; ?></td>

    <td><a href="?cat=siswa&page=editsiswa&id_siswa=<?php echo sha1($s['ni']); ?>">Edit</a> - <a href="?cat=siswa&page=tampil&del=1&id_siswa=<?php echo sha1($s['ni']); ?>">Hapus</a></td>
  </tr>
  <?php
  }
  ?>
</table>
</span>

<?php
if(isset($_GET['del']))
{
	$ids=$_GET['id_siswa'];
	$ff=mysql_query("Delete from siswa Where sha1(ni)='".$ids."'");
	if($ff)
	{
		echo "<script>window.location='?cat=siswa&page=tampil'</script>";
	}
}
?>