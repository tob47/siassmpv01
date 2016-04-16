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
<form name="formuser" method="post" action="?cat=guru&page=simpanguru&act=1">
<center>
 <table width="544" height="695" border="0">
	 <tr>
	   <td height="42" colspan="3"><h1 align="center">Input Data Guru </h1></td>
    </tr>
	 <tr>
		 <td height="42" colspan="3">Data Umum</td>
	 </tr>
		<tr>
      <td width="254" height="34">NIP</td>
      <td width="11">:</td>
      <td width="265"><label>
        <input name="nip" type="text" id="nip" maxlength="20" />
      </label></td>
    </tr>
    <tr>
      <td height="42">Nama Guru </td>
      <td>:</td>
      <td><input name="nama" type="text" id="nama" maxlength="40" /></td>
    </tr>
    <tr>
      <td height="39">Tempat Lahir </td>
      <td>:</td>
      <td><input name="kota" type="text" id="kota" maxlength="30" /></td>
    </tr>
    <tr>
	<td>TTL</td>
      <td><label>
        <input name="kota" type="text" id="kota" size="10" />
      </label>
        <select name="tgl" id="tgl">
		<?php
		for ($x=1;$x<=31;$x++) {
		echo("<option value =$x>$x</option>");
		}?>
        </select>
        <label>
        <select name="bln" id="bln">
				 <option value="januari"> Januari</option>
				 <option value="februari"> Februari</option>
				 <option value="maret">Maret</option>
				 <option value="april"> April </option>
				 <option value="mei">Mei</option>
				 <option value="juni">Juni</option>
				 <option value="juli">Juni</option>
				 <option value="agustus">Agustus</option>
				 <option value="september"> September </option>
				 <option value="oktober">Oktober </option>
				 <option value="november">November</option>
				 <option value="desember">Desember</option>
        </select>
        <select name="thn" id="thn">
		<?php
			 $a=Date("Y");
			 $b=$a-17;
			 $c=$a-40;
			 for ($x=$c;$x<=$b;$x++) {
			echo("<option value=$x>$x</option>");
} ?>
        </select>
      </label></td>
    </tr>
    <tr>
	<td> Jenis Kelamin</td> 
      <td width="11">:</td>
      <td width="265" height="42"><select name="jenken" id="jenken">
        <option value="laki-laki">Laki - laki</option>
        <option value="perempuan">Perempuan</option>
      </select></td>
    </tr>
    <tr>
      <td height="33">Agama</td>
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
      <td height="48">Alamat</td>
      <td>:</td>
      <td><label>
        <textarea name="alamat" id="alamat"></textarea>
      </label></td>
    </tr>
    <tr>
      <td height="33">Terhitung Mulai Tanggal </td>
      <td>:</td>
      <td><input name="mengajar" type="text" id="datepicker" placeholder="Pilih tanggal.." maxlength="10" /></td>
    </tr>
    <tr>
      <td height="36">Pendidikan </td>
      <td>:</td>
      <td><label>
        <input name="pendidikan" type="text" id="pendidikan" maxlength="30" />
      </label></td>
    </tr>
    <tr>
      <td height="41">Golongan </td>
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
    <tr>
      <td height="28">Jabatan </td>
      <td>:</td>
      <td><label>
        <input name="jabatan" type="text" id="jabatan" maxlength="30" />
      </label></td>
    </tr>
      <tr><td height="30">Photo </td>
        <td>:</td>
        <td><label>
        <input type="file" name="gambar" id="gambar" />
      </label></td>
    </tr>
	<tr>
		 <td height="45" colspan="3">Akses Sistem</td>
    </tr>
	 <tr>
		 <td height="38">Username </td>
		 <td>:</td>
		 <td><input name="username" type="text" id="username" maxlength="12" /></td>
	 </tr>
    <tr>
      <td height="41">Password</td>
      <td>:</td>
      <td><input name="password" type="password" id="password" maxlength="10" /></td>
    </tr>
	<tr>
      <td height="30"></td>
      <td>&nbsp;</td>
      <td> <input name="login_hash" type="hidden" id="login_hash" value="guru" /></td>
    </tr>
	<tr>
	<td></td>
	<td>&nbsp;</td>
	<td><input type="submit" class="btn btn-primary" name="button" id="button" value="Daftar">&nbsp;&nbsp;<input type="reset" class="btn btn-danger" name="reset" id="reset" value="Reset">&nbsp;&nbsp;<input type="button" class="btn btn-primary" name="reset" id="reset" value="Cancel" onclick="window.location='?cat=guru&page=tampil'"></td>
	</tr>
  </table>
  </center>
</form>
<?php
ob_end_flush();
?>