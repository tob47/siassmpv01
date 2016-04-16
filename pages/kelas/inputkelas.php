<?php
ob_start();
?>
<form name="form1" method="post" action="?cat=kelas&page=simpankelas&act=1">
<center>
   <table width="333" height="255" border="0" align="center">
   		<tr>
		   <td height="41" colspan="2"><h2 align="center">Input Data Kelas 
		     </h2>
	       <label>	         </label></td>
	   </tr>
	   <tr>
		   <td width="142" height="41">Nama Kelas : </td>
		   <td width="181"><label>
			   <input name="namakelas" type="text" id="namakelas" maxlength="30" />
	     </label></td>
	   </tr>
	   <tr>
		   <td width="142" height="38">Jurusan : </td>
	     <td width="181">
		   <label>
		   <select name="jurusan" id="jurusan">
		   <option value="" selected="selected">--Pilih Jurusan--</option>
		     <option value="SSN">SSN</option>
	       </select>
		   </label>	     </td>
	   </tr>
	   <tr>
		   <td width="142" height="42">Wali Kelas : </td>
	     <td width="181"><label>
	       <?php // Koneksi 
						mysql_connect("localhost","root",""); 
						mysql_select_db("siassmp"); 
						
						$result = mysql_query("select * from guru"); 
						$jsArray = "var prdName = new Array();\n"; 
						
						echo '<select name="walikelas" onchange="document.getElementById(\'prd_name\').value = prdName[this.value]">'; echo '<option>--Pilih Wali Kelas--</option>'; 
						while ($row = mysql_fetch_array($result)) { 
						echo '<option value="' . $row['nama'] . '">' . $row['nama'] . '</option>'; 
						$jsArray .= "prdName['" . $row['nama'] . "'] = '" . addslashes($row['nip']) . "';\n"; 
						} 
						echo '</select>'; ?> 
	     </label></td>
	   </tr>
	   <tr>
	   <td height="47">NIP :  </td>
	   <td><input type="text" name="nip" id="prd_name" /></td>
		 <script type="text/javascript"> 
			<?php echo $jsArray; ?> 
			</script>
	   </tr>
	   <tr>
	   <td></td>
	   <td><label><input type="submit" class="btn btn-primary" name="button" id="button" value="Daftar">
     &nbsp;&nbsp;
     <input type="reset" class="btn btn-danger" name="reset" id="reset" value="Reset">
	 &nbsp;&nbsp;<input type="button" class="btn btn-primary" name="reset" id="reset" value="Cancel" onclick="window.location='?cat=kelas&page=tampil'">
	   </label></td>
	   </tr>
  </table>
      <p></p>
  </center>
</form>
<?php
ob_end_flush();
?>


