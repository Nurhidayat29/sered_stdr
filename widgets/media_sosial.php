<!-- widget SocMed -->

<div class="single_bottom_rightbar">
  <h2 class="box-title"><i class="fa fa-globe"></i> Info Media Sosial</h2>
  <div class="box-body">
		<?php foreach ($sosmed As $data): ?>
		  <?php if (!empty($data["link"])): ?>
		    <a href="<?= $data['link']?>" target="_blank">
		    	<img src="<?= base_url().'assets/front/'.$data['gambar'] ?>" alt="<?= $data['nama'] ?>" style="width:50px;height:50px;"/>
		    </a>
		  <?php endif; ?>
		<?php endforeach; ?>
  </div>
</div>
