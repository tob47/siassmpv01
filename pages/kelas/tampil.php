<span class="span7">
<h2>
<a href="?cat=kelas&page=inputkelas" class="btn btn-primary">Tambah Kelas</a></h2>
<p>
</p>
<table width="104%" border="0" cellspacing="0" cellpadding="0" class="table table-striped">
  <tr>
  <td width="9%">No</td>
	<td width="27%">Nama Kelas</td>
    <td width="10%">Jurusan</td>
    <td width="18%">Jumlah Siswa</td>
	<td width="21%">Wali Kelas</td>   
    <td width="15%">&nbsp;</td>
  </tr>
  <?php
  $rw=mysql_query("Select * from kelas");
  while($s=mysql_fetch_array($rw))
  {
  ?>
  <tr>
  <td><?php echo $c=$c+1;?></td>
	<td><?php echo $s['namakelas']; ?></td>
    <td><?php echo $s['jurusan']; ?></td>
	<td><?php echo $s['jumlahsiswa']; ?></td>
    <td><?php echo $s['walikelas']; ?></td>
    <td><a href="?cat=kelas&page=kelasedit&id_kelas=<?php echo sha1($s['id_kelas']); ?>">Edit</a> - <a href="?cat=kelas&page=tampil&del=1&id_kelas=<?php echo sha1($s['id_kelas']); ?>">Hapus</a></td>
  </tr>
  <?php
  }
  ?>
</table>
</span>

<?php
if(isset($_GET['del']))
{
	$ids=$_GET['id_kelas'];
	$ff=mysql_query("Delete from kelas Where sha1(id_kelas)='".$ids."'");
	if($ff)
	{
		echo "<script>window.location='?cat=kelas&page=tampil'</script>";
	}
}
?>