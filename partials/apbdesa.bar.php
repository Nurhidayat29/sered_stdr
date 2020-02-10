<style type="text/css">
  .progress-bar span
  {
    position: absolute;
    right: 20px;
    color: #000000;
    font-weight: bold;
  }
  .box-info {
    border-top-width: 5px;
    padding-top: 20px
  }
</style>


<?php
//Anggaran Pendapatan Tahun 2020
$pad20          = 24600000;      //Ketik Anggaran PADes
$add20          = 327011000;      //Ketik Anggaran ADD
$dd20           = 877120000;      //Ketik Anggaran Dana Desa
$pbh20          = 23969000;       //Ketik Anggaran PBH
$pbk20          = 5775064;      //Ketik Anggaran PBK
$pbp20          = 400000000;      //Ketik Anggaran PBP
$dll20         = 5000000;        //Ketik Anggaran DLL bunga rekening bank
$pembiayaan20   = 136449652;

//Realisasi Pendapatan Tahun 2019
$pad        = 44940000;      //Ketik Besaran PAD
$add        = 340428000;      //Ketik Besaran ADD
$dd         = 850641000;      //Ketik Besaran DD
$pbh        = 26323000;       //Ketik Besaran PBH
$pbk        = 5775064;      //Ketik Besaran PBK
$pbp        = 500000000;      //Ketik Besaran PBP
$dll        = 7712812;        //Ketik Besaran DLL
$pembiayaan = 173820903;      //Ketik Besaran SiLPA

//Realisasi Belanja Tahun 2019
$satu       = 403969127;      //Ketik Realisasi Bidang 1
$dua        = 1275635000;      //Ketik Realisasi Bidang 2
$tiga       = 35177000;       //Ketik Realisasi Bidang 3
$empat      = 78410000;      //Ketik Realisasi Bidang 4
$lima       = 0;              //Ketik Realisasi Bidang 5
$enam       = 20000000;       //Ketik Realisasi Bidang 6 Penyertaan Modal BUMDes

// menghitung total pendapatan
$total20 = $pad20 + $add20 + $dd20 + $pbh20 + $pbk20 + $pbp20 + $dll20;

// menghitung prosentase
$prosenPAD20 = number_format($pad20/$total20 * 100,2);
$prosenADD20 = number_format($add20/$total20 * 100,2);
$prosenDD20 = number_format($dd20/$total20 * 100,2);
$prosenPBH20 = number_format($pbh20/$total20 * 100,2);
$prosenPBK20 = number_format($pbk20/$total20 * 100,2);
$prosenPBP20 = number_format($pbp20/$total20 * 100,2);
$prosenDLL20 = number_format($dll20/$total20 * 100,2);
$prosenPB20 = number_format(100,2);

// menentukan panjang grafik batang berdasarkan prosentase tahun 2020
$panjangPAD20 = $prosenPAD20 * 100 / 100;
$panjangADD20 = $prosenADD20 * 100 / 100;
$panjangDD20 = $prosenDD20 * 100 / 100;
$panjangPBH20 = $prosenPBH20 * 100 / 100;
$panjangPBK20 = $prosenPBK20 * 100 / 100;
$panjangPBP20 = $prosenPBP20 * 100 / 100;
$panjangDLL20 = $prosenDLL20 * 100 / 100;
$panjangPB20 = $prosenPB20 * 100 / 100;

// menghitung total pendapatan
$total = $pad + $add + $dd + $pbh + $pbk + $pbp + $dll + $pembiayaan;

// menghitung prosentase pendapatan tahun 2019
$prosenPAD = number_format($pad/44940000 * 100,2);
$prosenADD = number_format($add/338295000 * 100,2);
$prosenDD = number_format($dd/850641000 * 100,2);
$prosenPBH = number_format($pbh/12398000 * 100,2);
$prosenPBK = number_format($pbk/5775064 * 100,2);
$prosenPBP = number_format($pbp/500000000 * 100,2);
$prosenDLL = number_format($dll/000 * 100,2);
$prosenPB = number_format(100,2);

// menentukan panjang grafik batang berdasarkan prosentase
$panjangPAD = $prosenPAD * 100 / 100;
$panjangADD = $prosenADD * 100 / 100;
$panjangDD = $prosenDD * 100 / 100;
$panjangPBH = $prosenPBH * 100 / 100;
$panjangPBK = $prosenPBK * 100 / 100;
$panjangPBP = $prosenPBP * 100 / 100;
$panjangDLL = $prosenDLL * 100 / 100;
$panjangPB = $prosenPB * 100 / 100;

// menghitung total pengeluaran tahun 2019
$total2 = $satu + $dua + $tiga + $empat + $lima + $enam;

// menghitung prosentase belanja tahun 2019
$prosenSatu = number_format($satu/428626967 * 100,2);
$prosenDua = number_format($dua/1320071000 * 100,2);
$prosenTiga = number_format($tiga/40177000 * 100,2);
$prosenEmpat = number_format($empat/116995000 * 100,2);
$prosenLima = number_format($lima/000 * 100,2);
$prosenEnam = number_format($enam/20000000 * 100,2);

// menentukan panjang grafik batang berdasarkan prosentase
$panjangSatu = $prosenSatu * 100 / 100;
$panjangDua = $prosenDua * 100 / 100;
$panjangTiga = $prosenTiga * 100 / 100;
$panjangEmpat = $prosenEmpat * 100 / 100;
$panjangLima = $prosenLima * 100 / 100;
if ($prosenEnam == 0) { $panjangEnam = 0.2; }
else { $panjangEnam = $prosenEnam * 100 / 100; } ?>

<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-4">
    <div align="center"><h2>Anggaran Pendapatan Tahun 2020</h2></div><hr>
    <div class="progress-group" style="margin-bottom:15px;"><h5>
        Jumlah Rencana Penerimaan TA 2020<br>
        <b>Rp. <?php echo number_format($total20); ?></b></h5>
    </div>
	<div class="progress-group">
        Pendapatan Asli Desa (PAD)<br>
		<b>Rp. <?php echo number_format($pad20); ?></b>
        <div class="progress progress-sm active" align="right"><small><b><?php echo $prosenPAD20; ?>%</b></small>&nbsp;
            <div class="progress-bar progress-bar-parso1 progress-bar-striped" role="progressbar" style="width: <?php echo $panjangPAD20; ?>%"></div>
        </div>
	</div>
    <div class="progress-group">
        Alokasi Dana Desa (ADD)<br>
		<b>Rp. <?php echo number_format($add20); ?></b>
        <div class="progress progress-sm active" align="right"><small><b><?php echo $prosenADD20; ?>%</b></small>&nbsp;
            <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" style="width: <?php echo $panjangADD20; ?>%"></div>
        </div>
    </div>
    <div class="progress-group">
        Dana Desa (DD)<br>
		<b>Rp. <?php echo number_format($dd20); ?></b>
        <div class="progress progress-sm active" align="right"><small><b><?php echo $prosenDD20; ?>%</b></small>&nbsp;
            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" style="width: <?php echo $panjangDD20; ?>%"></div>
        </div>
    </div>
    <div class="progress-group">
        Bagi Hasil Pajak & Retribusi Daerah (PBH)<br>
		<b>Rp. <?php echo number_format($pbh20); ?></b>
        <div class="progress progress-sm active" align="right"><small><b><?php echo $prosenPBH20; ?>%</b></small>&nbsp;
            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" style="width: <?php echo $panjangPBH20; ?>%"></div>
        </div>
    </div>
	<div class="progress-group">
        Penerimaan Bantuan Kabupaten  (PBK)<br>
		<b>Rp. <?php echo number_format($pbk20); ?></b>
        <div class="progress progress-sm active" align="right"><small><b><?php echo $prosenPBK20; ?>%</b></small>&nbsp;
            <div class="progress-bar progress-bar-parso2 progress-bar-striped" role="progressbar" style="width: <?php echo $panjangPBK20; ?>%"></div>
        </div>
    </div>
	<div class="progress-group">
        Penerimaan Bantuan Propinsi  (PBP)<br>
		<b>Rp. <?php echo number_format($pbp20); ?></b>
        <div class="progress progress-sm active" align="right"><small><b><?php echo $prosenPBP20; ?>%</b></small>&nbsp;
            <div class="progress-bar progress-bar-parso3 progress-bar-striped" role="progressbar" style="width: <?php echo $panjangPBP20; ?>%"></div>
        </div>
    </div>
	<div class="progress-group">
        Pendapatan Lain-Lain (DLL)<br>
		<b>Rp. <?php echo number_format($dll20); ?></b>
        <div class="progress progress-sm active" align="right"><small><b><?php echo $prosenDLL20; ?>%</b></small>&nbsp;
            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" style="width: <?php echo $panjangDLL20; ?>%"></div>
        </div>
    </div>
    <div class="progress-group">
        Penerimaan Pembiayaan (SiLPA) Tahun 2019<br>
        <div class="clearfix">
            <span class="pull-left"><b>Rp. <?php echo number_format($pembiayaan20); ?></b></span>
            <small class="pull-right"><b><?php echo $prosenPB20; ?>%&nbsp;</b></small>
        </div>
		<div class="progress sm" align="right">
            <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" style="width: <?php echo $panjangPB20; ?>%"></div>
        </div>
    </div><hr>
</div>
<div class="col-md-3">
    <div align="center"><h2>Pendapatan Tahun 2019</h2></div><hr>
    <div class="progress-group" style="margin-bottom:15px;"><h5>
        Realisasi Pendapatan Desa TA 2019<br>
        <span class="pull-left"><b>Rp. <?php $persennya = number_format($total/1925869967 * 100,2); echo number_format($total); ?></b></span>
        <span class="pull-right"><b><?php echo $persennya; ?>%&nbsp;</b></span>
    </div></h5><br>
    <div class="progress-group">
        Pendapatan Asli Desa (PAD)<br>
        <div class="clearfix">
            <span class="pull-left"><b>Rp. <?php echo number_format($pad); ?></b></span>
            <small class="pull-right"><b><?php echo $prosenPAD; ?>%&nbsp;</b></small>
        </div>
		<div class="progress sm" align="right">
            <div class="progress-bar progress-bar-parso1 progress-bar-striped" role="progressbar" style="width: <?php echo $panjangPAD; ?>%"></div>
        </div>
    </div>
	<div class="progress-group">
        Alokasi Dana Desa (ADD)<br>
        <div class="clearfix">
            <span class="pull-left"><b>Rp. <?php echo number_format($add); ?></b></span>
            <small class="pull-right"><b><?php echo $prosenADD; ?>%&nbsp;</b></small>
        </div>
		<div class="progress sm" align="right">
            <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" style="width: <?php echo $panjangADD; ?>%"></div>
        </div>
    </div>
    <div class="progress-group">
        Dana Desa (DD)<br>
        <div class="clearfix">
            <span class="pull-left"><b>Rp. <?php echo number_format($dd); ?></b></span>
            <small class="pull-right"><b><?php echo $prosenDD; ?>%&nbsp;</b></small>
        </div>
		<div class="progress sm" align="right">
            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" style="width: <?php echo $panjangDD; ?>%"></div>
        </div>
    </div>
    <div class="progress-group">
        Bagi Hasil Pajak & Retribusi Daerah (PBH)<br>
        <div class="clearfix">
            <span class="pull-left"><b>Rp. <?php echo number_format($pbh); ?></b></span>
            <small class="pull-right"><b><?php echo $prosenPBH; ?>%&nbsp;</b></small>
        </div>
        <div class="progress sm" align="right">
            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" style="width: <?php echo $panjangPBH; ?>%"></div>
        </div>
    </div>
	<div class="progress-group">
        Penerimaan Bantuan Kabupaten (PBK)<br>
        <div class="clearfix">
            <span class="pull-left"><b>Rp. <?php echo number_format($pbk); ?></b></span>
            <small class="pull-right"><b><?php echo $prosenPBK; ?>%&nbsp;</b></small>
        </div>
        <div class="progress sm" align="right">
            <div class="progress-bar progress-bar-parso2 progress-bar-striped" role="progressbar" style="width: <?php echo $panjangPBK; ?>%"></div>
        </div>
    </div>
	<div class="progress-group">
        Penerimaan Bantuan Propinsi (PBP)<br>
        <div class="clearfix">
            <span class="pull-left"><b>Rp. <?php echo number_format($pbp); ?></b></span>
            <small class="pull-right"><b><?php echo $prosenPBP; ?>%&nbsp;</b></small>
        </div>
        <div class="progress sm" align="right">
            <div class="progress-bar progress-bar-parso3 progress-bar-striped" role="progressbar" style="width: <?php echo $panjangPBP; ?>%"></div>
        </div>
    </div>
    <div class="progress-group">
        Pendapatan Lain-Lain (DLL)<br>
        <div class="clearfix">
            <span class="pull-left"><b>Rp. <?php echo number_format($dll); ?></b></span>
            <small class="pull-right"><b><?php echo $prosenDLL; ?>%&nbsp;</b></small>
        </div>
        <div class="progress sm" align="right">
            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" style="width: <?php echo $panjangDLL; ?>%"></div>
        </div>
    </div>
    <div class="progress-group">
        Penerimaan Pembiayaan (SiLPA) Tahun 2018<br>
        <div class="clearfix">
            <span class="pull-left"><b>Rp. <?php echo number_format($pembiayaan); ?></b></span>
            <small class="pull-right"><b><?php echo $prosenPB; ?>%&nbsp;</b></small>
        </div>
        <div class="progress sm" align="right">
            <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" style="width: <?php echo $panjangPB; ?>%"></div>
        </div>
    </div><hr>
</div>
<div class="col-md-3">
    <div align="center"><h2>Belanja Tahun 2019</h2></div><hr>
    <div class="progress-group" style="margin-bottom:15px;"><h5>
        Realisasi Belanja Desa TA 2019<br>
        <span class="pull-left"><b>Rp. <?php $persennya2 = number_format($total2/1949640779 * 100,2); echo number_format($total2); ?></b></span>
        <span class="pull-right"><b><?php echo $persennya2; ?>%&nbsp;</b></span>
    </div></h5><br>
    <div class="progress-group">
        Bid.1 Penyelenggaraan Pemerintahan Desa<br>
        <div class="clearfix">
            <span class="pull-left"><b>Rp. <?php echo number_format($satu); ?></b></span>
            <small class="pull-right"><b><?php echo $prosenSatu; ?>%&nbsp;</b></small>
        </div>
        <div class="progress sm" align="right">
            <div class="progress-bar progress-bar-parso1 progress-bar-striped" role="progressbar" style="width: <?php echo $panjangSatu; ?>%"></div>
        </div>
    </div>
    <div class="progress-group">
        Bid.2 Pembangunan Desa<br>
        <div class="clearfix">
            <span class="pull-left"><b>Rp. <?php echo number_format($dua); ?></b></span>
            <small class="pull-right"><b><?php echo $prosenDua; ?>%&nbsp;</b></small>
        </div>
        <div class="progress sm" align="right">
            <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" style="width: <?php echo $panjangDua; ?>%"></div>
        </div>
    </div>
    <div class="progress-group">
        Bid.3 Pembinaan Kemasyarakatan Desa<br>
        <div class="clearfix">
            <span class="pull-left"><b>Rp. <?php echo number_format($tiga); ?></b></span>
            <small class="pull-right"><b><?php echo $prosenTiga; ?>%&nbsp;</b></small>
        </div>
        <div class="progress sm" align="right">
            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" style="width: <?php echo $panjangTiga; ?>%"></div>
        </div>
    </div>
    <div class="progress-group">
        Bid.4 Pemberdayaan Masyarakat Desa<br>
        <div class="clearfix">
            <span class="pull-left"><b>Rp. <?php echo number_format($empat); ?></b></span>
            <small class="pull-right"><b><?php echo $prosenEmpat; ?>%&nbsp;</b></small>
        </div>
        <div class="progress sm" align="right">
            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" style="width: <?php echo $panjangEmpat; ?>%"></div>
        </div>
    </div>
    <div class="progress-group">
        Bid.5 Belanja Tak Terduga<br>
        <div class="clearfix">
            <span class="pull-left"><b>Rp. <?php echo number_format($lima); ?></b></span>
            <small class="pull-right"><b><?php echo $prosenLima; ?>%&nbsp;</b></small>
        </div>
        <div class="progress sm" align="right">
            <div class="progress-bar progress-bar-parso2 progress-bar-striped" role="progressbar" style="width: <?php echo $panjangLima; ?>%"></div>
        </div>
	</div>
	<div class="progress-group">
        Penyertaan Modal BUMDesa<br>
        <div class="clearfix">
            <span class="pull-left"><b>Rp. <?php echo number_format($enam); ?></b></span>
            <small class="pull-right"><b><?php echo $prosenEnam; ?>%&nbsp;</b></small>
        </div>
        <div class="progress sm" align="right">
            <div class="progress-bar progress-bar-parso3 progress-bar-striped" role="progressbar" style="width: <?php echo $panjangEnam; ?>%"></div>
        </div>
    </div><hr>
</div>
<div class="col-md-1"></div>
</div>
				