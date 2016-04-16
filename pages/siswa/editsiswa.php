<?php
ob_start();
if(isset($_GET['id_siswa']))
{
	$rs=mysql_query("Select * from siswa where sha1(ni)='".$_GET['id_siswa']."'");
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
	
<form name="form1" method="post" action="?cat=siswa&page=editsiswa&id_siswa=<?php echo $_GET['id_siswa']; ?>&edit=1">
   <table width="1052" height="1002" border="0">
	   <tr>
	     <td height="42" colspan="2"><h2>Edit Data Siswa </h2></td>
     </tr>
	   <tr>
		   <td height="30">Data Umum </td>
		   <td></td>
	   </tr>
    <tr>
      <td width="200" height="30">Nama Peserta Didik (Lengkap) </td>
      <td width="383"><label>
        <input name="name" type="text" id="name" value="<?php echo $row['name']; ?>" maxlength="30" />
      </label></td>
    </tr>
    <tr>
      <td height="30">Nomor Induk </td>
      <td><input name="ni" type="text" id="ni" value="<?php echo $row['ni']; ?>" maxlength="8" /></td>
    </tr>
    <tr>
      <td height="30">NISN</td>
      <td><input name="nisn" type="text" id="nisn" value="<?php echo $row['nisn']; ?>" maxlength="10" /></td>
    </tr>
    <tr>
      <td height="30">Tempat Tanggal Lahir</td>
      <td><label></label>
        <label>
        <input name="kota" type="text" id="kota" value="<?php echo $row['kota']; ?>" />
      Tanggal 
      <input name="tgl" type="text" class="" id="input" value="12/12/2000" size="15" />
      </label></td>
    </tr>
    <tr height="30"><label>
      <td height="30">Jenis Kelamin </td>
      <td>
      <select name="jenken" id="jenken">
        <option value="laki">Laki - laki</option>
        <option value="perempuan">Perempuan</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td height="30">Agama</td>
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
      <td height="30">Status dalam keluarga </td>
      <td><input name="status" type="text" id="status" maxlength="20" value="<?php echo $row['status']; ?>" /></td>
    </tr>
    <tr>
      <td height="30">Anak ke </td>
      <td><input name="anakke" type="text" id="anakke" maxlength="10" value="<?php echo $row['anakke']; ?>" /></td>
    </tr>
    <tr>
      <td height="30">Alamat Peserta Didik </td>
      <td><label>
        <input name="alamat" type="text" id="alamat" maxlength="70" value="<?php echo $row['alamat']; ?>" />Telp./Hp<input name="hp" type="text" id="hp" maxlength="13" value="<?php echo $row['hp']; ?>" /></label></td>
    </tr>
    <tr>
      <td height="30">Sekolah Asal </td>
      <td><label>
        <input name="sekolahasal" type="text" id="sekolahasal" maxlength="20" value="<?php echo $row['sekolahasal']; ?>" />
      </label></td>
    </tr>
    <tr>
      <td height="30">Diterima di sekolah ini </td>
      <td><label></label></td>
    </tr>
    <tr>
      <td height="30">&nbsp;&nbsp;&nbsp;Di Kelas </td>
      <td><label>
	  <select name="kelas">
			<option selected>--- Pilih Kelas ---</option>
			<?php
			include('../../_db.php');
			$sql = mysql_query("SELECT * FROM kelas ORDER BY namakelas ASC");
			
			if(mysql_num_rows($sql) != 0){
				while($row = mysql_fetch_assoc($sql)){
					echo '<option>'.$row['namakelas'].'</option>';
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
if(isset($_GET['id_siswa']))
{
	$rs=mysql_query("Select * from siswa where sha1(ni)='".$_GET['id_siswa']."'");
	$row=mysql_fetch_array($rs);
?>
    <tr>
      <td height="30">&nbsp;&nbsp;&nbsp;Pada Tanggal</td>
      <td><label>
	  <input name="padatanggal" type="text" id="datepicker" value="<?php echo $row['padatanggal']; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td height="30">Nama Orang Tua </td>
      <td><label></label></td>
    </tr>
    <tr>
      <td height="30">&nbsp;&nbsp;&nbsp;a. Ayah </td>
      <td><label>
        <input name="ayah" type="text" id="ayah" maxlength="30" value="<?php echo $row['ayah']; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td height="30">&nbsp;&nbsp;&nbsp;b. Ibu </td>
      <td><input name="ibu" type="text" id="ibu" maxlength="30" value="<?php echo $row['ibu']; ?>" /></td>
    </tr>
    <tr>
      <td height="30">Alamat Orang Tua </td>
      <td><label>
        <input name="alamatortu" type="text" id="alamatortu" maxlength="40" value="<?php echo $row['alamatortu']; ?>" />
        Telp./Hp
        <input name="hportu" type="text" id="hportu" maxlength="13" value="<?php echo $row['hportu']; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td height="30">Pekerjaan Orang Tua </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="30">&nbsp;&nbsp;&nbsp;a. Ayah </td>
      <td><label>
        <input name="pekerjaanayah" type="text" id="pekerjaanayah" maxlength="20" value="<?php echo $row['pekerjaanayah']; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td height="30">&nbsp;&nbsp;&nbsp;b. Ibu </td>
      <td><input name="pekerjaanibu" type="text" id="pekerjaanibu" maxlength="20" value="<?php echo $row['pekerjaanibu']; ?>"/></td>
    </tr>
    <tr>
      <td height="30">Nama Wali </td>
      <td><label>
        <input name="wali" type="text" id="wali" maxlength="30" value="<?php echo $row['wali']; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td height="30">Alamat Wali </td>
      <td><input name="alamatwali" type="text" id="alamatwali" maxlength="40" value="<?php echo $row['alamatwali']; ?>"/>
        Telp./Hp
      <input name="hpwali" type="text" id="hpwali" maxlength="13" value="<?php echo $row['hpwali']; ?>"/></td>
    </tr>
    <tr>
      <td height="30">Pekerjaan Wali </td>
      <td><input name="pekerjaanwali" type="text" id="pekerjaanwali" maxlength="20" value="<?php echo $row['pekerjaanwali']; ?>"/></td>
    </tr>
    <tr>
      <td height="30">Photo </td>
      <td><label>
        <input type="file" name="gambar" id="gambar" />
      </label></td>
    </tr>
	   <tr>
		   <td height="30">Akses Sistem </td>
		   <td></td>
	   </tr>
	   <tr>
		   <td height="30">Username </td>
		   <td><input name="username" type="text" id="usename" maxlength="12" value="<?php echo $row['username']; ?>"/></td>
	   </tr>
	   <tr>
		   <td height="30">Password </td>
		   <td><input name="pass" type="password" id="pass" maxlength="10" value="<?php echo $row['password']; ?>"/></td>
	   </tr>
	<tr>
      <td height="30"></td>
      <td> <input name="login_hash" type="hidden" id="login_hash" value="siswa" /></td>
    </tr>
	<tr>
	<td> &nbsp; &nbsp; &nbsp;</td>
	<td> <input type="submit" class="btn btn-primary" name="button" id="button" value="Ubah">&nbsp;&nbsp;<input type="button" class="btn btn-danger" name="reset" id="reset" value="Cancel" onclick="window.location='?cat=siswa&page=tampil'"> </td>
	</tr>
  </table>
</form>
<?php

ob_end_flush();
}else{
	echo "<script>window.location='?cat=siswa&page=tampil'</script>";
}
?>

<?php
if(isset($_GET['edit']))
{
	$newDate = date("Y-m-d", strtotime($_POST['tgl']));
	$newDatee = date("Y-m-d", strtotime($_POST['padatanggal']));
	
	$rs=mysql_query("Update siswa SET name='".$_POST['name']."',ni='".$_POST['ni']."',nisn='".$_POST['nisn']."',kota='".$_POST['kota']."',tgl='".$newDate."',jenken='".$_POST['jenken']."',agama='".$_POST['agama']."',status='".$_POST['status']."',anakke='".$_POST['anakke']."',alamat='".$_POST['alamat']."',hp='".$_POST['hp']."',sekolahasal='".$_POST['sekolahasal']."',kelas='".$_POST['kelas']."',padatanggal='".$newDatee."',ayah='".$_POST['ayah']."',ibu='".$_POST['ibu']."',alamatortu='".$_POST['alamatortu']."',hportu='".$_POST['hportu']."',pekerjaanayah='".$_POST['pekerjaanayah']."',pekerjaanibu='".$_POST['pekerjaanibu']."',wali='".$_POST['wali']."',alamatwali='".$_POST['alamatwali']."',hpwali='".$_POST['hpwali']."',pekerjaanwali='".$_POST['pekerjaanwali']."',gambar='".$_POST['gambar']."',username='".$_POST['username']."',password='".$_POST['password']."',login_hash='".$_POST['login_hash']."' Where sha1(ni)='".$_GET['id_siswa']."'");
	if($rs)
	{
		echo "<script>window.location='?cat=siswa&page=tampil'</script>";
	}
}
?>
