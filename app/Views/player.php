<script src="<?= base_url('/assets/js/jwplayer.js'); ?>"></script>
<script src="<?= base_url('/assets/js/g23lrur.js'); ?>"></script>
<script src="https://cdn.jwplayer.com/libraries/rYlCdkEJ.js"></script>
<link rel="stylesheet" href='<?php echo base_url("/assets/css/css_size.css"); ?>'>

<?php

// $ads_video = array(
//     array(
//         'file' => 'https://ufa365movie.com/wp-content/uploads/2019/banner/UFA365-2.mp4',
//         'url' => 'https://www.ufa365s.com/'
//     ),
//     array(
//         'file' => 'https://www.nungdung.com/ads/Poepoe.mp4',
//         'url' => 'https://www.lagalaxy1.com/'
//     ),
//     array(
//         'file' => 'https://www.nungdung.com/ads/Ssgame66.mp4',
//         'url' => 'https://ssgame66.com'
//     )
// );

$ads_video = $adsvideo;

$movie_video = array(
    'img' => $video_data["movie_picture"],
    'file' => $url_play
);

?>

<html>

<head>

    <meta charset="utf-8" />
    <style>
        .player_ads {
            margin: 0 auto;
            position: relative;
            width: 300px;
            bottom: -20px;
            text-align: center;
        }

        .skipads {
            position: absolute;
            bottom: 100px;
            right: 30px;
            padding-top: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            font-size: 18px;
            text-decoration: underline;
            color: #fff;
            background-color: #272626;
            border-radius: 5px;
            border: 2px solid #3b1314;
        }

        .registerads {
            position: absolute;
            bottom: 30px;
            right: 30px;
            padding-top: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            font-size: 18px;
            text-decoration: underline;
            color: #fff;
            background-color: red;
            border-radius: 5px;
            border: 2px solid red;
        }

        .registerads>a {
            color: white;
        }

        .adsclick {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            cursor: pointer;
        }

    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body class="if-size">
    <div id="playervideo" style="display: none;">Movie Player</div>

    <?php foreach ($ads_video as $key => $value) { ?>
        <?php
        $hidden = "";
        if ($key != 0) {
            $hidden .= "style = 'display:none;'";
        }
        ?>

        <div id="ads<?= $key ?>" style="z-index:1000;">
            <div id="adsplayer<?= $key ?>" <?= $hidden ?>>This ads player <?= $key ?> </div>
            <?php if ($key == 0) { ?>
                <script>
                    jwplayer('adsplayer<?= $key ?>').setup({
                        autostart: false,
                        width: '100%',
                        height: '100%',
                        controls: true,
                        file: "<?= $value['file'] ?>"
                    });
                </script>
            <?php } ?>

            <div id="adsclick<?= $key ?>" style="display: none;"></div>
            <div class="registerads" id="registerads<?= $key ?>" style="display: none;z-index: 1000;">
                <a onclick="onClickAds(<?= $value['adsvideo_id'] ?>, <?= $branch ?>)" href="<?= $value['url'] ?>" target="_blank"><span id="register<?= $key ?>">สมัครสมาชิก</span></a>
            </div>
            <div class="skipads" id="skipads<?= $key ?>" style="display: none;">
                <span id="timeer<?= $key ?>">กรุณารอ 5 วิ</span>
            </div>
        </div>
    <?php } ?>

    <script>
        function onClickAds(adsid, branch) {
            var backurl = '<?php echo $base_backurl; ?>';
            $.ajax({
                url: backurl + "adsvdo/sid/<?= session_id() ?>/adsid/" + adsid + "/branch/" + branch,
                async: true,
                success: function(response) {
                    console.log(response); // server response
                }
            });
        }

        $(document).ready(function() {

            <?php foreach ($ads_video as $key => $value) { ?>
                $("#adsclick<?= $key ?>").click(function() {
                    window.open("<?= $value['url'] ?>", '_blank');
                });
            <?php } ?>

            setAdsFrist();

        });


        function setAdsFrist() {

            jwplayer("adsplayer0").on('complete', function() {

                $('#ads0').hide();

                <?php if (count($ads_video) > 1) { ?>

                    setAds1();

                <?php } else { ?>

                    setMovie();
                    $('#playervideo').show();

                <?php } ?>

            });

            jwplayer("adsplayer0").on('error', function() {

                <?php if (count($ads_video) > 1) { ?>

                    $('#ads0').hide();
                    $('#skipads0').hide();
                    $('#registerads0').hide();
                    setAds1();
                    $('#adsplayer1').show();

                <?php } else { ?>

                    $('#ads0').hide();
                    $('#skipads0').hide();
                    $('#registerads0').hide();
                    setMovie();
                    $('#playervideo').show();

                <?php } ?>


            });

            jwplayer("adsplayer0").on('play', function() {

                $('#adsclick0').show();
                $('#skipads0').show();
                $('#registerads0').show();

                var timeleft = 5; // กรุณารอ
                var downloadTimer = setInterval(function() {

                    timeleft--;
                    $("#timeer0").text('กรุณารอ ' + timeleft + ' วิ');

                    if (timeleft <= 0) {

                        $("#timeer0").text('กดข้ามโฆษณา');

                        $('#skipads0').click(function() {

                            <?php if (count($ads_video) > 1) { ?>

                                $('#ads0').hide();
                                $('#skipads0').hide();
                                jwplayer("adsplayer0").remove();
                                setAds1();
                                $('#adsplayer1').show();

                                $('#adsplayer1').load();

                            <?php } else { ?>

                                $('#ads0').hide();
                                $('#skipads0').hide();
                                jwplayer("adsplayer0").remove();
                                setMovie();
                                $('#playervideo').show();

                                $('#playervideo').load();

                            <?php } ?>

                        });

                    }

                }, 1000);

            });

        }

        function setMovie() {

            // jwplayer("playervideo").setup({
            //     "file": "<?= $movie_video['file'] ?>",
            //     "image": "<?= $movie_video['img'] ?>",
            //     "height": '100%',
            //     "width": "100%",
            //     "aspectratio": "16:9",
            //     "androidhls": true,
            //     "preload": "auto",
            //     "hlshtml": true,
            //     "stretching": "uniform",
            //     "controls": false,
            //     "playbackRateControls": true,
            //     "primary": "html5"
            // });

            getmovie("playervideo", "<?= $movie_video['file'] ?>", "100%", false);

        }

        <?php for ($i = 1; $i < count($ads_video); $i++) {
            $value = $ads_video[$i];
            $key = $i; ?>

            <?php if ($key > 0 && $key != (count($ads_video) - 1)) {
                $auto = "true"; ?>

                function setAds<?= $key ?>() {

                    jwplayer("adsplayer<?= $key ?>").setup({
                        "autostart": '<?= $auto ?>',
                        "file": "<?= $value['file'] ?>",
                        "height": '100%',
                        "width": "100%",
                        "aspectratio": "16:9",
                        "androidhls": true,
                        "preload": "auto",
                        "hlshtml": true,
                        "stretching": "uniform",
                        "controls": false,
                        "playbackRateControls": true,
                        "primary": "html5"
                    });

                    jwplayer("adsplayer<?= $key ?>").on('complete', function() {

                        $('#ads<?= $key ?>').hide();

                        setAds<?= $key + 1 ?>();

                    });

                    jwplayer("adsplayer<?= $key ?>").on('error', function() {

                        $('#ads<?= $key ?>').hide();
                        $('#skipads<?= $key ?>').hide();
                        $('#registerads<?= $key ?>').hide();
                        setAds<?= $key + 1 ?>();
                        $('#adsplayer<?= $key + 1 ?>').show();

                        $('#adsplayer<?= $key + 1 ?>').load();


                    });

                    jwplayer("adsplayer<?= $key ?>").on('play', function() {

                        $('#adsclick<?= $key ?>').show();
                        $('#skipads<?= $key ?>').show();
                        $('#registerads<?= $key ?>').show();

                        var timeleft = 5; // กรุณารอ
                        var downloadTimer = setInterval(function() {

                            timeleft--;
                            $("#timeer<?= $key ?>").text('กรุณารอ ' + timeleft + ' วิ');

                            if (timeleft <= 0) {

                                $("#timeer<?= $key ?>").text('กดข้ามโฆษณา');

                                $('#skipads<?= $key ?>').click(function() {

                                    $('#ads<?= $key ?>').hide();
                                    $('#skipads<?= $key ?>').hide();
                                    jwplayer("adsplayer<?= $key ?>").remove();
                                    setAds<?= $key + 1 ?>();
                                    $('#adsplayer<?= $key + 1 ?>').show();

                                    $('#adsplayer<?= $key + 1 ?>').load();
                                });

                            }

                        }, 1000);

                    });

                }

            <?php } else if ($key == (count($ads_video) - 1)) { ?>

                function setAds<?= $key ?>() {

                    jwplayer("adsplayer<?= $key ?>").setup({
                        "autostart": 'true',
                        "file": "<?= $value['file'] ?>",
                        "height": '100%',
                        "width": "100%",
                        "aspectratio": "16:9",
                        "androidhls": true,
                        "preload": "auto",
                        "hlshtml": true,
                        "stretching": "uniform",
                        "controls": false,
                        "playbackRateControls": true,
                        "primary": "html5"
                    });

                    jwplayer("adsplayer<?= $key ?>").on('complete', function() {

                        $('#ads<?= $key ?>').hide();

                        setMovie();
                        $('#playervideo').show();

                    });

                    jwplayer("adsplayer<?= $key ?>").on('error', function() {

                        $('#ads<?= $key ?>').hide();
                        $('#skipads<?= $key ?>').hide();
                        $('#registerads<?= $key ?>').hide();
                        setMovie();
                        $('#playervideo').show();

                        $('#playervideo').load();

                    });

                    jwplayer("adsplayer<?= $key ?>").on('play', function() {

                        $('#adsclick<?= $key ?>').show();
                        $('#skipads<?= $key ?>').show();
                        $('#registerads<?= $key ?>').show();

                        var timeleft = 5; // กรุณารอ
                        var downloadTimer = setInterval(function() {

                            timeleft--;
                            $("#timeer<?= $key ?>").text('กรุณารอ ' + timeleft + ' วิ');

                            if (timeleft <= 0) {

                                $("#timeer<?= $key ?>").text('กดข้ามโฆษณา');

                                $('#skipads<?= $key ?>').click(function() {

                                    $('#ads<?= $key ?>').hide();
                                    $('#skipads<?= $key ?>').hide();
                                    jwplayer("adsplayer<?= $key ?>").remove();
                                    setMovie();
                                    $('#playervideo').show();

                                    $('#playervideo').load();

                                });

                            }

                        }, 1000);

                    });

                }

            <?php } ?>

        <?php } ?>
    </script>

</body>

</html>