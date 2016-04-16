<!--NAVIGASI MENU UTAMA-->

<div class="leftmenu">
  <ul class="nav nav-tabs nav-stacked">
    <li><a href="dashboard.php"><span class="icon-align-justify"></span> Menu Utama</a></li>
    
    <!--MENU GURU-->
    <?php
	if($_SESSION['login_hash']=="guru")
	{
	?>
    <li class="dropdown"><a href="#"><span class="icon-pencil"></span> Ruang Guru</a>
      <ul>       
        <li><a href="?cat=administrator&page=user">Data Guru</a></li> 
		<li><a href="?cat=nilai&page=input_nilai">Input Nilai</a></li> 
      </ul>
    </li>
    <?php
	}elseif($_SESSION['login_hash']=="walikelas"){
	?>
    <!--MENU WALI KELAS-->
    
   <li class="dropdown"><a href="#"><span class="icon-pencil"></span> Ruang Wali Kelas</a>
      <ul>       
        <li><a href="?cat=administrator&page=user">Data Wali Kelas</a></li> 
		<li><a href="?cat=administrator&page=user">Input Nilai</a></li> 
      </ul>
    </li>
    
   <!--MENU SISWA-->
        <?php
	}elseif($_SESSION['login_hash']=="siswa"){
	?>    
     <li class="dropdown"><a href="#"><span class="icon-pencil"></span> Ruang Siswa</a>
      <ul>       
        <li><a href="?cat=administrator&page=user">Data Siswa</a></li> 
		<li><a href="?cat=administrator&page=user">Data Nilai</a></li> 
      </ul>
    </li>
     <!--MENU ADMIN-->
        <?php
	}elseif($_SESSION['login_hash']=="administrator"){
	?>    
    <li class="dropdown"><a href="#"><span class="icon-pencil"></span> Setting</a>
      <ul>       
        <li><a href="?cat=administrator&page=user">Admin</a></li> 
		 <li><a href="?cat=sekolah&page=tampil">Sekolah</a></li> 
      </ul>
    </li>
	
	<li class="dropdown"><a href="#"><span class="icon-pencil"></span> Management Data</a>
      <ul>       
        <li><a href="?cat=siswa&page=tampil">Siswa</a></li> 
		<li><a href="?cat=kelas&page=tampil">Kelas</a></li>
		<li><a href="?cat=pelajaran&page=tampil">Pelajaran</a></li>
      </ul>
    </li>
	<li class="dropdown"><a href="#"><span class="icon-pencil"></span> Guru &amp; Golongan Pegawai</a>
      <ul>  
	  <li><a href="?cat=guru&page=tampil">Data Guru & Golongan</a></li>      
        <li><a href="?cat=pegawai&page=tampil">Golongan Pegawai</a></li> 
      </ul>
    </li>
	<li class="dropdown"><a href="#"><span class="icon-pencil"></span> Menu Akademik</a>
      <ul>       
        <li><a href="?cat=penilaian&page=tampilnilai">Penilaian Siswa</a></li> 
		<li><a href="?cat=administrator&page=user">Cetak Rapor Siswa</a></li>
      </ul>
    </li>
	<li class="dropdown"><a href="#"><span class="icon-pencil"></span> Menu Penjadwalan</a>
      <ul>       
        <li><a href="?cat=penjadwalan&page=jadwal_pengajaran">Penjadwalan Guru</a></li> 
		<li><a href="?cat=administrator&page=user">Cetak Rapor Siswa</a></li>
      </ul>
    </li>
	<li class="dropdown"><a href="#"><span class="icon-pencil"></span> Management Laporan</a>
      <ul>       
        <li><a href="pages/laporan/laporan_kelas.php" target="_blank">Data Kelas</a></li> 
		<li><a href="?cat=laporan&page=laporan_siswa">Data Siswa</a></li> 
		<li><a href="pages/laporan/laporan_pelajaran.php" target="_blank">Data Pelajaran</a></li> 
		<li><a href="pages/laporan/laporan_guru.php" target="_blank">Data Guru</a></li> 
		<li><a href="">Data Nilai</a></li> 
      </ul>
    </li>
	
	<?php
	}
	?>
  </ul>
</div>
<!--leftmenu-->

</div>
<!--mainleft--> 
<!-- END OF LEFT PANEL -->