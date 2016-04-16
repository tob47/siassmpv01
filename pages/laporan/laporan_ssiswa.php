<html><title>DATA  SISWA SMP HARAPAN BERSAMA</title>
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
    <td>&nbsp;</td>
  </tr>
</table>

<table width="200" border="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

<div align="center"><strong><font size="+1">LAPORAN DATA SELURUH SISWA </font></strong></div>
<br>
<div style="text-align:center;padding:10px;">
	<input class="noPrint" type="button" value="Cetak Laporan" onClick="window.print()">
</div>
<table width='806' height="30" border='1' align='center' cellpadding="0" cellspacing="0" style="color: #FFFFFF" bordercolor="#000000" bgcolor="#666666" >
  <tr>
    <td width='58'><div align="center">No</div></td>
    <td width='131'><div align="center">NIS</div></td>
    <td width='154'><div align="center">NISN </div></td>
    <td width='217'><div align="center">Nama</div></td>
    <td width='133'><div align="center">Kelas </div></td>
    <td width='99'><div align="center">Jurusan </div></td>
  </tr>
</table>
  <?php
include '../../_db.php';

$rw=mysql_query('Select * from siswa order by ni ASC');
  	while($s=mysql_fetch_array($rw)) {
	
$c=$c+1.;
$ni=$s['ni'];
$nisn=$s['nisn'];
$nm=$s['name'];
$k=$s['kelas'];

echo ("<table width='806' height='28' border='1' align='center' cellpadding='0' cellspacing='0' bordercolor='#6699FF'>
  <tr>
    <td width='58'><div align='center'>$c</div></td>
    <td width='131'><div align='center'>$ni</div></td>
	<td width='154'><div align='center'>$nisn</div></td>
    <td width='217'><div align='left'>&nbsp;&nbsp;&nbsp;$nm</div></td>
    <td width='133'><div align='center'>$k</div></td>
    <td width='99'><div align='center'>&nbsp;&nbsp;&nbsp;SSN</div></td>
  </tr>
</table>");
}
?>
</body>
</html>