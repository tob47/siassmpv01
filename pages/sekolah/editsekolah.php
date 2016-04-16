<?php
ob_start();
if(isset($_GET['id_sekolah']))
{
	$rs=mysql_query("Select * from sekolah where sha1(nama)='".$_GET['id_sekolah']."'");
	$row=mysql_fetch_array($rs);
?>

<form name="form1" method="post" action="?cat=sekolah&page=editsekolah&id_sekolah=<?php echo $_GET['id_sekolah']; ?>&edit=1">
<center><p><h2>Edit Management Data Sekolah </h2></p> 
 <table width="730" height="574" border="0">
    <tr>
      <td width="294" height="36">Nama Sekolah </td>
      <td width="426"><label>
        <input name="nama" type="text" id="nama" value="<?php echo $row['nama']; ?>" maxlength="30" />
      </label></td>
    </tr>
    <tr>
      <td height="40">NSS</td>
      <td><input name="nss" type="text" id="nss" value="<?php echo $row['nss']; ?>" maxlength="17" /></td>
    </tr>
    <tr>
      <td height="39">NIS</td>
      <td><input name="nis" type="text" id="nis" value="<?php echo $row['nis']; ?>" maxlength="17" /></td>
    </tr>
    <tr>
      <td height="35">NTSN</td>
      <td><label>
        <input name="ntsn" type="text" id="ntsn" value="<?php echo $row['ntsn']; ?>" maxlength="20" />
      </label></td>
    </tr>
    <tr>
      <td height="41">SKPD</td>
      <td><label>
        <input name="skpd" type="text" id="skpd" value="<?php echo $row['skpd']; ?>" maxlength="20" />
      </label></td>
    </tr>
    <tr>
      <td height="53">Alamat</td>
      <td><label><input name="alamat" type="text" id="alamat" value="<?php echo $row['alamat']; ?>" size="50"  maxlength="100" />
	  </label></td>
    </tr>
    <tr>
      <td height="39">Nomor Telepon </td>
      <td><label>
        <input name="nomor" type="text" id="nomor" value="<?php echo $row['nomor']; ?>" maxlength="12" />
      </label></td>
    </tr>
    <tr>
      <td height="40">Fax</td>
      <td><label>
        <input name="fax" type="text" id="fax" value="<?php echo $row['fax']; ?>" maxlength="12" />
      </label></td>
    </tr>
    <tr>
      <td height="37">Email</td>
      <td><label>
        <input name="email" type="text" id="email" value="<?php echo $row['email']; ?>" maxlength="30" />
      </label></td>
    </tr>
    <tr>
      <td height="48">Profile</td>
      <td><label><input name="profile" type="text" id="profile" value="<?php echo $row['profile']; ?>" size="60"  maxlength="100" />
      </label></td>
    </tr>
    <tr>
      <td height="41">Tahun Ajaran Aktif </td>
      <td><label>
      <select name="tahun" id="tahun">
	  <option value="">--Pilih Tahun Ajaran--</option>
        <option value="2011-2012">2011-2012</option>
        <option value="2012-2013">2012-2013</option>
        <option value="2013-2014">2013-2014</option>
        <option value="2014-2015">2014-2015</option>
        <option value="2015-2016">2015-2016</option>
        <option value="2016-2017">2016-2017</option>
        <option value="2017-2018">2017-2018</option>
          </select>
      </label></td>
    </tr>
	<tr>
      <td height="51">Semester</td>
      <td><label>
      <select name="semester" id="semester">
        <option>--Pilih Semester--</option>
        <option value="Genap">Genap</option>
        <option value="Ganjil">Ganjil</option>
      </select>
      </label></td>
    </tr>
	<tr>
	<td height="46"> &nbsp; &nbsp; &nbsp;</td>
	<td> <input type="submit" class="btn btn-primary" name="button" id="button" value="Ubah">&nbsp;&nbsp;<input type="button" class="btn btn-danger" name="reset" id="reset" value="Cancel" onclick="window.location='?cat=sekolah&page=tampil'"> </td>
	</tr>
  </table>
  </center>
</form>

<?php

ob_end_flush();
}else{
	echo "<script>window.location='?cat=sekolah&page=tampil'</script>";
}
?>

<?php
if(isset($_GET['edit']))
{
	
	$rs=mysql_query("Update sekolah SET nama='".$_POST['nama']."',nss='".$_POST['nss']."',nis='".$_POST['nis']."',ntsn='".$_POST['ntsn']."',skpd='".$_POST['skpd']."',alamat='".$_POST['alamat']."',nomor='".$_POST['nomor']."',fax='".$_POST['fax']."',email='".$_POST['email']."',profile='".$_POST['profile']."',tahun='".$_POST['tahun']."',semester='".$_POST['semester']."' Where sha1(nama)='".$_GET['id_sekolah']."'");
	if($rs)
	{
		echo "<script>window.location='?cat=sekolah&page=tampil'</script>";
	}
}
?>
