<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Untuk carousel, slider, teks_berjalan dan widget aparatur_desa -->
<script src="<?php echo base_url()?>assets/front/js/jquery.cycle2.min.js"></script>
<script src="<?php echo base_url()?>assets/front/js/jquery.cycle2.carousel.js"></script>
<!--
	Untuk bisa menghentikan scroller, perlu menambah plugin jquery.pause
	dan mengubah jquery.cycle2.carousel.js, mengikuti contoh di
	https://github.com/malsup/cycle2/issues/178
 -->
<script src="<?php echo base_url()?>assets/front/js/jquery.pause.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
	    $('.carousel').cycle({
			fx: 'carousel',
			speed: 5000,
			timeout: '1',
			easing: 'linear',
			pauseOnHover: true
		});
	});

	function tampil_artikel(id_artikel){
		href = window.location.href;
		first = '/first';
		url = href.substring(0,href.indexOf(first)+first.length)+'/artikel/'+id_artikel;
		window.location = url;
	}
</script>


