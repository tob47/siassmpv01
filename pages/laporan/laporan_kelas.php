<html><title>DATA  KELAS SMP HARAPAN BERSAMA</title>
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
    <td><div align="center">Jalan - jalan yuk ke guci Kab. Tegal Telp. (0283) 619873 </div></td>
  </tr>
  <tr>
    <td height="56">&nbsp;</td>
  </tr>
</table>
<div align="center"><strong><font size="+1">LAPORAN DATA KELAS </font></font></strong></div>
<div style="text-align:center;padding:10px;">
	<input class="noPrint" type="button" value="Cetak Laporan" onClick="window.print()">
</div>
<table width='635' height="30" border='1' align='center' cellpadding="0" cellspacing="0" style="color: #FFFFFF" bordercolor="#000000" bgcolor="#666666" >
  <tr>
    <td width='76'><div align="center">No</div></td>
    <td width='184'><div align="center">Nama Kelas</div></td>
    <td width='114'><div align="center">Jurusan </div></td>
    <td width='128'><div align="center">Jumlah Siswa</div></td>
    <td width='121'><div align="center">Wali Kelas </div></td>
  </tr>
</table>
  <?php
include '../../_db.php';

 	$rw=mysql_query('Select * from kelas order by namakelas ASC');
  	while($s=mysql_fetch_array($rw)) {
$c=$c+1;
$nk=$s['namakelas'];
$j=$s['jurusan'];
$js=$s['jumlahsiswa'];
$wk=$s['walikelas'];

echo ("<table width='635' height='30' border='1' align='center' cellpadding='0' cellspacing='0' bordercolor='#6699FF'>
  <tr>
    <td width='76'><div align='center'>$c</div></td>
    <td width='184'><div align='left'>&nbsp;&nbsp;&nbsp;$nk</div></td>
	<td width='114'><div align='center'>$j</div></td>
    <td width='128'><div align='center'>$js</div></td>
    <td width='121'><div align='center'>$wk</div></td>
  </tr>
</table>");
}
?>

</body>
</html>