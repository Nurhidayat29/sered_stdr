<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>

<html>

<?php $this->load->view($folder_themes.'/layouts/header.php');?>
			<div id="contentwrapper">
				<div id="contentcolumn">
					<div class="innertube">
						<?php	$this->load->view(Web_Controller::fallback_default($this->theme, '/partials/content.php'));?>
					</div>
				</div>
			</div>
			<div id="rightcolumn">
				<div class="innertube">
					<?php $this->load->view(Web_Controller::fallback_default($this->theme, '/partials/side.right.php'));?>
				</div>
			</div>			
			<footer id="footer">
				<?php $this->load->view("$folder_themes/partials/footer_top.php"); ?>
				<?php $this->load->view("$folder_themes/partials/footer_bottom.php"); ?>
			</footer>

			<div id="footer-keterangan"><i class="fa fa-bar-chart"></i> Transparansi Anggaran : </div>
			
			<div id="footer-apbdesa">
				<?php $this->load->view($folder_themes. '/partials/apbdesa.bar.php', $transparansi);?>
				<?php $this->load->view($folder_themes. '/partials/copywright.tpl.php');?>
			</div>	
			<footer id="tombol-ke-atas">
				<a href="#" class="tombol-ke-atas" title="Kembali ke atas"><i class="fa fa-arrow-up"></i></a> 
			</footer>
			<?php $this->load->view($folder_themes. '/commons/meta_footer.php'); ?>
			<!-- </body></html> -->
			</div>
		</body>
</html>

