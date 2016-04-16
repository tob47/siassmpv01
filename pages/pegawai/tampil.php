<span class="span7">
<h2>
<a href="?cat=pegawai&page=inputpegawai" class="btn btn-primary">Tambah Golongan</a></h2>
<p>
</p>
<table width="61%" border="0" cellspacing="0" cellpadding="0" class="table table-striped">
  <tr>
  <td width="12%">No</td>
    <td width="35%">Nama Golongan</td>
    <td width="35%">Pengertian</td>   
    <td width="18%">Tools</td>
  </tr>
  <?php
  $rw=mysql_query("Select * from pegawai");
  while($s=mysql_fetch_array($rw))
  {
  ?>
  <tr>
  <td><?php echo $c=$c+1;?></td>
    <td><?php echo $s['namapegawai']; ?></td>
	<td><?php echo $s['pengertian']; ?></td>
    <td><a href="?cat=pegawai&page=pegawaiedit&id=<?php echo sha1($s['id']); ?>">Edit</a> - <a href="?cat=pegawai&page=tampil&del=1&id=<?php echo sha1($s['id']); ?>">Hapus</a></td>
  </tr>
  <?php
  }
  ?>
</table>
</span>


<?php
if(isset($_GET['del']))
{
	$ids=$_GET['id'];
	$ff=mysql_query("Delete from pegawai Where sha1(id)='".$ids."'");
	if($ff)
	{
		echo "<script>window.location='?cat=pegawai&page=tampil'</script>";
	}
}
?>
