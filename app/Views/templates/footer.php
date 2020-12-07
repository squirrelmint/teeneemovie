    <div id="footer">
        <div class="footer clearfix">
            <div class="footerleft">
                Copyright © 2020 <a href="/page/home">ดูหนังออนไลน์ ดู หนัง หนัง ออนไลน์ Teeneemovie ดูหนังออนไลน์ฟรีหนังใหม่ ได้ที่ Teeneemovie.com</a>
                <div style="height: 3.5rem; overflow: hidden; text-overflow: ellipsis">
                </div>
            </div>
            <div class="footeright">
            </div>
        </div>
    </div>
    <!-- <h4 style="display: none">ดูหนัง ก่อนใครอัพเดตไวก่อนใครในปี2020สำหรับคนที่ชอบ ดูหนังออนไลน์ สามารถคลิกหนังที่อยากรับชมได้เลย ในเว็บ ดูหนังออนไลน์ Doonungonline</h4> -->
    </div>

    <div id="fb-root" class=" fb_reset">
    </div>

    <!-- <script type="text/javascript">
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.4&appId=535371466610314";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('.mobile-only').toggle(window.screen.width <= 480);
        jQuery('#close_ads_c1').click(function() {
            jQuery('#show_ads_c1').hide();
        });
    });
</script> -->
    <style>
        .btn-ads {
            font-family: 'Lato', 'Lucida Grande', 'Lucida Sans Unicode', Tahoma, Sans-Serif;
            -webkit-appearance: none;
            font-size: 1.1rem;
            text-shadow: none;
            line-height: 1.2;
            display: inline-block;
            padding: 10px 16px;
            margin: 0 10px 0 0;
            position: relative;
            /* border-radius: 4px; */
            border: 3px solid transparent;
            background: #444857;
            color: white;
            cursor: pointer;
            white-space: nowrap;
            text-overflow: ellipsis;
            text-decoration: none !important;
            text-align: center;
            font-weight: normal !important;
            width: 80%;
        }
    </style>
    </body>

    </html>
    <script>
        function goReport() {
            //alert("sdsds");
            var request = prompt('แจ้งหนังเสืย');

            if (request != null) {
                jQuery.ajax({
                    //url: 'https://www.webdoonung.com/api/v1/request/' + request,
                    type: 'GET',
                    crossDomain: true,
                    cache: false,
                    success: function(data) {
                        console.log(request);
                    }
                });
                alert('เราจะดำเนินการให้เร็วที่สุด');
            } else {

            }
        };
    </script>
    <script src='<?php echo base_url("/assets/js/jquery.js"); ?>'></script>
    <script src='<?php echo base_url("/assets/js/jquery-migrate.min.js"); ?>'></script>
    <script src='<?php echo base_url("/assets/js/5Npl_DkivWTNCRdzYR204bTSOlo.js"); ?>'></script>