<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>
			<?=
				$this->setting->website_title
				. ' ' . ucwords($this->setting->sebutan_desa)
				. (($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : '')
				. get_dynamic_title_page_from_path();
			?>
		</title>
		<meta content="utf-8" http-equiv="encoding">
		<meta name="keywords" content="OpenSID,opensid,sid,SID,SID CRI,SID-CRI,sid cri,sid-cri,Sistem Informasi Desa,sistem informasi desa, desa <?= $desa['nama_desa'];?>">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:site_name" content="<?= $desa['nama_desa'];?>"/>
    <meta property="og:type" content="article"/>
		<?php if(isset($single_artikel)): ?>
	    <meta property="og:title" content="<?= $single_artikel["judul"];?>"/>
	    <meta property="og:url" content="<?= base_url()?>index.php/first/artikel/<?= $single_artikel['id'];?>"/>
	    <meta property="og:image" content="<?= base_url()?><?= LOKASI_FOTO_ARTIKEL?>sedang_<?= $single_artikel['gambar'];?>"/>
	    <meta property="og:description" content="<?= potong_teks($single_artikel['isi'], 300)?> ..."/>
			<meta name="description" content="<?= potong_teks($single_artikel['isi'], 300)?> ..."/>
	  <?php else: ?>
			<meta name="description" content="Website <?= ucwords($this->setting->sebutan_desa).' '.$desa['nama_desa'];?>"/>
		<?php endif; ?>
		<?php if(is_file(LOKASI_LOGO_DESA . "favicon.ico")): ?>
			<link rel="shortcut icon" href="<?= base_url()?><?= LOKASI_LOGO_DESA?>favicon.ico" />
		<?php else: ?>
			<link rel="shortcut icon" href="<?= base_url()?>favicon.ico" />
		<?php endif; ?>
	  <link type='text/css' href="<?= base_url()?>desa/themes/sered_stdr/assets/front/css/first.css" rel='Stylesheet' />
      <link rel="stylesheet" href="<?= base_url()?>assets/css/leaflet.css" />
	  
	  <!-- Styles untuk tema dan penyesuaiannya di folder desa -->
	  <link type='text/css' href="<?= base_url().$this->theme_folder.'/'.$this->theme.'/css/first.css'?>" rel='Stylesheet' />
		<link type='text/css' href="<?= base_url()?>assets/css/font-awesome.min.css" rel='Stylesheet' />
		<link type='text/css' href="<?= base_url()?>assets/css/ui-buttons.css" rel='Stylesheet' />
		
		<?php if ($single_artikel OR $gallery): ?>
			<link type='text/css' href="<?= base_url()?>assets/front/css/colorbox.css" rel='Stylesheet' />
		<?php endif ?>
		<?php if (is_file("desa/themes/".$this->theme."/css/desa-web.css")): ?>
			<link type='text/css' href="<?= base_url()?>desa/themes/<?= $this->theme ?>/css/desa-web.css" rel='Stylesheet' />
		<?php endif; ?>

		<script src="<?= base_url()?>assets/front/js/jquery.js"></script>
		<script src="<?= base_url()?>assets/js/leaflet.js"></script>
		<script src="<?= base_url()?>assets/front/js/layout.js"></script>
		<script src="<?= base_url()?>assets/front/js/bootstrap.min.js"></script>
		<script src="<?= base_url()?>assets/js/leaflet-providers.js"></script>
		
		<!-- Datatables -->
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/bootstrap/css/dataTables.bootstrap.min.css">
		<script src="<?= base_url() ?>assets/bootstrap/js/jquery.dataTables.min.js"></script>
		<script src="<?= base_url() ?>assets/bootstrap/js/dataTables.bootstrap.min.js"></script>
		
		<!-- Charts -->
		<script src="<?= base_url()?>assets/js/highcharts/highcharts.js"></script>
		<script src="<?= base_url()?>assets/js/highcharts/exporting.js"></script>
		<script src="<?= base_url()?>assets/js/highcharts/highcharts-more.js"></script>
		
		<div class="catgimg2_container" style="margin-bottom:3px;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
		
		<!-- Diperlukan untuk javascript yg mengakses resources -->
		<script type="text/javascript">
		var BASE_URL = "<?= base_url(); ?>";
		</script>
	    <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.2"></script>	
	</head>
	
	<body>
		<div id="maincontainer">
			<div id="topsection">
				<div class="innertube">
					<div id="header-default">
					<div id="headercontent-default">
							<div id="menu_vert">
								<div id="menuwrapper">
									<?php $this->load->view($folder_themes.'/partials/menu.tpl.php');?>
								</div>
							</div>
							<div id="menu_vert2">
								<?php $this->load->view($folder_themes.'/layouts/carousel.php'); ?>
							</div>
						</div>
						<div id="headleft-default">
								<div id="divlogo">
									<div id="divlogo-txt">
										<div class="intube">
											<div id="siteTitle">
												<h1>
											
											<head>
											<b>
											<script>
var text="<?php echo ucwords($this->setting->sebutan_desa)." "?><?php echo ucwords($desa['nama_desa'])?>"
var speed=30
if (document.all||document.getElementById){
document.write('<span id="highlight">' + text + '</span>')
var storetext=document.getElementById? document.getElementById("highlight") : document.all.highlight
}
else
document.write(text)
var hex=new Array("00","14","28","3C","50","64","78","8C","A0","B4","C8","DC","F0")
var r=1
var g=1
var b=1
var seq=1
function changetext(){
rainbow="#"+hex[r]+hex[g]+hex[b]
storetext.style.color=rainbow
}
function change(){
if (seq==6){
b--
if (b==0)
seq=1
}
if (seq==5){
r++
if (r==12)
seq=6
}
if (seq==4){
g--
if (g==0)
seq=5
}
if (seq==3){
b++
if (b==12)
seq=4
}
if (seq==2){
r--
if (r==0)
seq=3
}
if (seq==1){
g++
if (g==12)
seq=2
}
changetext()
}
function starteffect(){
if (document.all||document.getElementById)
flash=setInterval("change()",speed)
}
starteffect()
</script>
</b>

										</head>
																			
										<h2>
											<?php echo ucwords($this->setting->sebutan_kecamatan." ".$desa['nama_kecamatan'])?><br />
											<?php echo ucwords($this->setting->sebutan_kabupaten." ".$desa['nama_kabupaten'])?></h2>
											
										<h3>
											<?php echo $desa['alamat_kantor']?> - Kodepos <?php echo $desa['kode_pos']?><br />
											<i class="fa fa-phone-square"></i> <?php echo $desa['telepon']?> - <i class="fa fa-envelope"></i> <?php echo $desa['email_desa']?><br />
											<div id="h1_1"><?php echo $desa['website']?></div>
										</h3>
											</div>
										</div>
									</div>
								</div>
								<div id="divlogo-img">
									<div class="intube">
										<a href="<?php echo site_url(); ?>first/">
										<img src="<?php echo LogoDesa($desa['logo']);?>" alt="<?php echo $desa['nama_desa']?>"/>
										</a>
									</div>
								</div>
								<br class="clearboth"/>
						</div>

					</div>

					<?php if(count($teks_berjalan)>0){
						$this->load->view($folder_themes.'/layouts/teks_berjalan.php');
					} ?>

					<div id="mainmenu">
						<?php $this->load->view($folder_themes.'/partials/menu.left.php');?>
					</div>
				</div>
			</div>		