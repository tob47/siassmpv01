<?php
	$host="localhost";
	$user="root";
	$password="";	
	$koneksi=mysql_connect($host,$user,$password) or die("Gagal Koneksi");
		mysql_select_db("tanggalan");
?>
