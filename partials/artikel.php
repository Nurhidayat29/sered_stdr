<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $baca = $this->db->query("SELECT dibaca FROM artikel_baca WHERE id_artikel = '".$single_artikel['id']."'"); $row = $baca->row_array();
if ($row['dibaca'] >= 1){ $this->db->query("UPDATE artikel_baca SET waktu = NOW(), dibaca = ".$row['dibaca']."+1 WHERE id_artikel ='".$single_artikel['id']."' "); }
else if ($row['dibaca'] == 0){ $this->db->query("INSERT INTO artikel_baca (id, id_artikel, dibaca, waktu) VALUES ('', '".$single_artikel['id']."', '1', NOW())"); } ?>


<?php if($single_artikel["id"]) : ?>
	<div class="artikel" id="<?= 'artikel-'.$single_artikel['judul']?>">
		<h2 class="judul"><?= $single_artikel["judul"]?></h2>
		<h3 class="kecil">
			<i class="fa fa-user"></i> <?=  $single_artikel ['owner']?>
			| <i class="fa fa-clock-o"></i> <?= tgl_indo2($single_artikel ['tgl_upload']);?>
			<a>| <i class="fa fa-eye"></i> <?php $baca2 = $this->db->query("SELECT dibaca FROM artikel_baca WHERE id_artikel = '".$single_artikel['id']."'"); $row2 = $baca2->row_array(); echo number_format ($row2 ['dibaca'],0,',','.'). " Kali"; ?></a>
			|<?php if (trim($single_artikel ['kategori']) != '') : ?>
				<i class='fa fa-tag'></i> <a href="<?= site_url('first/kategori/'.$single_artikel['id_kategori'])?>"><?= $single_artikel['kategori']?></a>
			<?php endif; ?>
		</h3>
		
		<?php if($single_artikel['gambar']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar'])): ?>
			<div class="sampul">
				<a class="group2" href="<?= AmbilFotoArtikel($single_artikel['gambar'],'sedang')?>" title=""><img src="<?= AmbilFotoArtikel($single_artikel['gambar'],'sedang')?>" /></a>
			</div>
		<?php endif; ?> 
		
		<div class="teks"><?= $single_artikel["isi"]?></div>

		<?php	if($single_artikel['dokumen']!='' and is_file(LOKASI_DOKUMEN.$single_artikel['dokumen'])): ?>
			<p>Dokumen Lampiran : <a href="<?= base_url().LOKASI_DOKUMEN.$single_artikel['dokumen']?>" title=""><?= $single_artikel['link_dokumen']?></a></p>
			<br/>
		<?php endif; ?> 
		<?php if($single_artikel['gambar1']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar1'])): ?>
			<div class="sampul2"><a class="group2" href="<?= AmbilFotoArtikel($single_artikel['gambar1'],'sedang')?>" title=""><img src="<?= AmbilFotoArtikel($single_artikel['gambar1'],'sedang')?>" /></a>
			</div>
		<?php endif; ?>
		<?php if($single_artikel['gambar2']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar2'])): ?>
			<div class="sampul2"><a class="group2" href="<?= AmbilFotoArtikel($single_artikel['gambar2'],'sedang')?>" title=""><img src="<?= AmbilFotoArtikel($single_artikel['gambar2'],'sedang')?>" /></a>
			</div>
		<?php endif; ?>
		<?php if($single_artikel['gambar3']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar3'])): ?>
			<div class="sampul2"><a class="group2" href="<?= AmbilFotoArtikel($single_artikel['gambar3'],'sedang')?>" title=""><img src="<?= AmbilFotoArtikel($single_artikel['gambar3'],'sedang')?>" /></a>
			</div>
		<?php endif; ?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><h4> Share Artikel melalui Medsos Dibawah ini :</h4></p>
<p>&nbsp;</p>

			<div class="btn-group" role="group" aria-label="Bagikan ke teman anda" style="clear:both;">
		    <a name="fb_share" href="http://www.facebook.com/sharer.php?u=<?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>" onclick='window.open(this.href,"popupwindow","status=0,height=500,width=500,resizable=0,top=50,left=100");return false;' rel='nofollow' target='_blank' title='Facebook'><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-facebook-square fa-2x"></i></button></a>
			<a href="http://twitter.com/share?source=sharethiscom&text=<?= $single_artikel["judul"];?>%0A&url=<?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI].'&via=SeredPemdes'?>" class="twitter-share-button" onclick='window.open(this.href,"popupwindow","status=0,height=500,width=500,resizable=0,top=50,left=100");return false;' rel='nofollow' target='_blank' title='Twitter'><button type="button" class="btn btn-info btn-sm"><i class="fa fa-twitter fa-2x"></i></button></a>
			<a href="mailto:?subject=<?= $single_artikel["judul"];?>&body=<?= potong_teks($single_artikel["isi"], 1000);?> ... Selengkapnya di <?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>" title='Email'><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-envelope fa-2x"></i></button></a>
		    <a href="https://telegram.me/share/url?url=<?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>&text=<?= $single_artikel["judul"];?>%0A" onclick='window.open(this.href,"popupwindow","status=0,height=500,width=500,resizable=0,top=50,left=100");return false;' rel='nofollow' target='_blank' title='Telegram'><button type="button" class="btn btn-dark btn-sm"><i class="fa fa-telegram fa-2x"></i></button></a>
		    <a href="#" onclick="window.print('printableArea')" title='Cetak Artikel'><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-print fa-2x"></i></button></a>
		    <a href="https://api.whatsapp.com/send?text=<?= $single_artikel["judul"];?>%0A<?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>" onclick='window.open(this.href,"popupwindow","status=0,height=500,width=500,resizable=0,top=50,left=100");return false;' rel='nofollow' target='_blank' title='Whatsapp'><button type="button" class="btn btn-success btn-sm"><i class="fa fa-whatsapp fa-2x"></i></button></a>
        </div>

			<!--
			<script src=\"http://static.ak.fbcdn.net/connect.php/js/FB.Share\" type=\"text/javascript\"></script>
			<script src=\"http://platform.twitter.com/widgets.js\" type=\"text/javascript\"></script>
			-->
		
		<?php if($single_artikel['boleh_komentar']): ?>
		    <div class="fb-comments" data-href="<?= site_url().'first/artikel/'.$single_artikel['id']?>" width="100%" data-numposts="5"></div>
		<?php endif; ?>
	
		<div class="form-group" id="kolom-komentar">
			<?php if(is_array($komentar)): ?>
				<div class="box box-default box-solid">
					<div class="box-header">
						<h3 class="box-title">Komentar atas <?= $single_artikel["judul"]?></h3>
					</div>
					<div class="box-body">
						<?php foreach($komentar AS $data): ?>
							<?php if($data['enabled']==1): ?>
								<div class="kom-box">
									<div style="font-size:.8em;font-color:#aaa;">
										<i class="fa fa-user"></i><?= $data['owner']?> <i class="fa fa-clock-o"></i> <?= tgl_indo2($data['tgl_upload'])?>
									</div>
									<div>
										<blockquote><?= $data['komentar']?></blockquote>
									</div>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				</div>
		
			<?php elseif($single_artikel['boleh_komentar']): ?>
				<div>Silakan tulis komentar dalam formulir berikut ini (Gunakan bahasa yang santun)</div>
			<?php endif; ?>
		</div>
		<div class="form-group group-komentar">
			<?php if($single_artikel['boleh_komentar']): ?>
				<div class="box box-default">
					<div class="box-header">
						<h3 class="box-title">Formulir Komentar (Komentar baru terbit setelah disetujui Admin)</h3>
					</div>

					<!-- Tampilkan hanya jika 'flash_message' ada -->
					<?php $label = !empty($_SESSION['validation_error']) ? 'label-danger' : 'label-info'; ?>
					<?php if ($flash_message): ?>
						<div class="box-header <?= $label?>"><?= $flash_message?></div>
						<?php unset($_SESSION['validation_error']); ?>
					<?php endif; ?>
					<div class="box-body">
						<form id="form-komentar" name="form" action="<?= site_url('first/add_comment/'.$single_artikel['id'])?>" method="POST" onSubmit="return validasi(this);">
							<table width="100%">
								<tr class="komentar nama">
									<td>Nama</td>
									<td>
										<input type="text" name="owner" maxlength="30" value="<?= !empty($_SESSION['post']['owner']) ? $_SESSION['post']['owner'] : $_SESSION['nama'] ?>">
									</td>
								</tr>
								<tr class="komentar alamat">
									<td>No. HP</td>
									<td>
										<input type="text" name="no_hp" maxlength="30" value="<?= $_SESSION['post']['no_hp'] ?>">
									</td>
								</tr>
								<tr class="komentar alamat">
									<td>Alamat e-mail</td>
									<td>
										<input type="text" name="email" maxlength="30" value="<?= $_SESSION['post']['email'] ?>">
									</td>
								</tr>
								<tr class="komentar pesan">
									<td valign="top">Komentar</td>
									<td>
										<textarea name="komentar"><?= $_SESSION['post']['komentar']?></textarea>
									</td>
								</tr>
								<tr class="captcha"><td>&nbsp;</td>
									<td>
										<img id="captcha" src="<?= base_url().'securimage/securimage_show.php'?>" alt="CAPTCHA Image"/>
										<a href="#" onclick="document.getElementById('captcha').src = '<?= base_url()."securimage/securimage_show.php?"?>' + Math.random(); return false "span class="readmore"> Ganti gambar <i class="fa fa-arrow-right"></a></i>
										
									</td>
								</tr>
								<tr class="captcha_code">
									<td>&nbsp;</td>
									<td>
										<input type="text" name="captcha_code" maxlength="6" value="<?= $_SESSION['post']['captcha_code']?>"/> Isikan kode sesuai gambar
									</td>
								</tr>
								<tr class="submit">
									<td>&nbsp;</td>
									<td><input type="submit" value="Kirim"></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			<?php else: ?>
				<span class='info'>Komentar untuk artikel ini telah ditutup.</span>
			<?php endif; ?>
		</div>
	</div>
<?php else: ?>
	<div class="artikel" id="artikel-blank">
		<div class="box box-danger box-solid">
			<div class="box-header"><h3 class="box-title">Maaf, data tidak ditemukan</h3></div>
			<div class="box-body">
				Anda telah terdampar di halaman yang datanya tidak ada lagi di web ini. Mohon periksa kembali, atau laporkan kepada kami.
			</div>
		</div>
	</div>
<?php endif; ?>
