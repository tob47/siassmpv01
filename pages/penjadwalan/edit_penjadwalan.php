<?php
mysql_connect("localhost","root",""); 
mysql_select_db("siassmp");  


if(isset($_POST['submit'])){

	$id_jadwal=$_POST['id_jadwal'];
	$id_pelajaran=$_POST['id_pelajaran'];
	$id_guru=$_POST['id_guru'];
	$id_kelas=$_POST['id_kelas'];
	
	$query=mysql_query("update tbl_jadwal set id_pelajaran='$id_pelajaran', id_guru='$id_guru', id_kelas='$id_kelas' where id_jadwal='$id_jadwal'");
	
		?><script language="javascript">document.location.href="?cat=penjadwalan&page=jadwal_pengajaran";</script>
	<?php
	}
	?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Update Jadwal Pengajaran</h1>
</div>
<!-- end page-heading -->
			<?php
			$jadwal=mysql_fetch_array(mysql_query("select * from tbl_jadwal where id_jadwal='$_GET[id_jadwal]'"));
			$id_jadwal=$jadwal['id_jadwal'];
			$id_guru=$jadwal['id_guru'];
			$id_pelajaran=$jadwal['id_pelajaran'];
			$id_kelas=$jadwal['id_kelas'];
			?>

			<form id="mainform" action="?cat=penjadwalan&page=edit_penjadwalan" method="post">
 	        <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr valign="top">
              <td><!--  start step-holder -->
                <!--  end step-holder -->
                  <!-- start id-form -->
                  <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                    <tr>
                      <th height="37" valign="top">Guru</th>
                      <td><select name="id_guru"  class="styledselect_form_1">
                      <option value="<?php echo $id_guru?>">- Pilih Guru Baru -</option>
                      <option value="<?php echo $id_guru?>">- Guru Tidak Dirubah -</option>
                      <?php
					  $guru=mysql_query("select * from guru order by nama asc");
					  while($row1=mysql_fetch_array($guru)){
					  ?>
                          <option value="<?php echo $row1['id_guru'];?>"><?php echo $row1['nama'];?> [ <?php echo $row1['nip'];?> ] </option>
					  <?php
					  }
					  ?>                          
                          
                        </select> </td>
                      <td></td>
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
                      <td><input type="hidden" name="id_jadwal" value="<?php echo $id_jadwal;?>" /></td>
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
                      <td valign="top"><input type="submit" name="submit" value="Ubah" class="btn btn-primary" />
                          <input type="reset" value="Reset" class="btn btn-danger"  />                      </td>
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
