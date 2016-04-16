<html><title>DATA PELAJARAN SMP HARAPAN BERSAMA</title>
<style>
@media print {
input.noPrint { display: none; }
}
</style>

<body>

<table width="631" border="0" align="center">
  <tr>
    <td width="154" rowspan="6"><div align="center"><img src="../../img/admin.png" width="153" height="151" /></div></td>
    <td width="461">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center"><strong><font size="+1">SMP HARAPAN BERSAMA  KOTA TEGAL</font></strong></div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center">
      <p>Jalan - jalan yuk ke guci Kab. Tegal Telp. (0283) 619873 </p>
    </div></td>
  </tr>
  <tr>
    <td height="56">&nbsp;</td>
  </tr>
</table>
<div align="center"><strong><font size="+1">LAPORAN DATA PELAJARAN </font></font></strong></div>
<div style="text-align:center;padding:10px;">
	<input class="noPrint" type="button" value="Cetak Laporan" onClick="window.print()">
</div>
<table width='635' height="30" border='1' align='center' cellpadding="0" style="color: #FFFFFF" cellspacing="0" bordercolor="#000000" bgcolor="#666666" >
  <tr>
    <td width='64'><div align="center">No</div></td>
    <td width='370'><div align="center">Nama Pelajaran</div></td>
    <td width='193'><div align="center">Nilai KKM </div></td>
  </tr>
</table>
  <?php
include '../../_db.php';

 	$rw=mysql_query('Select * from pelajaran order by namapelajaran ASC');
  	while($s=mysql_fetch_array($rw)) {
	
$c=$c+1;
$nk=$s['namapelajaran'];
$j=$s['kkm'];


echo ("<table width='635' height='30' border='1' align='center' cellpadding='0' cellspacing='0' bordercolor='#6699FF'>
  <tr>
    <td width='64'><div align='center'>$c</div></td>
    <td width='370'><div align='left'>&nbsp;&nbsp;&nbsp;&nbsp;$nk</div></td>
	<td width='193'><div align='center'>$j</div></td>
  </tr>
</table>");
}
?>

</body>
</html>