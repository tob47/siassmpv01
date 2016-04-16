<?php

include 'config.php';

$tanggal= $_POST['tanggal']; //mengambil data input dari form

list($m, $d, $y) = explode ( '/', $_POST['tanggal']); // membuat tiga variabel didalam fungsi list, setelah dilakukan explode data tanggal.

if (isset($tanggal)) { // jika variabel tanggal terisi
	$select = "INSERT INTO input SET tanggal='$d', bulan='$m', tahun='$y'"; //melakukan select insert
	$query = mysql_query($select); // melakukan query ke database
	if ($query) { // jika query berhasil
		echo "data berhasil dimasukkan, silahkan cek database";
	} else { // jika query gagal
		echo "data gagal dimasukkan". mysql_error();
	}
} else { // jika variabel tanggal tidak terisi
	echo "Silahkan isi data";
}

?>