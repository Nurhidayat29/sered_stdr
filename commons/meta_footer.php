<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+628XXXXXXXXXX",
            facebook: "akun.fbAnda",
            telegram: "isi.akun.telegram.anda",
            email: "isi-email-anda-@gmail.com",
            //sms: "+628XXXXXXXXXX",
            call: "+628XXXXXXXXXX",
            company_logo_url: "<?= LogoDesa($desa['logo']);?>", // URL of company logo (png, jpg, gif)
            greeting_message: "Selamat Datang di Kontak Layanan Komunikasi <?= ucwords($this->setting->sebutan_desa).' '.$desa['nama_desa'];?>.",
            call_to_action: "Kontak Admin",
            button_color: "#e64946",
            position: "left", // Position may be 'right' or 'left'
            order: "whatsapp,facebook,telegram,email" // Order of buttons
        };
        
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
  </script>
