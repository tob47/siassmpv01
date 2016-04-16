<?php
mysql_connect("localhost","root",""); 
mysql_select_db("siassmp"); 

if(isset($_POST['submit'])){
	
	$id_guru=htmlentities($_POST['id_guru']);
	$id_pelajaran=htmlentities($_POST['id_pelajaran']);
	$id_kelas=htmlentities($_POST['id_kelas']);
	
	$query=mysql_query("insert into tbl_jadwal values('','$id_guru','$id_pelajaran','$id_kelas')");
	
	
	if($query){
		?><script language="javascript">document.location.href="?cat=penjadwalan&page=jadwal_pengajaran&status=1";</script><?php
	}else{
		?><script language="javascript">document.location.href="?cat=penjadwalan&page=jadwal_pengajaran&status=2";</script><?php
	}
	
	
}else{
	unset($_POST['submit']);
}


?>
<span class="span9">
<!--  start page-heading -->
<div id="page-heading">
    <h1>Jadwal Pengajaran</h1>
</div>
<!-- end page-heading -->

<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
    <th rowspan="3" class="sized"><img src="" width="20" height="300" alt="" /></th>
    <th class="topleft"></th>
    <td id="tbl-border-top">&nbsp;</td>
    <th class="topright"></th>
    <th rowspan="3" class="sized"><img src="" width="20" height="300" alt="" /></th>
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
                <td class="green-left">Data berhasil disimpan :)</td>
                <td class="green-right"><a class="close-green"><img src=""   alt="" /></a></td>
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
    
    		<form action="?cat=penjadwalan&page=jadwal_pengajaran" method="post">
 	        <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr valign="top">
              <td><!--  start step-holder -->
                <!--  end step-holder -->
                  <!-- start id-form -->
                  <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                    <tr>
                      <th width="125" height="37" valign="top"><div align="left">Guru</div></th>
                      <td width="72"><select name="id_guru"  class="styledselect_form_1">
                      
                      <?php
					  $guru=mysql_query("select * from guru order by nama asc");
					  while($row1=mysql_fetch_array($guru)){
					  ?>
                          <option value="<?php echo $row1['id_guru'];?>"><?php echo $row1['nama'];?> [ <?php echo $row1['nip'];?> ] </option>
					  <?php
					  }
					  ?>                          
                          
                        </select>
                      </td>
                      <td width="10"></td>
                    </tr>
                    
                    <tr>
                      <th height="39" valign="top"><div align="left">Pelajaran</div></th>
                      <td><select name="id_pelajaran"  class="styledselect_form_1">

                          <?php
						  $pelajaran=mysql_query("select * from pelajaran order by namapelajaran asc");
						  while($row2=mysql_fetch_array($pelajaran)){
						  ?>
							  <option value="<?php echo $row2['id_pelajaran'];?>"><?php echo $row2['namapelajaran'];?></option>
						  <?php
						  }
						  ?>    
  
                        </select>
                      </td>
                      <td></td>
                    </tr>
                    
                    <tr>
                      <th height="43" valign="top"><div align="left">Kelas</div></th>
                      <td><select name="id_kelas"  class="styledselect_form_1">

                          <?php
						  $kelas=mysql_query("select * from kelas order by namakelas asc");
						  while($row3=mysql_fetch_array($kelas)){
						  ?>
							  <option value="<?php echo $row3['id_kelas'];?>"><?php echo $row3['namakelas'];?></option>
						  <?php
						  }
						  ?>    
  
                        </select>
                      </td>
                      <td></td>
                    </tr>
                    
                    <tr>
                      <th>&nbsp;</th>
                      <td valign="top"><input type="submit" name="submit" value="OK" class="btn btn-primary" />
                          <input type="reset" value="Reset" class="btn btn-danger"  />
                      </td>
                      <td></td>
                    </tr>
                  </table>
                <!-- end id-form  -->
              </td>
              <td><!--  start related-activities -->
              </td>
            </tr>
        	</table>
			</form>

			<p><em>*Tidak boleh 1 Kelas, 1 Pelajaran di ajarkan oleh 2 Guru atau lebih<br /></em> </p>           
			<p>&nbsp;</p>
			  <!--  start product-table ..................................................................................... -->
        <form id="mainform" action="">
        <table border="0" width="71%" cellpadding="0" cellspacing="0" id="product-table" class="table table-striped">
        <tr>
            <th width="13%" height="30" ><div align="left"><a href="">Nomor</a> </div></th>
            <th width="24%" ><div align="left"><a href="">Nama Guru</a></div></th>
            <th width="26%" ><div align="left"><a href="">NIP</a></div></th>
            <th width="24%" c><div align="left"><a href="">Mata Pelajaran</a></div></th>
            <th width="24%" ><div align="left"><a href="">Kelas</a></div></th>
            <th width="13%" ><div align="left"><a href="">Aksi</a></div></th>
        </tr>
        
        
        <?php
		$view=mysql_query("select * from tbl_jadwal jadwal, kelas, pelajaran, guru where jadwal.id_kelas=kelas.id_kelas and jadwal.id_pelajaran=pelajaran.id_pelajaran and jadwal.id_guru=guru.id_guru order by id_jadwal asc");
		
		$no=0;
		while($row=mysql_fetch_array($view)){
		?>	
		<tr>
            <td><?php echo $no=$no+1;?></td>
            <td><?php echo $row['nama'];?></td>
            <td><?php echo $row['nip'];?></td>
            <td><?php echo $row['namapelajaran'];?></td>
            <td><?php echo $row['namakelas'];?></td>
            <td class="options-width">
			<a href="?cat=penjadwalan&page=edit_penjadwalan&id_jadwal=<?php echo $row['id_jadwal'];?>">Edit</a>  
            <a href="?cat=penjadwalan&page=hapus_penjadwalan&id_jadwal=<?php echo $row['id_jadwal'];?>">Hapus</a>          
            </td>
        </tr>
		<?php
		}
		?>
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
</span>
