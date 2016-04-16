<?php
mysql_connect("localhost","root",""); 
mysql_select_db("siassmp"); 

if(isset($_POST['submit'])){
	
	$jumSis = $_POST['jumlah'];
	
	
	for ($i=1; $i<=$jumSis; $i++)
	{
	   $nilai_uh1  = $_POST['nilai_uh1'.$i];
	   $nilai_uh2  = $_POST['nilai_uh2'.$i];
	   $nilai_uh3  = $_POST['nilai_uh3'.$i];
	   $nilai_uh4  = $_POST['nilai_uh4'.$i];
	   $rata_uh  = $_POST['rata_uh'.$i];
	   
	   if($nilai_uh1!=='0')$rata_uh = $nilai_uh1;
	   if($nilai_uh1!=='0' && $nilai_uh2!=='0') $rata_uh = ($nilai_uh1 + $nilai_uh2)/2;
	   if($nilai_uh1!=='0' && $nilai_uh2!=='0' && $nilai_uh3!=='0') $rata_uh = ($nilai_uh1 + $nilai_uh2 + $nilai_uh3)/3;
	   if($nilai_uh1!=='0' && $nilai_uh2!=='0' && $nilai_uh3!=='0' && $nilai_uh4!=='0') $rata_uh = ($nilai_uh1 + $nilai_uh2 + $nilai_uh3 + $nilai_uh4)/4;
	   
	   $id_siswa = $_POST['id_siswa'.$i];
	   $id_guru = $_POST['id_guru'];
	   $kelas = $_POST['kelas'];
	   $id_mapel = $_POST['id_mapel'];
	
	   $query = "insert into tbl_nilai values('','$id_siswa','$id_mapel','$kelas','$id_guru','$nilai_uh1','$nilai_uh2','$nilai_uh3',
	   '$nilai_uh4','$rata_uh')";
	   $hasil=mysql_query($query);
	}
	
	if($hasil){
		?><script language="javascript">document.location.href="?page=input_nilai_selesai&id_guru=<?php echo $id_guru;?>&kelas=<?php echo $kelas;?>&id_mapel=<?php echo $id_mapel;?>";</script><?php
	}else{
		?><script language="javascript">document.location.href="?page=input_nilai_selesai&status=2";</script><?php
	}
	
}else{
	unset($_POST['submit']);
}


?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Input Nilai</h1>
</div>
<!-- end page-heading -->



<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
    <th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
    <th class="topleft"></th>
    <td id="tbl-border-top">&nbsp;</td>
    <th class="topright"></th>
    <th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
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
                <td class="green-left">Selamat, Data berhasil disimpan :)</td>
                <td class="green-right"><a class="close-green"><img src="images/table/icon_close_green.gif"   alt="" /></a></td>
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
                <td class="red-left">Maaf, Data gagal di simpan</td>
                <td class="red-right"><a class="close-red"><img src="images/table/icon_close_red.gif"   alt="" /></a></td>
            </tr>
            </table>
            </div>
            
			<?php
			}
			?>


      	<!--  start product-table ..................................................................................... -->
        
        <!--  start step-holder -->
		<div id="step-holder">
			
		  <div class="step-no-off">1</div>
			<div class="step-light-left"><a href="?page=input_nilai">Pilih Mata Pelajaran</a></div>
			<div class="step-light-right">&nbsp;</div>
            
            <div class="step-no">2</div>
			<div class="step-dark-left">Input Nilai Siswa</div>
			<div class="step-dark-right">&nbsp;</div>
            
            
			<div class="step-no-off">3</div>
			<div class="step-light-left">Selesai</div>
			<div class="step-light-round">&nbsp;</div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
    	<?php
		
		$id_guru=$_GET['id_guru'];
		$kelas=$_GET['kelas'];
		$id_mapel=$_GET['id_mapel'];
		
		$guru=mysql_fetch_array(mysql_query("select * from data_guru where id_guru='$id_guru'"));
		$kelass=mysql_fetch_array(mysql_query("select * from tbl_mapel where kelas='$kelas'"));
		$pelajaran=mysql_fetch_array(mysql_query("select * from tbl_mapel where id_mapel='$id_mapel'"));
		
		$nama_guru=$guru['nama_guru'];
		$nama_kelas=$kelass['kelas'];
		$nama_pelajaran=$pelajaran['nama_mapel'];
		
		?>
    
    
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
        <tr>
          <th valign="top">Nama Guru</th>
          <td><input type="text" class="inp-form" name="nama_guru" value="<?php echo $nama_guru;?>" disabled="disabled"/></td>
          <td></td>
        </tr>
         <tr>
          <th valign="top">Pelajaran</th>
          <td><input type="text" class="inp-form" name="nama_pelajaran" value="<?php echo $nama_pelajaran;?>" disabled="disabled"/></td>
          <td></td>
        </tr>
        <tr>
          <th valign="top">Kelas</th>
          <td><input type="text" class="inp-form" name="kelas" value="<?php echo $nama_kelas;?>" disabled="disabled"/></td>
          <td></td>
        </tr>
      </table>      
      <br />
      
        <form id="mainform" action="home.php?page=input_nilai_siswa" method="post">
        <table border="0" width="80%" cellpadding="0" cellspacing="0" id="product-table">
        <tr>
            <th width="5%" class="table-header-repeat line-left minwidth-1"><a href="">Nomor</a>	</th>
            <th width="30%" class="table-header-repeat line-left minwidth-1"><a href="">Nama Siswa</a></th>
            <th width="15%" class="table-header-repeat line-left minwidth-1"><a href="">NIS</a></th>
            <th width="10%" class="table-header-repeat line-left minwidth-1"><a href="">Nilai UH1</a></th>
            <th width="10%" class="table-header-repeat line-left minwidth-1"><a href="">Nilai UH2</a></th>
            <th width="10%" class="table-header-repeat line-left minwidth-1"><a href="">Nilai UH3</a></th>
            <th width="10%" class="table-header-repeat line-left minwidth-1"><a href="">Nilai UH4</a></th>
            <th width="10%" class="table-header-repeat line-left minwidth-1"><a href="">Rata-rata</a></th>
        </tr>
        
        
        <?php
		$view=mysql_query("SELECT * FROM data_siswa WHERE kelas='$kelas' order by nama_siswa asc");
		
		$i = 1;
		while($row=mysql_fetch_array($view)){
			?>
			<input type="hidden" name="id_guru" value="<?php echo $id_guru;?>" />
			<input type="hidden" name="id_mapel" value="<?php echo $id_mapel;?>" />	
			<input type="hidden" name="kelas" value="<?php echo $kelas;?>" />
			<?php echo "<input type='hidden' name='id_siswa".$i."' value='".$row['id_siswa']."' />"; ?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $row['nama_siswa'];?></td>
				<td><?php echo $row['nis'];?></td>
				<td><?php echo "<input type='text' name='nilai_uh1".$i."' size='10' value='0'/>"; ?></td>
                <td><?php echo "<input type='text' name='nilai_uh2".$i."' size='10' value='0'/>"; ?></td>
                <td><?php echo "<input type='text' name='nilai_uh3".$i."' size='10' value='0'/>"; ?></td>
                <td><?php echo "<input type='text' name='nilai_uh4".$i."' size='10' value='0'/>"; ?></td>
                <td><?php echo "<input type='text' name='rata_uh".$i."' size='10' value='0'/>"; ?></td>
			</tr>
			<?php
			$i++;
		}
			$jumSis = $i-1;
		?>
        <input type="hidden" name="jumlah" value="<?php echo $jumSis ?>" />
        <tr>
            <td colspan="8" align="center"><input type="submit" onclick="return confirm('Apakah Anda yakin?')" value="Input" name="submit"/></td>
        </tr>
        </table>
        <!--  end product-table................................... --> 
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
