<?php
ob_start();
?>
<form name="form1" method="post" action="?cat=pelajaran&page=simpanpelajaran&act=1">
<center>
 <table width="378" height="174" border="0">
	 <tr>
	   <td height="45" colspan="3"><h2 align="center">Input Data Pelajaran </h2></td>
      </tr>
	 <tr>
		 <td width="125" height="38">Nama Pelajaran </td>
		 <td width="7">:</td>
		 <td width="232"><label>
			 <input name="namapelajaran" type="text" id="namapelajaran" maxlength="30" />
	   </label></td>
	 </tr>
	 <tr>
		 <td height="51">Nilai KKM </td>
		 <td>:</td>
		 <td><input name="kkm" type="text" id="kkm" maxlength="8" /></td>
	 </tr>
	 <tr>
		 <td height="30">&nbsp;</td>
		 <td>&nbsp;</td>
		 <td><input type="submit" class="btn btn-primary" name="button" id="button" value="Daftar">&nbsp;&nbsp;<input type="reset" class="btn btn-danger" name="reset" id="reset" value="Reset" > &nbsp;&nbsp;<input type="button" class="btn btn-primary" name="reset" id="reset" value="Cancel" onclick="window.location='?cat=pelajaran&page=tampil'"></td>
	 </tr>
</table>
  </center>
</form>
<?php
ob_end_flush();
?>
<p></p>
<p></p>