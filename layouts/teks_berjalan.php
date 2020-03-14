<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!--
	Untuk bisa menghentikan scroller, perlu menambah plugin jquery.pause
	dan mengubah jquery.cycle2.carousel.js, mengikuti contoh di
	https://github.com/malsup/cycle2/issues/178
 -->

<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.cycle2.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.cycle2.carousel.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.pause.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
    $('#scroller').cycle({
			fx: 'carousel',
			speed: 35000,
			timeout: '20',
			easing: 'linear',
			pauseOnHover: true,
			slides: '> span',
			throttleSpeed: true
		});
		$( '#scroller' ).on( 'cycle-paused', function( event, opts ) {
			$('#scroller span.cycle-slide').each(function() {
		    	this.style.color = "white";
			});
		});
		$( '#scroller' ).on( 'cycle-resumed', function( event, opts ) {
			$('#scroller span.cycle-slide').each(function() {
		    	this.style.color = "white";
			});
		});
	});
</script>
<script type="text/javascript">
									<!--
									function showTime() {
										var a_p = "";
										var today = new Date();
										var curr_hour = today.getHours();
										var curr_minute = today.getMinutes();
										var curr_second = today.getSeconds();
										if (curr_hour < 12) {
											a_p = "AM";
										} else {
											a_p = "PM";
										}
										if (curr_hour == 0) {
											curr_hour = 12;
										}
										if (curr_hour > 12) {
											curr_hour = curr_hour - 12;
										}
										curr_hour = checkTime(curr_hour);
										curr_minute = checkTime(curr_minute);
										curr_second = checkTime(curr_second);
									 document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
										}
							 
									function checkTime(i) {
										if (i < 10) {
											i = "0" + i;
										}
										return i;
									}
									setInterval(showTime, 500);
									//-->
									</script>
	<div class="col-sm-1 col-md-1">
	<div class="time"><span id="clock"></span> | Info Terkini:</div>
</div>
<div class="col-sm-11 col-md-11 running-text">
									
<div id="scroller" class="teks_berjalan" style="margin-bottom: 0px; padding-top: 3px;">
  <?php foreach ($teks_berjalan AS $teks): ?>
  	<span class="teks">
  		<?= $teks['teks']?>
  		<?php if ($teks['tautan']): ?>
	  		<a href="<?= site_url('first/artikel/'.$teks['tautan']) ?>"><?= $teks['judul_tautan']?></a>
			<span style="color: black;  font: 12pt Calibri; font-weight: bold; padding-right: 200px; padding-top: 5px"><?php echo $data['isi']?></span>
	  	<?php endif; ?>
  	</span>
  <?php endforeach; ?>
  <span>&nbsp;</span>
  </div>
</div>  