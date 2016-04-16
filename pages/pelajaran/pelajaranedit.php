<?php
ob_start();
if(isset($_GET['id_pelajaran']))
{
	$rs=mysql_query("Select * from pelajaran where sha1(id_pelajaran)='".$_GET['id_pelajaran']."'");
	$row=mysql_fetch_array($rs);
?>
<form name="form1" method="post" action="?cat=pelajaran&page=pelajaranedit&id_pelajaran=<?php echo $_GET['id_pelajaran']; ?>&edit=1">
<center>
  <table width="451" height="121" border="0" cellspacing="0" cellpadding="0">
	 <tr>
      <td height="40" colspan="2"><h2 align="center">Edit Nama Pelajaran</h2></td>
      </tr><tr>
      <td width="64%" height="40">Nama Pelajaran</td>
      <td width="64%"><label for="namapelajaran"></label>
      <input type="text" name="namapelajaran" id="namapelajaran" value="<?php echo $row['namapelajaran']; ?>" ></td>
    </tr>
	<tr>
      <td width="64%" height="36">Nilai KKM</td>
      <td width="64%"><label for="kkm"></label>
      <input type="text" name="kkm" id="kkm" value="<?php echo $row['kkm']; ?>" ></td>
    </tr>
    
    <tr>
      <td height="45">&nbsp; &nbsp; &nbsp;</td>
      <td><input type="submit" class="btn btn-primary" name="button" id="button" value="Ubah">&nbsp;&nbsp;<input type="button" class="btn btn-danger" name="reset" id="reset" value="Cancel" onclick="window.location='?cat=pelajaran&page=tampil'"></td>
    </tr>
  </table>
  </center>
</form>
<?php
ob_end_flush();
}else{
	echo "<script>window.location='?cat=pelajaran&page=tampil'</script>";
}
?>
<?php
if(isset($_GET['edit']))
{
	
	$rs=mysql_query("Update pelajaran SET namapelajaran='".$_POST['namapelajaran']."',kkm='".$_POST['kkm']."' Where sha1(id_pelajaran)='".$_GET['id_pelajaran']."'");
	if($rs)
	{
		echo "<script>window.location='?cat=pelajaran&page=tampil'</script>";
	}
}
?>
