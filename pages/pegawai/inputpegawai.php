<?php
ob_start();
?>
<form name="form1" method="post" action="?cat=pegawai&page=simpanpegawai&act=1">
<center> 
 <table width="422" height="132" border="0">
	<tr>
	  <td height="43" colspan="3"><h2 align="center">Input Data Golongan </h2></td>
	  </tr>
	<tr>
		<td width="152" height="43">Nama Golongan </td>
		<td width="14">:</td>
		<td width="220"><label>
			<input name="namapegawai" type="text" id="namapegawai" maxlength="30" />
	  </label></td>
    </tr>
	 <tr>
		 <td height="38">Pengertian </td>
		 <td>:</td>
		 <td><input name="pengertian" type="text" id="pengertian" maxlength="30" /></td>
	 </tr>
	 <tr>
		 <td height="38">&nbsp;</td>
		 <td>&nbsp;</td>
		 <td><input type="submit" class="btn btn-primary" name="button" id="button" value="Daftar">&nbsp;&nbsp;<input type="reset" class="btn btn-danger" name="reset" id="reset" value="Reset" > &nbsp;&nbsp;<input type="button" class="btn btn-primary" name="reset" id="reset" value="Cancel" onclick="window.location='?cat=pegawai&page=tampil'"></td>
		
	 </tr>
  </table>
  </center>
</form>
<?php
ob_end_flush();
?>