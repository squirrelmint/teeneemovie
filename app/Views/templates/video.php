<div id="content">
	<div id="secondseo">
		<h2>ดูหนังฟรีได้แบบไม่เสียเงินหรือเลือกดูหนังออนไลน์อัพเดตใหม่ก่อนใคร</h2>
		<h2>เลือกหนังที่จะดูได้ตามหมวดหมู่หรือเลือกดูหนังออนไลน์ที่อัพใหม่ได้ที่หน้าแรก</h2>
		<h2>เลือกดูหนังตามปีที่ฉาย</h2>
	</div>
	<div class="content-left">
		<div class="sidebar">
			<div class="sidebar-header">
				<p style="font-size: 18px;text-align: center;">
					ปีที่ฉาย
				</p>
			</div>
			<ul>
				<?php for ($i = 2020; $i >= 1990; $i--) { ?>
					<li class="cat-item">
						<a href="#"><?php echo $i; ?></a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<div class="content-main">
		<div class="box">
			<div class="box-header">
				<div class="title">
					<a href="#" title="Aladdin อะลาดิน" target="_blank" class="google-search">
					</a>
					<h1>
						<a>
							<?php echo $video_data['movie_thname']; ?>
							<!-- <div class="imdb-rating">
								<div class="imdb-rating-content">
									<span>7</span> /10
								</div>
							</div> -->
						</a>
					</h1>
				</div>
			</div>
			<?php //echo "<pre>"; print_r($video_data);
			?>
			<div class="movie-header">
				<div class="movie-thumbnail">
					<img src="<?php echo $video_data['movie_picture']; ?>" alt="<?php echo $video_data['movie_thname']; ?>">
				</div>
				<div class="movie-trailer">
					<?php
					$url = $video_data['movie_preview'];
					if (!filter_var($url, FILTER_VALIDATE_URL)) {
						$url = "https://www.youtube.com/embed/" . $url;
					}
					?>
					<iframe src="<?php echo $url; ?>" frameborder="0" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
		<!-- Banner ก่อน Video -->
		<!-- <div class="box">
			<a href="https://www.webdoonung.com/ads/redirect/19" target="_new">
				<img src="https://www.webdoonung.com/images/banners/r75oPuO5aYMV5RH1AcVATdw3bimi28u1200-450V9.gif" width="100%" alt="banner" style="border: none; height: auto;">
			</a>
		</div> -->
		<!-- Banner ก่อน Video -->

		<div class="box">
			<div class="filmicerik">
				<div class="movie-description">
					<!-- <div class="description align-left">
						<p>เรื่องย่อ</p>
						<p style="font-size:100%;">
							วิลสันรอดชีวิตมาได้และคิดจะกลับไปหาวาเนสซา แต่ไม่กล้าไปพบเพราะกลัวเธอจะรับรูปลักษณ์ของเขาไม่ได้ เขาจึงไปหาวีเซล เพื่อนผู้เป็นเจ้าของบาร์และวางแผนจะหาตัวเอแจ็กซ์ให้เจอเพื่อทำให้เขากลับมาเป็นเหมือนเดิม โดยสวมชุดและเรียกตัวเองว่า "เดดพูล" หลังจากแกะรอยมานาน วิลสันโจมตีขบวนรถของเอแจ็กซ์บนทางด่วนและจับตัวเอแจ็กซ์ไว้ได้ แต่ถูกขัดขวางโดยเนกาโซนิก ทีนเอจ วอร์เฮดและโคลอสซัส ผู้พยายามจะชักชวนวิลสันเข้าทีมเอ็กซ์เมน ทำให้เอแจ็กซ์หนีไปได้อีกครั้ง

							เอแจ็กซ์และแองเจล ดัสท์ไปที่บาร์ของวีเซลและรู้เรื่องวาเนสซา จึงไปลักพาตัววาเนสซาและท้าให้วิลสันมาที่ลานเก็บของเก่า วิลสันไปขอความช่วยเหลือจากเนกาโซนิกและโคลอสซัส ทั้งสามคนไปที่ลานเก็บของเก่า โดยเนกาโซนิกและโคลอสซัสสู้กับแองเจล ดัสท์ ส่วนวิลสันสู้กับทหารของเอแจ็กซ์ก่อนจะขึ้นไปสู้กับเอแจ็กซ์บนซากยานเก่าที่วาเนสซาถูกจับตัวอยู่ ระหว่างการต่อสู้ เนกาโซนิกทำให้ซากยานล้ม ทำให้เอแจ็กซ์บาดเจ็บหนัก วิลสันช่วยวาเนสซาและสั่งให้เอแจ็กซ์ทำให้ตนกลับมาเป็นเหมือนเดิม แต่เอแจ็กซ์หัวเราะและบอกว่าไม่มีวิธีไหนทำได้ วิลสันจึงฆ่าเอแจ็กซ์ ก่อนจะปรับความเข้าใจกับวาเนสซา ทั้งคู่จูบกันในตอนจบ
						</p>
					</div> -->
					<!-- <div>
						<a href="http://webdoonung.com/">
							ดูหนังออนไลน์
						</a>
						<a href="https://www.webdoonung.com/Aladdin-%E0%B8%AD%E0%B8%B0%E0%B8%A5%E0%B8%B2%E0%B8%94%E0%B8%B4%E0%B8%99">
							<strong>
								Aladdin อะลาดิน
								2019
							</strong>
						</a>
					</div> -->
					<!-- <div>
						<small>Thai HD</small>
					</div>
					<div class="imdb-rating">
						<div class="imdb-rating-content">
							<span>7</span>
							/10
						</div>
					</div>
					<div class="path_sound" style="padding: 10px 0px;">
						<button type="button" data-sound="sound_th" class="sound_path btn btn-primary" data-href="https://www.webdoonung.com/streaming/ZXlKcGRpSTZJbms0ZFUxQ2VVWlFjRnd2YlZreVowdFRkVzFqWkZkQlBUMGlMQ0oyWVd4MVpTSTZJazVLVld4M1NVVXdjMHRvVjNvM1FYbzBjbXhNVkV4TFpHSjZVbkpjTDBwTk5XRXhiRTEwUTFOWlZ6Smtka2x2ZWxabE1EUkxTelJzYWxvNFpYSkRNSHBRSWl3aWJXRmpJam9pT0dJME1EVTRNakpqTjJKa1pEUTVOREF6TkRRM016Y3haREUwTWpNNU5XWXlOalJtWVRKbE1EQTRNemt3TlRJMll6YzFObU0xTmpZMk9UTTJaVEF3WVNKOQ==" style="margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #127ba3;font-size: 14px;font-weight: 600;margin: 0px">
							<i class="fas fa-play"></i>
							พากย์ไทย
						</button>
					</div> -->
				</div>
				<!-- <link rel="stylesheet" href='<?php // echo base_url("/assets/css/video-js.min.css"); 
													?>'> -->
				<!-- <script src='<?php// echo base_url("/assets/js/video.min.js"); ?>'></script> -->
				<!-- <script src="//vjs.zencdn.net/5.4.6/video.min.js"></script> -->
				<!-- <div class="player_container" id="player_ads_0" style="margin-top: 10px;">
					<video id="ads_movie_0" width="100%" class="video-js vjs-default-skin vjs-16-9" controls playsinline></video>
					<div id="register_ads_0" class="register-ads" style="display:none">
						สมัครสมาชิก
					</div>
					<div id="skip_ads_0" class="skip-ads" style="display:none" disabled="true">
						ข้ามได้ใน <b id="time_skip_0">5</b>
					</div>
				</div> -->
				<script>
					// Banner Video (โฆษณา Movie)
					// var player_0 = videojs("ads_movie_0");
					// player_0.src({
					// 	src: "https://www.webdoonung.com/images/banners/ooPSPVS1gPS69SKl4HyBiRg7onZMjxY4JEDsFP2aHza39niQfbwbHvMULXTNzDufa442th.mp4",
					// });

					// console.log("https://www.webdoonung.com/images/banners/ooPSPVS1gPS69SKl4HyBiRg7onZMjxY4JEDsFP2aHza39niQfbwbHvMULXTNzDufa442th.mp4");

					// player_0.on('displayClick', function(e) {
					// 	if (start_ads_0 >= 1) {
					// 		window.open("https://www.webdoonung.com/ads/redirect/18");
					// 	}
					// });

					// player_0.on('click', function(e) {
					// 	if (start_ads_0 >= 1) {
					// 		window.open("https://www.webdoonung.com/ads/redirect/18");
					// 	}
					// });
				</script>


				<!-- <div class="player_container" id="player_movie" style="display: none;"> -->
					<div style="display: block; padding: 15px;" class="movie_player">
						<!-- Movie source -->
						<!-- <iframe src="<?= base_url('player/' . $video_data['movie_id'] . '/' . $feildplay) ?>" id="player_iframe" style="width: 100%; height: 420px; border: none;/* position: relative; z-index: 2147483647*/" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" scrolling="no" __idm_id__="993216513"></iframe> -->

						<div class="video-info">
							<!-- 16:9 aspect ratio  -->

							<div class="row">
								<div class="col-lg-3">
									<button class="pull-right btn report-movie" onclick="goReport('<?= $video_data['movie_id'] ?>','<?= $video_data['branch_id'] ?>')">
										<font color="white">แจ้งหนังเสีย</font>
									</button>
								</div>
							</div>
							<!-- Your share button code -->

							<!-- ********************* SOURCS MOVIES  ****************************  -->
							<div class="embed-responsive embed-responsive-16by9 video-embed-box" style="height: 436px; margin-bottom: 10px;">
								<!-- <iframe src="https://freeball95.com/E/M07814.mp4" width="500px" class="embed-responsive-item"></iframe> -->
								<?php // echo base_url();die; ?>
								<iframe src="<?= base_url('player/' . $video_data['movie_id'] . '/' . $feildplay) ?>" scrolling="no" frameborder="0" style="width:100%; height:100%; z-index:500;" allowfullscreen="yes"></iframe>
							</div>
							<!-- ********************* SOURCS MOVIES  ****************************  -->
						</div>
						<!-- /Movie source -->
					</div>
				<!-- </div> -->


				<!-- <div id="sound_th" class="sound_container">
					<div class="player_ep">
						<div style="text-align: center">
							<button type="button" data-href="https://www.webdoonung.com/streaming/ZXlKcGRpSTZJazgzZEV4UGJXc3hSRlJsYjFWWlVVVm5YQzk1YTI5M1BUMGlMQ0oyWVd4MVpTSTZJbXh4TkN0dVFtRnNibkpsYjFCTFduRnJUbkZZZEZ3dllqSm9jbko1UWpNMU1VeHVTVGxqUVhwdGRHMUZNRFJsUVd0RUszVnNUbTQyU1cxbWFrZEVhbnBGSWl3aWJXRmpJam9pTkdGaE5HTTFOR1l5TVRneFlXVTJNRFppTkRBM056SmpZbVk0TnpJd1lUazRZbUl6T1dNeE1HTTJOamRpWWpoaFlUVTFOek0wTWpCaVl6bGlZVFZrWkNKOQ==" data-resolution="google_res" onclick="triggerAd()" class="btn btn-primary play-ep" style="color: #fff;margin-left: 0px;border-radius: 2px;border-bottom: 4px solid #127ba3;padding: 5px 10px;font-size: 13px;font-weight: 600;color: #fff;margin-right: 0px">
								<i class="fas fa-link"></i> หลัก
							</button>
							<br>
						</div>
					</div>
					<div id="google_res" class="resolution_path" style="text-align: right;display: block;">
					</div>
					<div id="openload_res" class="resolution_path" style="text-align: right;display: none">
					</div>
					<div id="streamango_res" class="resolution_path" style="text-align: right;display: none">
					</div>
				</div> -->
				<div id="sound_sub" class="sound_container" style="display: none">
					<div class="player_ep">
						<div style="text-align: center">
							<br>
						</div>
					</div>
					<div style="text-align: right" id="google_res_sub" class="resolution_path" style="display: block">
					</div>
					<div style="text-align: right" id="openload_res_sub" class="resolution_path" style="display: none">
					</div>
					<div style="text-align: right" id="streamango_res_sub" class="resolution_path" style="display: none;">
					</div>
				</div>
				<div style="text-align: right;margin-top: 20px;">
					<!-- <button class="btn" id="movie_refresh" style="background-color: #DB601E; color: white">
						รีเฟชหนังไม่เล่น
					</button> -->

				</div>
				<script>
					// jQuery(document).ready(function() {

					// 	jQuery(".play-ep").click(function() {
					// 		var ep = jQuery(this).attr('data-href'); // ค้นหา url ไฟล์
					// 		var resolution = jQuery(this).attr('data-resolution');
					// 		jQuery("#player_iframe").attr('src', ep); // เปลี่ยน ep ให้ iframe
					// 		jQuery(".play-ep").removeClass('btn-primary').addClass('btn-default'); // ลบ Active Button
					// 		jQuery(".play-ep").css({
					// 			'color': '#555',
					// 			'border-bottom': '4px solid #c3c3c3'
					// 		});
					// 		jQuery(this).removeClass('btn-default').addClass('btn-primary'); // ลบ Active Button
					// 		jQuery(this).css({
					// 			'border-bottom': '4px solid #127ba3',
					// 			'color': '#fff'
					// 		});
					// 		jQuery(".resolution_path").hide();
					// 		jQuery("#" + resolution).show();

					// 	});

					// 	jQuery(".episode_path").click(function() {
					// 		var ep = jQuery(this).attr('data-href'); // ค้นหา url ไฟล์
					// 		var name = jQuery(this).attr('data-ep-name');
					// 		jQuery("#player_iframe").attr('src', ep); // เปลี่ยน ep ให้ iframe
					// 		jQuery(".episode_path").css({
					// 			'background-color': '#5b5b5b'
					// 		});
					// 		jQuery(this).css({
					// 			'background-color': '#127ba3'
					// 		});
					// 	});

					// 	jQuery(".resolution").click(function() {
					// 		var ep = jQuery(this).attr('data-href'); // ดึง URL
					// 		jQuery("#player_iframe").attr('src', ep); // เปลี่ยน ep ให้ iframe

					// 		jQuery(".resolution").removeClass('btn-primary').addClass('btn-default'); // ลบ Active Button
					// 		jQuery(".resolution").css({
					// 			'color': '#555',
					// 			'border-bottom': '4px solid #c3c3c3'
					// 		});
					// 		jQuery(this).removeClass('btn-default').addClass('btn-primary'); // ลบ Active Button
					// 		jQuery(this).css({
					// 			'border-bottom': '4px solid #127ba3',
					// 			'color': '#fff'
					// 		});
					// 	});

					// 	jQuery(".sound_path").click(function() {

					// 		jQuery(".sound_path").removeClass('btn-primary').addClass('btn-default'); // ลบ Active Button
					// 		jQuery(".sound_path").css({
					// 			'color': '#555',
					// 			'border-bottom': '4px solid #c3c3c3'
					// 		});
					// 		jQuery(this).removeClass('btn-default').addClass('btn-primary'); // ลบ Active Button
					// 		jQuery(this).css({
					// 			'border-bottom': '4px solid #127ba3',
					// 			'color': '#fff'
					// 		});

					// 		jQuery(".sound_container").hide();

					// 		var path = jQuery(this).attr('data-sound');
					// 		var ep = jQuery(this).attr('data-href'); // ค้นหา url ไฟล์
					// 		jQuery("#player_iframe").attr('src', ep); // เปลี่ยน ep ให้ iframe
					// 		// console.log(path);
					// 		jQuery("#" + path).show();
					// 	});

					// 	//รีเฟสหนังไม่เล่น 
					// 	jQuery("#movie_refresh").click(function() {
					// 		var movie_url = jQuery('#player_iframe').attr('src');
					// 		jQuery("#player_iframe").attr('src', movie_url);
					// 	});

					// 	jQuery('#movie_fix').click(function() {
					// 		var request = "8818";
					// 		jQuery.ajax({
					// 			url: 'https://www.webdoonung.com/api/v1/moviecontact/' + request,
					// 			type: 'GET',
					// 			crossDomain: true,
					// 			cache: false,
					// 			success: function(data) {

					// 				// console.log(data);
					// 			}
					// 		});
					// 		alert('เราจะดำเนินการให้เร็วที่สุด')
					// 	});

					// });
				</script>
				<style>
					.resolution_path {
						margin-right: 20px;
					}

					.ads_movie {
						position: absolute;
						z-index: 98;
					}

					.movie_player {}

					.player_container {
						position: relative;
						width: 100%;
						height: 440px;
					}

					.player_ep {
						margin: 5px 0 10px 0;
					}

					.register-ads {
						position: absolute;
						z-index: 99;
						top: 20%;
						right: 0px;
						border-top-right-radius: 0;
						border-bottom-right-radius: 0;
						color: #fff;
						background-color: rgb(148, 13, 13);
						border-color: rgb(148, 13, 13);
						padding: 20px 21px 18px;
						line-height: 20px;
						font-size: 20px;
						opacity: .9;
						cursor: pointer;
					}

					.skip-ads {
						position: absolute;
						z-index: 99;
						top: 40%;
						right: 0px;
						border-top-right-radius: 0;
						border-bottom-right-radius: 0;
						color: #fff;
						background-color: #222;
						border-color: #151515;
						padding: 20px 21px 18px;
						line-height: 20px;
						font-size: 20px;
						opacity: .9;
					}

					.jw-controlbar {
						display: none;
					}
				</style>
				<script>
					// var ads_movie_0 = document.getElementById("ads_movie_0");
					// var ads_skip_0 = document.getElementById("skip_ads_0");
					// var ads_controller = document.getElementById("jw-controlbar");
					// var player_ads_0 = document.getElementById("player_ads_0");
					// var player_movie_0 = document.getElementById("player_movie_0");
					// var set_time_skip = document.getElementById("time_skip_0");
					// var start_ads_0 = 0;




					// // Videojs
					// // เมื่อเริ่มเล่น
					// player_0.on('play', function(e) {
					// 	start_ads_0++;
					// 	ads_skip_0.style.display = "block"; // แสดงปุ่มข้าม
					// 	var time_skip = parseInt(5);
					// 	set_time_skip.innerHTML = time_skip;
					// 	// ads_controller.style.display = "none";
					// 	// ads_controller.style.display = "none";
					// 	var count_down = setInterval(function() {
					// 		time_skip--;
					// 		set_time_skip.innerHTML = time_skip;
					// 	}, 1000); // นับถอยหลัง


					// 	// เปลี่ยนเวลาโฆษณา
					// 	setTimeout(function() {
					// 		clearInterval(count_down);
					// 		ads_skip_0.setAttribute("disabled", false);
					// 		ads_skip_0.innerHTML = "ข้ามโฆษณา";
					// 	}, 5000)

					// });

					// player_0.on('stop', function(e) {
					// 	// console.log('stop');
					// 	start_ads_0++;
					// 	ads_skip_0.style.display = "block"; // แสดงปุ่มข้าม
					// 	var time_skip = parseInt(1);
					// 	set_time_skip.innerHTML = time_skip;
					// 	// ads_controller.style.display = "none";
					// 	// ads_controller.style.display = "none";
					// 	var count_down = setInterval(function() {
					// 		time_skip--;
					// 		set_time_skip.innerHTML = time_skip;
					// 	}, 1000); // นับถอยหลัง

					// 	setTimeout(function() {
					// 		clearInterval(count_down);
					// 		ads_skip_0.setAttribute("disabled", false);
					// 		ads_skip_0.innerHTML = "ข้ามโฆษณา";
					// 	}, 5000)

					// });

					// player_0.on('pause', function(e) {

					// });

					// player_0.on('ended', function(e) {
					// 	player_ads_0.style.display = "none"; // ปิดโฆษณา
					// 	// ถ้าเป็น Ads ตัวสุดท้าย ให้แสดงหนัง
					// 	player_movie.style.display = "block"; // แสดงหนัง
					// 	// ถ้าไม่เป็น Ads ตัวสุดท้าย ให้แสดง Ads ถัดไป
					// });

					// // เมื้่อกดปุ่ม Skip
					// ads_skip_0.addEventListener("click", function() {
					// 	if (ads_skip_0.getAttribute("disabled") == "false") // เช็คว่า ads_skip ครบ 3 วิหรือไม่แล้วปุ่มได้ปิด disabled ยัง
					// 	{
					// 		player_0.pause(); // หยุดเล่นโฆษณา
					// 		player_ads_0.style.display = "none"; // ปิดโฆษณา
					// 		// ถ้าเป็น Ads ตัวสุดท้าย ให้แสดงหนัง
					// 		player_movie.style.display = "block"; // แสดงหนัง
					// 		// ถ้าไม่เป็น Ads ตัวสุดท้าย ให้แสดง Ads ถัดไป
					// 	}
					// });
				</script>
				<style>
					.btn-primary {
						color: #fff;
						background-color: #158cba;
						border-radius: 2px;
					}

					.play-ep {
						/* border-color: #127ba3; */
					}

					.btn {
						display: inline-block;
						margin-bottom: 0;
						text-align: center;
						vertical-align: middle;
						-ms-touch-action: manipulation;
						touch-action: manipulation;
						cursor: pointer;
						background-image: none;
						border: 1px solid transparent;
						white-space: nowrap;
						padding: 7px 12px;
						font-size: 14px;
						border-radius: 4px;
					}
				</style>
			</div>
		</div>


		<!-- <div class="box">
			<a href="https://www.webdoonung.com/ads/redirect/15" target="_new">
				<img src="https://www.webdoonung.com/images/banners/4LlD5JyjdH5eobYbUyX69zA3YYB4OGZ1000300ดูหนัง.gif" width="100%" alt="banner" style="border: none; height: auto;">
			</a>
		</div>
		<div class="box">
			<a href="https://www.webdoonung.com/ads/redirect/16" target="_new">
				<img src="https://www.webdoonung.com/images/banners/51O8eHNhzVRmlnZ25RNqrLaH3vCJTHO960240ดูหนังออนไลน์.gif" width="100%" alt="banner" style="border: none; height: auto;">
			</a>
		</div> -->
		<div class="actions">
		</div>
		<!-- <div class="box-content">
			<div class="content-tags">
				ป้ายกำกับ:
				<a href="https://www.webdoonung.com/tag/Aladdin-%E0%B8%AD%E0%B8%B0%E0%B8%A5%E0%B8%B2%E0%B8%94%E0%B8%B4%E0%B8%99" rel="tag">Aladdin อะลาดิน</a>
				<a href="http://webdoonung.com/" rel="tag">ดูหนังออนไลน์</a>
				<a href="http://webdoonung.com/" rel="tag">ดูหนัง HD</a>
				<div id="SC_TBlock_313538" class="SC_TBlock"></div>
			</div>
		</div> -->
		<div id="fb-root"></div>
		<div class="box" style="position: relative;">
			<h3 style="font-color:#f2d45f;"> แสดงความคิดเห็น</h3>
			<div class="fb-comments" data-href="https://www.webdoonung.com/Aladdin-%E0%B8%AD%E0%B8%B0%E0%B8%A5%E0%B8%B2%E0%B8%94%E0%B8%B4%E0%B8%99" data-colorscheme="dark" data-width="760" data-numposts="5"></div>
			<div id="fb-root"></div>
			<script>
				(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s);
					js.id = id;
					js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.2&appId=254458338652270&autoLogAppEvents=1';
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>
		</div>

		<!-- สุ่มหนัง ก่อน Footer -->
		<div class="box">
			<div class="box-header">สุ่มหนังเรื่องอื่นๆ</div>
			<div class="movie">
				<div class="movie-box">
					<div class="movie-title">
						<a href="#">
							<span>Despicable Me 2 มิสเตอร์แสบ ร้ายเกินพิกัด 2</span>
						</a>
					</div>
					<div class="movie-imdb">
						<b><span>6.3</span></b>
					</div>
					<div class="movie-corner movie-HD">HD</div>
					<div class="movie-image">
					<a href="#">
							<img src="https://www.webdoonung.com/images/movie/22pVCZxiuTcwsXaYDLzRtkgHSXgf7MHDespicable_Me_2.jpg" alt="Despicable Me 2 มิสเตอร์แสบ ร้ายเกินพิกัด 2">
						</a>
					</div>
				</div>
				<div class="movie-footer">
					Thai HD 2017
				</div>
			</div>
			<div class="movie">
				<div class="movie-box">
					<div class="movie-title">
					<a href="#">
							<span>Europe Raiders พยัคฆ์สำอาง กระเเทกยุโรป</span>
						</a>
					</div>
					<div class="movie-imdb">
						<b><span>4</span></b>
					</div>
					<div class="movie-corner movie-ZM">Zoom</div>
					<div class="movie-image">
					<a href="#">
							<img src="https://www.webdoonung.com/images/movie/alkwdDxLqVjzErZd9zynnoWK0GVzS2P1538968567_europe-raiders_cvoer.jpg" alt="Europe Raiders พยัคฆ์สำอาง กระเเทกยุโรป">
						</a>
					</div>
				</div>
				<div class="movie-footer">
					TH Zoom 2018
				</div>
			</div>
			<div class="movie">
				<div class="movie-box">
					<div class="movie-title">
					<a href="#">
							<span>Durante la tormenta (Mirage) ภาพลวงตา</span>
						</a>
					</div>
					<div class="movie-imdb">
						<b><span>0</span></b>
					</div>
					<div class="movie-corner movie-ZM">FullHD</div>
					<div class="movie-image">
					<a href="#">
							<img src="https://www.webdoonung.com/images/movie/gJEcxfRvXDdnH4xAntMy2JWiM52SmqAMV5BZWRhNGRhMTUtOTMwYS00YzE2LTk2YWQtMDU2MGQyYWNmMmU4XkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_UX182_CR0,0,182,268_AL_.jpg" alt="Durante la tormenta (Mirage) ภาพลวงตา">
						</a>
					</div>
				</div>
				<div class="movie-footer">
					ST FullHD 2018
				</div>
			</div>
			<div class="movie">
				<div class="movie-box">
					<div class="movie-title">
					<a href="#">
							<span>Two Champions of Shaolin จอมโหดเส้าหลินถล่มบู๊ตึ้ง </span>
						</a>
					</div>
					<div class="movie-imdb">
						<b><span>6</span></b>
					</div>
					<div class="movie-corner movie-HD">HD</div>
					<div class="movie-image">
					<a href="#">
							<img src="https://www.webdoonung.com/images/movie/D4z6hzBnNF0X1nfVkyQii7V8euZSNNOMV5BOWNlODQ3YTAtMjA5NS00MTM5LWEyMzktZDM4NGU3ZjhjYjA3XkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_UX182_CR0,0,182,268_AL_.jpg" alt="Two Champions of Shaolin จอมโหดเส้าหลินถล่มบู๊ตึ้ง ">
						</a>
					</div>
				</div>
				<div class="movie-footer">
					TH HD 1978
				</div>
			</div>
		</div>
		<!-- สุ่มหนัง ก่อน Footer -->



	</div>
	<style>
		.movie-imdb b {
			background: url('https://www.webdoonung.com/images/icon-star.png') no-repeat 0;
			background-size: 11px 11px;
		}

		.imdb-rating {
			background: url(https://www.webdoonung.com/images/IMDb.png) no-repeat;
			background-size: 100% 100%;
			width: 160px;
			height: 36px;
			vertical-align: top;
			display: inline-block;
		}

		.description {
			padding: 10px;
			background-color: #2b2b2b;
			margin: 10px;
			border-radius: 4px;
			color: #f3f3f3;
		}

		.description p:first {
			font-size: 18px;
		}

		.description p:nth-child() {
			font-size: 14px;
			color: white;
		}
	</style>
	<div class="content-right">
		<div class="sidebar">
			<div class="sidebar-header">
				<p style="font-size: 18px;text-align: center;">
					หมวดหมู่
				</p>
			</div>
			<ul>
				<li class="cat-item cat-left">
					<a href="#" title="Animation">
						หนังการ์ตูน </a>
				</li>
				<li class="cat-item cat-left">
					<a href="#" title="Asia Movie">
						หนังเอเชีย </a>
				</li>
				<li class="cat-item cat-left">
					<a href="#" title="Inter Movie">
						หนังฝรั่ง </a>
				</li>
				<li class="cat-item cat-left">
					<a href="#" title="Thai Movie">
						หนังไทย </a>
				</li>
			</ul>
		</div>
		<div class="sidebar">
			<div class="sidebar-header">
				<p style="font-size: 18px;text-align: center;">
					ประเภท
				</p>
			</div>
			<ul>
				<li class="cat-item cat-left">
					<a href="#" title="Action บู๊">
						Action บู๊ </a>
				</li>
				<li class="cat-item cat-left">
					<a href="#" title="Adventure ผจญภัย">
						Adventure ผจญภัย </a>
				</li>
				<li class="cat-item cat-left">
					<a href="#" title="Comedy ตลก">
						Comedy ตลก </a>
				</li>
				<li class="cat-item cat-left">
					<a href="#" title="Crim อาชญากรรม">
						Crim อาชญากรรม </a>
				</li>
				<li class="cat-item cat-left">
					<a href="#" title="Drama ดราม่า">
						Drama ดราม่า </a>
				</li>
				<li class="cat-item cat-left">
					<a href="#" title="Horror สยองขวัญ">
						Horror สยองขวัญ </a>
				</li>
				<li class="cat-item cat-left">
					<a href="#" title="Inter Series ">
						Inter Series </a>
				</li>
				<li class="cat-item cat-left">
					<a href="#" title="Korea Series ">
						Korea Series </a>
				</li>
				<li class="cat-item cat-left">
					<a href="#" title="Netflix Movie ">
						Netflix Movie </a>
				</li>
				<li class="cat-item cat-left">
					<a href="#" title="Netflix Series ">
						Netflix Series </a>
				</li>
				<li class="cat-item cat-left">
					<a href="#" title="Sci-Fi วิทยาศาสตร์">
						Sci-Fi วิทยาศาสตร์ </a>
				</li>
			</ul>
		</div>
	</div>
	<style>
		.cat-left {
			/* background-image: url(https://www.movie2free.com/wp-content/themes/next/images/nav-bullet.gif);
			background-position: left center;
			background-repeat: no-repeat;
			padding: 6px 6px 6px 18px; */
		}
	</style>
</div>
<div class="clearfix"></div>
<div style="display: none">
	<h3>ดูหนังตามหมวดหมู่เลือกหมวดหมู่ต่างๆเพื่อดูหนังออนไลน์</h3>
	<h3>ประเภทของหนัง ดูหนังต่างๆตามประเภทที่จัดไว้ คิกเพื่อดูหนังออนไลน์</h3>
</div>