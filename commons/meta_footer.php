<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "<?php echo $desa['telepon']?>",
            facebook: "<?php echo $sosmed[nested_array_search('Facebook',$sosmed)]['link']?>",
            telegram: "<?php echo $desa['telepon']?>",
            email: "<?php echo $desa['email_desa']?>",
            sms: "<?php echo $desa['telepon']?>",
            call: "<?php echo $desa['telepon']?>",
            company_logo_url: "<?= LogoDesa($desa['logo']);?>", // URL of company logo (png, jpg, gif)
            greeting_message: "Selamat datang di layanan komunikasi Pemerintah <?= ucwords($this->setting->sebutan_desa).' '.$desa['nama_desa'];?>.",
            call_to_action: "Kontak Admin & Medsos <?= ucwords($this->setting->sebutan_desa).' '.$desa['nama_desa'];?>.",
            button_color: "#e64946",
            position: "left", // Position may be 'right' or 'left'
            order: "whatsapp,facebook,telegram,email,sms" // Order of buttons
        };
        
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
  </script>
