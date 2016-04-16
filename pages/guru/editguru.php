<?php
ob_start();
if(isset($_GET['id_guru']))
{
	$rs=mysql_query("Select * from guru where sha1(id_guru)='".$_GET['id_guru']."'");
	$row=mysql_fetch_array($rs);
?>
<link rel="stylesheet" href="js/jquery-ui.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.9.1.js" ></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript">
		$(function() {
		$( "#input" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
		});
	</script>
	
<form name="form1" method="post" action="?cat=guru&page=editguru&id_guru=<?php echo $_GET['id_guru']; ?>&edit=1">
<center>
   <table width="459" height="750" border="0">
	   <tr>
	     <td height="38" colspan="3"><h2 align="center">Edit Data Guru </h2></td>
     </tr>
	   <tr>
		   <td height="29" colspan="3"><div align="left">Data Umum </div></td>
	   </tr>
		<tr>
      <td width="214" height="37">NIP</td>
      <td width="13">:</td>
      <td width="218"><label>
        <input name="nip" type="text" id="nip" value="<?php echo $row['nip']; ?>" maxlength="30" />
      </label></td>
    </tr>
    <tr>
      <td height="37">Nama Guru </td>
      <td>:</td>
      <td><input name="nama" type="text" id="nama" value="<?php echo $row['nama']; ?>" maxlength="8" /></td>
    </tr>
    <tr>
      <td height="36">Tempat Lahir</td>
      <td>:</td>
      <td><input name="kota" type="text" id="kota" value="<?php echo $row['kota']; ?>" maxlength="10" /></td>
    </tr>
    <tr>
      <td height="35">Tanggal Lahir</td>
      <td>:</td>
      <td>
        <label>
      <input name="tgl" type="text" class="" id="input" value="<?php echo $row['tgl']; ?>" />
      </label></td>
    </tr>
    <tr>
      <td> Jenis Kelamin</td>
      <td height="39"> : </td>
      <td width="218">
      <select name="jenken" id="jenken">
        <option value="laki-laki">Laki - laki</option>
        <option value="perempuan">Perempuan</option>
        </select>      </td>
    </tr>
    <tr>
      <td height="36">Agama</td>
      <td>:</td>
      <td><label>
        <select name="agama" >
          <option value="islam">Islam</option>
          <option value="budha">Budha</option>
          <option value="hindu">Hindu</option>
          <option value="katolik">Katolik</option>
          <option value="protestan">Protestan</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td height="35">Alamat </td>
      <td>:</td>
      <td><input name="alamat" type="text" id="alamat" maxlength="70" value="<?php echo $row['alamat']; ?>" /></td>
    </tr>
    <tr>
      <td height="36">Terhitung Mulai Tanggal </td>
      <td>:</td>
      <td><input name="mengajar" type="text" id="datepicker" value="<?php echo $row['mengajar']; ?>" /></td>
    </tr>
    <tr>
      <td height="35">Pendidikan </td>
      <td>:</td>
      <td>
        <input name="pendidikan" type="text" id="pendidikan" maxlength="70" value="<?php echo $row['pendidikan']; ?>" /></td>
    </tr>
    <tr>
      <td height="39">Golongan </td>
      <td>:</td>
      <td><label>
        <select name="golongan">
			<option selected>--- Pilih Golongan ---</option>
			<?php
			include('../../_db.php');
			$sql = mysql_query("SELECT * FROM pegawai ORDER BY namapegawai ASC");
			if(mysql_num_rows($sql) != 0){
				while($row = mysql_fetch_assoc($sql)){
					echo '<option>'.$row['namapegawai'].'</option>';
				}
			}
			?>
		</select>
      </label></td>
    </tr>
    
	<?php

ob_end_flush();
}
?>
<?php
ob_start();
if(isset($_GET['id_guru']))
{
	$rs=mysql_query("Select * from guru where sha1(id_guru)='".$_GET['id_guru']."'");
	$row=mysql_fetch_array($rs);
?>
	<tr>
      <td height="36">Jabatan </td>
      <td>:</td>
      <td><label>
		 <input name="jabatan" type="text" id="jabatan" maxlength="6" value="<?php echo $row['jabatan']; ?>"/>
		</label></td>
    </tr>
    <tr>
      <td height="45">Photo </td>
      <td>:</td>
      <td><label>
        <input type="file" name="gambar" id="gambar" />
      </label></td>
    </tr>
	   <tr>
		   <td height="39" colspan="3"><div align="left">Akses Sistem</div></td>
	   </tr>
	   <tr>
		   <td height="42">Username </td>
		   <td>:</td>
		   <td><input name="username" type="text" id="username" maxlength="12" value="<?php echo $row['username']; ?>"  /></td>
	   </tr>
	   <tr>
		   <td height="38">Password</td>
		   <td>:</td>
		   <td><input name="password" type="password" id="password" maxlength="10" value="<?php echo $row['password']; ?>" /></td>
	   </tr>
     <tr>
      <td height="30"></td>
      <td>&nbsp;</td>
      <td> <input name="login_hash" type="hidden" id="login_hash" value="guru" /></td>
    </tr>
	<tr>
	<td height="48"> &nbsp; &nbsp; &nbsp;</td>
	<td>&nbsp;</td>
	<td> <input type="submit" class="btn btn-primary" name="button" id="button" value="Ubah">&nbsp;&nbsp;<input type="button" class="btn btn-danger" name="reset" id="reset" value="Cancel" onclick="window.location='?cat=guru&page=tampil'"> </td>
	</tr>
  </table>
  </center>
</form>
<?php

ob_end_flush();
}else{
	echo "<script>window.location='?cat=guru&page=tampil'</script>";
}
?>

<?php
if(isset($_GET['edit']))

{
	$newDate = date("Y-m-d", strtotime($_POST['tgl']));
	$newDatee = date("Y-m-d", strtotime($_POST['mengajar']));
	
	$rs=mysql_query("Update guru SET nip='".$_POST['nip']."',nama='".$_POST['nama']."',kota='".$_POST['kota']."',tgl='".$newDate."',jenken='".$_POST['jenken']."',agama='".$_POST['agama']."',alamat='".$_POST['alamat']."',mengajar='".$newDatee."',pendidikan='".$_POST['pendidikan']."',golongan='".$_POST['golongan']."',jabatan='".$_POST['jabatan']."',gambar='".$_POST['gambar']."',username='".$_POST['username']."',password='".$_POST['password']."',login_hash='".$_POST['login_hash']."' Where sha1(id_guru)='".$_GET['id_guru']."'");
	if($rs)
	{
		echo "<script>window.location='?cat=guru&page=tampil'</script>";
	}
}
?>
