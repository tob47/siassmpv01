<?php
mysql_connect("localhost","root",""); 
mysql_select_db("siassmp"); 
if(isset($_GET['id_guru'])){
	
	$id_guru=$_GET['id_guru'];
	$id_kelas=$_GET['id_kelas'];
	$id_pelajaran=$_GET['id_pelajaran'];
	
	$query=mysql_query("select * from nilai where id_guru='$id_guru' and id_kelas='$id_kelas' and id_pelajaran='$id_pelajaran'");
	$cek=mysql_num_rows($query);
	
	if($cek=='0'){
		//kalo belum ada mode input
		?><script language="javascript">document.location.href="?cat=nilai&page=input_nilai_siswa&id_guru=<?php echo $id_guru;?>&id_pelajaran=<?php echo $id_pelajaran;?>&id_kelas=<?php echo $id_kelas;?>";</script><?php
	}else{
		//kalo sudah ada mode update
		?><script language="javascript">document.location.href="?cat=nilai&page=input_nilai_update&id_guru=<?php echo $id_guru;?>&id_pelajaran=<?php echo $id_pelajaran;?>&id_kelas=<?php echo $id_kelas;?>";</script><?php
	}
	
}else{
	unset($_POST['id_guru']);
}


?>
<span class="span8"
<!--  start page-heading -->
<div id="page-heading">
    <h1>Input Nilai</h1>
    <p></p>
</div>
<!-- end page-heading -->



<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
    <td id="tbl-border-left"></td>
    <td>
    <!--  start content-table-inner ...................................................................... START -->
    <div id="content-table-inner">
    		
            <?php
			if($_GET['status']=='1'){
			?>
			
            <div id="message-green">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td class="green-left">Alhamdulilah sesuatu banget, Data berhasil disimpan :)</td>
                <td class="green-right"><a class=""   alt="" /></a></td>
            </tr>
            </table>
            </div>
            
			<?php
			}
			
			if($_GET['status']=='0'){
			?>

            <div id="message-red">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td class="red-left">Yach data gagal di simpan, cape dech!</td>
                <td class="red-right"><a class="close-red"><img src=""   alt="" /></a></td>
            </tr>
            </table>
            </div>
            
			<?php
			}
			?>

        <form id="mainform" action="">
        <table border="0" width="57%" cellpadding="0" cellspacing="0" id="" >
        <tr>
            <th width="32%" height="39" class="table-header-repeat line-left minwidth-1"><div align="left"><a href="">Nomor</a> </div></th>
            <th width="41%" class="table-header-repeat line-left minwidth-1"><div align="left"><a href="">Nama Mata Pelajaran</a></div></th>
			<th width="27%" class="table-header-repeat line-left minwidth-1"><div align="left"><a href="">Kelas</a></div></th>
        </tr>
        <?php
				
		$id_guru=$_SESSION['id_guru'];
		
		$view=mysql_query("select * from tbl_jadwal jadwal, pelajaran, guru, kelas where jadwal.id_kelas=kelas.id_kelas and jadwal.id_pelajaran=pelajaran.id_pelajaran and jadwal.id_guru='$id_guru' order by id_jadwal asc");
		
		$no=0;
		while($row=mysql_fetch_array($view)){
		?>	
		<tr>
            <td><?php echo $no=$no+1;?></td>
             <td><a href="?cat=nilai&input_nilai&id_guru=<?php echo $id_guru;?>&id_pelajaran=<?php echo $row['id_pelajaran'];?>&id_kelas=<?php echo $row['id_kelas'];?>" style="text-decoration:underline" title="Pilih Mata Pelajaran"><?php echo $row['namapelajaran'];?></a></td>
            <td><?php echo $row['namakelas'];?></td>
        </tr>
		<?php
		}
		?>
        </table>
        </form>
		
        
        
	<div class="clear"></div>
     
    </div>
    <!--  end content-table-inner ............................................END  -->
    </td>
    <td id="tbl-border-right"></td>
</tr>
<tr>
    <th class="sized bottomleft"></th>
    <td id="tbl-border-bottom">&nbsp;</td>
    <th class="sized bottomright"></th>
</tr>
</table>
</span>