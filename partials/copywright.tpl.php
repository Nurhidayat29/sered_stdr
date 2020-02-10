<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div id="footer-center1">&copy; 2016-<?php echo date("Y");?> Aplikasi Sistem Informasi Desa</a> <a target="_blank" href="https://github.com/OpenSID/OpenSID">OpenSID</a> versi - <?php echo AmbilVersi()?> dikembangkan oleh <a target="_blank" href="https://www.facebook.com/groups/OpenSID/">Komunitas OpenSID</a> <br />Tema Sered_stdr ver-2.2 ini dibuat oleh <a href="https://www.facebook.com/parso.widodo" target="_blank">PARSO </a><br/> Dikelola oleh: Pemerintah <?php echo ucwords($this->setting->sebutan_desa)?> <?php echo unpenetration($desa['nama_desa'])?>. </div>
	
	<div id="footer-center2">
	<ul id="global-nav-right" class="center">
	  <li><a target="_blank" href="<?php echo base_url()?>index.php/siteman"><img src="<?php echo base_url()?>desa/themes/sered_stdr/css/images/login_opensid.png" alt="" width="100" height="35"></span></a></li>
	  <li><a href="<?php echo $sosmed[nested_array_search('Facebook',$sosmed)]['link']?>" target="_blank"><span style="color:#fff" ><i class="fa fa-facebook-square fa-2x"></i></span></a></li>
	  <li><a href="<?php echo $sosmed[nested_array_search('Twitter',$sosmed)]['link']?>" target="_blank"><span style="color:#fff"><i class="fa fa-twitter-square fa-2x"></i></span></a></li>
	  <li><a href="<?php echo $sosmed[nested_array_search('YouTube',$sosmed)]['link']?>" target="_blank"><span style="color:#fff"><i class="fa fa-youtube-square fa-2x"></i></span></a></li>
	  <li><a href="<?php echo $sosmed[nested_array_search('Google Plus',$sosmed)]['link']?>" target="_blank"><span style="color:#fff"><i class="fa fa-google-plus-square fa-2x"></i></span></a></li>
	  <li><a href="<?php echo $sosmed[nested_array_search('Instagram',$sosmed)]['link']?>" target="_blank"><span style="color:#fff"><i class="fa fa-instagram fa-2x"></i></span></a></li>
	 </div>
	</ul>
</div>
<div id="footer-down"><center> 
	Website Desa SID ini awalnya dibangun oleh Combine Resource Institution (CRI) Yogyakarta, dan dikembangkan oleh PERKUMPULAN DESA DIGITAL TERBUKA </a> 
	<a target="_blank"  href="https://opendesa.id/">OpenDesa</a> sebagai lembaga resmi pengembang Aplikasi
	<a target="_blank" href="https://github.com/OpenSID/OpenSID/release"> OpenSID</a> , yang telah mendapatkan pengesahan sebagai Badan Hukum Oleh Kemenkumham RI
	<br>Nomor : AHU-0000481.AH.01.07.TAHUN 2019 Tanggal 22 Januari 2019<br/>
	</center>
	</div>


