<!-- widget Arsip Artikel -->
    <div class="single_bottom_rightbar">
        <h2><i class="fa fa-archive"></i> Arsip Artikel</h2>
            <ul role="tablist" class="nav nav-tabs custom-tabs">
              <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="home" href="#mostPopular">Terkini</a></li>
              <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#recentComent">Terbaru</a></li>
              <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#random">Acak</a></li>
            </ul>
            <div class="tab-content">
              <div id="mostPopular" class="tab-pane fade in active" role="tabpanel">
                  <table id="ul-menu">
                    <?php $baca = $this->db->query("SELECT * FROM artikel_baca ORDER BY dibaca DESC LIMIT 7"); $row = $baca->result_array(); ?> 
                    <?php foreach ($row as $l3): ?>
                    <?php $baca2 = $this->db->query("SELECT * FROM artikel WHERE id = '".$l3['id_artikel']."' LIMIT 7"); $row2 = $baca2->result_array(); ?> 
                    <?php foreach ($row2 as $l4): ?>
                    <tr><td colspan="2">
                            <span class="meta_date"><?= tgl_indo2($l4['tgl_upload']) ?>
                            <i class="fa fa-eye"></i>
                            <?php $baca3 = $this->db->query("SELECT * FROM artikel_baca WHERE id_artikel = '".$l4['id']."'"); $row3 = $baca3->row_array();
                            if ($row3['dibaca'] >= 1){ echo number_format($row3['dibaca'],0,',','.')."x"; }
                            else if ($row3['dibaca'] == 0){ echo "0x"; } ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top" align="justify">
                            <a href="<?= site_url("first/artikel/$l4[id]")?>">
                            <?php if (is_file(LOKASI_FOTO_ARTIKEL."kecil_$l4[gambar]")): ?>
                                <img width="25%" style="float:left; margin:0 8px 4px 0;" class="img-fluid img-thumbnail" src="<?= base_url("desa/upload/artikel/sedang_$l4[gambar]")?>"/>
                            <?php else: ?>
                                <img width="25%" style="float:left; margin:0 8px 4px 0;" class="img-fluid img-thumbnail" src="<?= base_url("assets/images/404-image-not-found.jpg")?>"/>
                            <?php endif;?>
                            <small><font color="green"><?= $l4['judul']?></font></small>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endforeach; ?>
                </table>
              </div>
              <div id="recentComent" class="tab-pane fade" role="tabpanel">
                  <table id="ul-menu">
                  <?php foreach ($arsip as $l): ?>
                    <tr><td colspan="2">
                            <span class="meta_date"><?= tgl_indo2($l['tgl_upload']) ?>
                            <i class="fa fa-eye"></i>
                            <?php $baca = $this->db->query("SELECT * FROM artikel_baca WHERE id_artikel = '".$l['id']."'"); $row = $baca->row_array();
                            if ($row['dibaca'] >= 1){ echo number_format($row['dibaca'],0,',','.')."x"; }
                            else if ($row['dibaca'] == 0){ echo "0x"; } ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top" align="justify">
                            <a href="<?= site_url("first/artikel/$l[id]")?>">
                            <?php if (is_file(LOKASI_FOTO_ARTIKEL."kecil_$l[gambar]")): ?>
                                <img width="25%" style="float:left; margin:0 8px 4px 0;" class="img-fluid img-thumbnail" src="<?= base_url("desa/upload/artikel/sedang_$l[gambar]")?>"/>
                            <?php else: ?>
                                <img width="25%" style="float:left; margin:0 8px 4px 0;" class="img-fluid img-thumbnail" src="<?= base_url("assets/images/404-image-not-found.jpg")?>"/>
                            <?php endif;?>
                            <small><font color="green"><?= $l['judul']?></font></small>
                            </a>
                        </td>
                    </tr>
                  <?php endforeach; ?>
                </table>
              </div>
              <div id="random" class="tab-pane fade" role="tabpanel">
                <table id="ul-menu">
                  <?php foreach ($arsip_rand as $l): ?>
                    <tr><td colspan="2">
                            <span class="meta_date"><?= tgl_indo2($l['tgl_upload']) ?>
                            <i class="fa fa-eye"></i>
                            <?php $baca = $this->db->query("SELECT * FROM artikel_baca WHERE id_artikel = '".$l['id']."'"); $row = $baca->row_array();
                            if ($row['dibaca'] >= 1){ echo number_format($row['dibaca'],0,',','.')."x"; }
                            else if ($row['dibaca'] == 0){ echo "0x"; } ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top" align="justify">
                            <a href="<?= site_url("first/artikel/$l[id]")?>">
                            <?php if (is_file(LOKASI_FOTO_ARTIKEL."kecil_$l[gambar]")): ?>
                                <img width="25%" style="float:left; margin:0 8px 4px 0;" class="img-fluid img-thumbnail" src="<?= base_url("desa/upload/artikel/sedang_$l[gambar]")?>"/>
                            <?php else: ?>
                                <img width="25%" style="float:left; margin:0 8px 4px 0;" class="img-fluid img-thumbnail" src="<?= base_url("assets/images/404-image-not-found.jpg")?>"/>
                            <?php endif;?>
                            <small><font color="green"><?= $l['judul']?></font></small>
                            </a>
                        </td>
                    </tr>
                  <?php endforeach; ?>
                </table>
              </div>
            </div>
          </div>