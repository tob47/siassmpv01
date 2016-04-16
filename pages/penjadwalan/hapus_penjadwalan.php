<?php
mysql_connect("localhost","root",""); 
mysql_select_db("siassmp");  

mysql_query("Delete from tbl_jadwal where id_jadwal='$_GET[id_jadwal]'");
?>
<script>
alert ("Data Berhasil Dihapus");
</script>
<?php
echo "<script>window.location='?cat=penjadwalan&page=jadwal_pengajaran'</script>";
?>
