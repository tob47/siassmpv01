<span class="span6">
<h2>
<a href="?cat=pelajaran&page=inputpelajaran" class="btn btn-primary">Tambah Pelajaran</a></h2>
<p>
</p>
<table width="40%" border="1" cellspacing="0" cellpadding="0" class="table table-striped">
  <tr bgcolor="#99CC00">
  <td>No</td>
    <td width="41%" height="35">Nama Pelajaran</td>
    <td width="34%">Nilai KKM</td>   
    <td width="25%">Tools</td>
  </tr>
  <?php
  $rw=mysql_query("Select * from pelajaran");
  while($s=mysql_fetch_array($rw))
  {
  ?>
  <tr>
  	<td><?php echo $c=$c+1;?></td>
    <td><?php echo $s['namapelajaran']; ?></td>
	<td><?php echo $s['kkm']; ?></td>
    <td><a href="?cat=pelajaran&page=pelajaranedit&id_pelajaran=<?php echo sha1($s['id_pelajaran']); ?>">Edit</a> - <a href="?cat=pelajaran&page=tampil&del=1&id_pelajaran=<?php echo sha1($s['id_pelajaran']); ?>">Hapus</a></td>
  </tr>
  <?php
  }
  ?>
</table>
</span>

<?php
if(isset($_GET['del']))
{
	$ids=$_GET['id_pelajaran'];
	$ff=mysql_query("Delete from pelajaran Where sha1(id_pelajaran)='".$ids."'");
	if($ff)
	{
		echo "<script>window.location='?cat=pelajaran&page=tampil'</script>";
	}
}
?>
