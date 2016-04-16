<span class="span6">
<h2>
<a href="?cat=penilaian&page=inputnilai" class="btn btn-primary">Input Nilai</a></h2>
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
    <td><a href="../pelajaran/?cat=pelajaran&amp;page=pelajaranedit&amp;id=<?php echo sha1($s['id']); ?>">Edit</a> - <a href="../pelajaran/?cat=pelajaran&amp;page=tampil&amp;del=1&amp;id=<?php echo sha1($s['id']); ?>">Hapus</a></td>
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
	$ff=mysql_query("Delete from pelajaran Where sha1(id)='".$ids."'");
	if($ff)
	{
		echo "<script>window.location='?cat=pelajaran&page=tampil'</script>";
	}
}
?>
