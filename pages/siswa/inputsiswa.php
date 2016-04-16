<?php
ob_start();
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

<form name="formuser" method="post" action="?cat=siswa&page=simpansiswa&act=1">
 <table width="1052" height="1055" border="0">
	 <tr>
	   <td height="42" colspan="2"><h2>Input Data Siswa </h2></td>
    </tr>
	 <tr>
		 <td height="30">Data Umum</td>
		 <td></td>
	 </tr>
    <tr>
      <td width="200" height="30">Nama Peserta Didik (Lengkap) </td>
      <td width="383"><label>
        <input name="name" type="text" id="name" maxlength="30" />
      </label></td>
    </tr>
    <tr>
      <td height="30">Nomor Induk </td>
      <td><input name="ni" type="text" id="ni" maxlength="8" /></td>
    </tr>
    <tr>
      <td height="30">NISN</td>
      <td><input name="nisn" type="text" id="nisn" maxlength="10" /></td>
    </tr>
    <tr>
      <td height="30">Tempat Tanggal Lahir</td>
      <td><label></label>
        <label>
        <input name="kota" type="text" id="kota" />
      Tanggal 
      <input name="tgl" type="text" class="" id="input" value="12/12/2000" size="15" />
      </label></td>
    </tr>
    <tr height="30">
      <td height="30">Jenis Kelamin </td>
      <td>
      <select name="jenken" id="jenken">
        <option value="laki">Laki - laki</option>
        <option value="perempuan">Perempuan</option>
        </select>
      </td>
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
      <td><input name="status" type="text" id="status" maxlength="20" /></td>
    </tr>
    <tr>
      <td height="30">Anak ke </td>
      <td><input name="anakke" type="text" id="anakke" maxlength="10" /></td>
    </tr>
    <tr>
      <td height="52">Alamat Peserta Didik </td>
      <td><label>
        <textarea name="alamat" id="alamat"></textarea>
        Telp./Hp
        <input name="hp" type="text" id="hp" maxlength="13" /></label></td>
    </tr>
    <tr>
      <td height="30">Sekolah Asal </td>
      <td><label>
        <input name="sekolahasal" type="text" id="sekolahasal" maxlength="20" />
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
    <tr>
      <td height="30">&nbsp;&nbsp;&nbsp;Pada Tanggal</td>
      <td><label>
	  <input name="padatanggal" type="text" id="datepicker" placeholder="Pilih tanggal.."/>
      </label></td>
    </tr>
    <tr>
      <td height="30">Nama Orang Tua </td>
      <td><label></label></td>
    </tr>
    <tr>
      <td height="30">&nbsp;&nbsp;&nbsp;a. Ayah </td>
      <td><label>
        <input name="ayah" type="text" id="ayah" maxlength="30" />
      </label></td>
    </tr>
    <tr>
      <td height="30">&nbsp;&nbsp;&nbsp;b. Ibu </td>
      <td><input name="ibu" type="text" id="ibu" maxlength="30" /></td>
    </tr>
    <tr>
      <td height="48">Alamat Orang Tua </td>
      <td><label>
        <textarea name="alamatortu" id="alamatortu"></textarea>
        Telp./Hp
        <input name="hportu" type="text" id="hportu" maxlength="13" />
      </label></td>
    </tr>
    <tr>
      <td height="30">Pekerjaan Orang Tua </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="30">&nbsp;&nbsp;&nbsp;a. Ayah </td>
      <td><label>
        <input name="pekerjaanayah" type="text" id="pekerjaanayah" maxlength="20" />
      </label></td>
    </tr>
    <tr>
      <td height="30">&nbsp;&nbsp;&nbsp;b. Ibu </td>
      <td><input name="pekerjaanibu" type="text" id="pekerjaanibu" maxlength="20" /></td>
    </tr>
    <tr>
      <td height="30">Nama Wali </td>
      <td><label>
        <input name="wali" type="text" id="wali" maxlength="30"/>
      </label></td>
    </tr>
    <tr>
      <td height="43">Alamat Wali </td>
      <td>
        <textarea name="alamatwali" id="alamatwali"></textarea>
        Telp./Hp
      <input name="hpwali" type="text" id="hpwali" maxlength="13" /></td></tr>
    <tr>
      <td height="30">Pekerjaan Wali </td>
      <td><input name="pekerjaanwali" type="text" id="pekerjaanwali" maxlength="20" /></td>
    </tr>
	 <tr>
		 <td height="30">Photo </td>
		 <td><label>
			 <input type="file" name="gambar" id="gambar" />
		 </label></td>
	 </tr>
	 <tr>
		 <td height="30">Akses Sistem</td>
		 <td></td>
	 </tr>
	 <tr>
		 <td height="30">Username </td>
		 <td><input name="username" type="text" id="username" maxlength="12" /></td>
	 </tr>
    <tr>
      <td height="30">Password</td>
      <td><input name="password" type="password" id="password" maxlength="10" /></td>
    </tr>
	<tr>
      <td height="30"></td>
      <td> <input name="login_hash" type="hidden" id="login_hash" value="siswa" /></td>
    </tr>
  <tr>
  <td></td>
  <td><input type="submit" class="btn btn-primary" name="button" id="button" value="Daftar">&nbsp;&nbsp;<input type="reset" class="btn btn-danger" name="reset" id="reset" value="Reset"> &nbsp;&nbsp;<input type="button" class="btn btn-primary" name="reset" id="reset" value="Cancel" onclick="window.location='?cat=siswa&page=tampil'"></td>
  </tr>
  </table>
</form>
<?php
ob_end_flush();
?>

