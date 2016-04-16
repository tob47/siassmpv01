 <form id="form1" name="form1" method="post"  action="pages/laporan/laporan_siswa_perkelas.php" target="_blank">
	  <table width="448" height="151" border="0">
    <tr>
      <td height="43" colspan="4"><h2>Cetak Data Siswa </h2></td>
      </tr>
    <tr>
      <td height="50">Cetak Seluruh Data Siswa</td>
      <td>:</td>
      <td><a href="pages/laporan/laporan_ssiswa.php" target="_blank" class="btn btn-primary">OK</a>    
      <td height="50">        </tr>
    <tr>
      <td width="159" height="50">Cetak Data Per Kelas</td>
	  <td width="9">:</td>
      <td width="229"><select name="kelas">
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
      <td width="33" height="50"><input name="cari" type="submit" id="cari" class="btn btn-primary" value="OK" />    </tr>
  </table>
</form>