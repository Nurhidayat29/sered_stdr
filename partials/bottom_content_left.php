<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php if ($headline): ?>
	<?php $abstrak_headline = potong_teks($headline['isi'], 700) ?>
	<div id="headline" class="box box-danger">
		<div class="box-header with-border">
			<h3 class="box-title">
				<a href="<?= site_url("first/artikel/$headline[id]") ?>"> <?= $headline['judul'] ?></a>
			</h3>
			<div class="pull-right small">
				<?= $headline['owner'].", ". tgl_indo2($headline['tgl_upload'])?>
			</div>
		</div>
		<div class="box-body">
			<?php if ($headline["gambar"] != ""): ?>
				<?php if (is_file(LOKASI_FOTO_ARTIKEL."sedang_".$headline['gambar'])): ?>
					<a class="group2" href="<?= AmbilFotoArtikel($headline['gambar'], 'sedang') ?>" title=""><img  height="200" style="float:left; margin:0 8px 4px 0;"  src="<?= AmbilFotoArtikel($headline['gambar'], 'sedang') ?>" /></a>
				<?php else: ?>
					<img style="margin-right: 10px; margin-bottom: 5px; float: left;" src="<?= base_url('assets/images/404-image-not-found.jpg') ?>" width="300" height="180"/>
				<?php endif; ?>
			<?php endif; ?>
			<?= $abstrak_headline ?>
		</div>
	</div>
<?php endif; ?>

<!--
 List Konten
 -->
<?php $title = (!empty($judul_kategori))? $judul_kategori : "Artikel Terkini" ?>

<?php if (is_array($title)): ?>
	<?php foreach ($title as $item): ?>
		<?php $title= $item ?>
	<?php endforeach; ?>
<?php endif; ?>

<div>
		<div class="content_bottom_left">
		 <div class="single_category wow fadeInDown">
            <div class="archive_style_1">
              <div style="margin-top:10px;">
                    <marquee style="font-family: Oswald"><?php foreach($teks_berjalan AS $data) {?><?php echo $data['isi']?><?php }?></marquee>
              </div>
              <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <span class="title_text"><?= $title ?></span> </h2> 
			</div>	
		 </div><?php if ($artikel): ?>
			  
			  <div class="single_category wow fadeInDown">
		  
		  
            <div class="archive_style_1">
			             			  <?php foreach ($artikel as $data): ?>
						<?php $abstrak = potong_teks($data['isi'], 300) ?>   
						
              <div class="business_category_left wow fadeInDown">
           			  
			  <ul class="fashion_catgnav">

                  <li>
				  <div class="catgimg2_container"> 
                    <h2 class="catg_titile"><a href="<?= site_url("first/artikel/$data[id]") ?>" title="Baca Selengkapnya"><?= $data["judul"] ?></a></h2>
                    <div class="comments_box"> <span class="meta_date"><?= tgl_indo2($data['tgl_upload']) ?></span> <span class="meta_comment"> <?= $data['owner'] ?></span> <?php if (trim($data['kategori']) != ''): ?>
										<i class='fa fa-tag'></i> <a href="<?= site_url('first/kategori/'.$data['id_kategori']) ?>"><?= $data['kategori'] ?></a>
									<?php endif; ?></div>
					<?php if ($data['gambar']!=''): ?>
										<?php if (is_file(LOKASI_FOTO_ARTIKEL."sedang_".$data['gambar'])): ?>
											<div class="catgimg2_container"><a href="<?= site_url("first/artikel/$data[id]") ?>" title="Baca Selengkapnya"><img height="200" style="float:left; margin:0 8px 4px 0;" src="<?php echo AmbilFotoArtikel($data['gambar'],'sedang') ?>" alt="<?= $data["judul"] ?>"/></a></div>
										<?php else: ?>
											<div class="catgimg2_container"><a href="<?= site_url("first/artikel/$data[id]") ?>"><img src="<?= base_url('assets/images/404-image-not-found.jpg') ?>" alt="<?= $data["judul"] ?>" /></a></div>
										<?php endif;?>
					<?php endif; ?>

				  </div>
                  </li>

				  
                </ul>
								  
              </div><?php endforeach; ?>

		   </div>
            </div>
			
			
					<!--
			Pengaturan halaman
		 -->
		<?php else: ?>
			<div class="business_category_left wow fadeInDown" id="artikel-blank">
				<div class="box box-warning box-solid">
					<div class="box-header"><h3 class="box-title">Maaf, belum ada artikel di Halaman  <?= $title ?> </h3></div>
					<div class="box-body">
    					<blockquote>
    						<p>Belum ada artikel yang dituliskan dalam Halaman ini.</p>
    						<p>Silakan kunjungi situs web kami dalam waktu dekat.</p>
    					<blockquote>
					</div>
				</div>
			</div>
		<?php endif; ?>
			
          </div>

	<?php if ($artikel): ?>
		<div class="pagination_area">
			<ul class="pagination">
				<?php if ($paging->start_link): ?>
					<li><a href="<?= site_url("first/".$paging_page."/$paging->start_link" . $paging->suffix) ?>" title="Halaman Pertama"><i class="fa fa-fast-backward"></i>&nbsp;</a></li>
				<?php endif; ?>
				<!--
				<?php if ($paging->prev): ?>
					<li><a href="<?= site_url("first/".$paging_page."/$paging->prev" . $paging->suffix) ?>" title="Halaman Sebelumnya"><i class="fa fa-backward"></i>&nbsp;</a></li>
				<?php endif; ?>
				-->

				<?php foreach ($pages as $i): ?>
					<li <?= ($p == $i) ? 'class=""' : "" ?>>
						<a href="<?= site_url("first/".$paging_page."/$i" . $paging->suffix) ?>" title="Halaman <?= $i ?>"><?= $i ?></a>
					</li>
				<?php endforeach; ?>
				
				<?php if ($i != $paging->end_link): ?>
    				<li class='disabled'>
    				    <a>...</a>
    				</li>
    				<li>
    				    <a href="<?= site_url("first/".$paging_page."/$paging->end_link" . $paging->suffix) ?>" title="Halaman Terakhir"><?= $paging->end_link ?></a>
    				</li>
    			<?php endif; ?>
				<?php if ($paging->next): ?>
					<li><a href="<?= site_url("first/".$paging_page."/$paging->next" . $paging->suffix) ?>" title="Halaman Selanjutnya"><i class="fa fa-forward"></i>&nbsp;</a></li>
				<?php endif; ?>
				<!--
				<?php if ($paging->end_link): ?>
					<li><a href="<?= site_url("first/".$paging_page."/$paging->end_link" . $paging->suffix) ?>" title="Halaman Terakhir"><i class="fa fa-fast-forward"></i>&nbsp;</a></li>
				<?php endif; ?>
				-->
			</ul>
		</div>
	<?php endif; ?>
</div>
