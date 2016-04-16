<?php
include("../../_db.php");
$tg1 = (isset($_REQUEST['tgl1']) && !empty($_REQUEST['tgl1']))?$_REQUEST['tgl1']:"";
	$tg2 = (isset($_REQUEST['tgl2']) && !empty($_REQUEST['tgl2']))?$_REQUEST['tgl2']:"";
	$fil = (isset($_REQUEST['field']) && !empty($_REQUEST['field']))?$_REQUEST['field']:"";
	$result=mysql_query("SELECT barang_".$fil.".tgl, barang_".$fil.".kode_barang, data_barang.nama_barang, data_barang.jenis_barang, barang_".$fil.".jumlah
FROM barang_".$fil." LEFT JOIN data_barang ON barang_".$fil.".kode_barang = data_barang.kode_barang  Where tgl BETWEEN '".$tg1."' AND '".$tg2."' GROUP BY ID_".$fil."") or die("Couldn't execute query:<br>" . mysql_error(). "<br>" . mysql_errno());;
$filename="Export-".$fil."-".date("Y-m-d");
$file_ending = "xls";
 
//header info for browser
header("Content-Type: application/ms-excel");
header("Content-Disposition: attachment; filename=$filename.xls");
header("Pragma: no-cache");
header("Expires: 0");
 
/*******Start of Formatting for Excel*******/
//define separator (defines columns in excel & tabs in word)
$sep = "\t"; //tabbed character
 
//start of printing column names as names of MySQL fields
for ($i = 0; $i < mysql_num_fields($result); $i++) {
echo mysql_field_name($result,$i) . "\t";
}
print("\n");
//end of printing column names
 
//start while loop to get data
    while($row = mysql_fetch_array($result))
    {
        $schema_insert = "";
        for($j=0; $j<mysql_num_fields($result);$j++)
        {
            if(!isset($row[$j]))
                $schema_insert .= "NULL".$sep;
            elseif ($row[$j] != "")
                $schema_insert .= "$row[$j]".$sep;
            else
                $schema_insert .= "".$sep;
        }
		
        $schema_insert = str_replace($sep."$", "", $schema_insert);
 $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        print(trim($schema_insert));
        print "\n";
		
    }
	
?>

