<div id="content">
    <div id="secondseo">
        <h2>ดูหนังฟรีได้แบบไม่เสียเงินหรือเลือกดูหนังออนไลน์อัพเดตใหม่ก่อนใคร</h2>
        <h2>เลือกหนังที่จะดูได้ตามหมวดหมู่หรือเลือกดูหนังออนไลน์ที่อัพใหม่ได้ที่หน้าแรก</h2>
        <h2>เลือกดูหนังตามปีที่ฉาย</h2>
    </div>
    <div class="content-left">
        <div class="sidebar">
            <div class="sidebar-header">
                <p style="font-size: 18px; text-align: center;">
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
                <ul>
                    <li class="menu-item current-menu-item">
                        <a href="/page/home">หนังยอดนิยม</a>
                    </li>
                    <!-- <li class="menu-item ">
                        <a href="https://www.webdoonung.com/top-imdb">Top IMDb</a>
                    </li>
                    <li class="menu-item ">
                        <a href="https://www.webdoonung.com/%E0%B8%84%E0%B8%99%E0%B8%8A%E0%B8%AD%E0%B8%9A%E0%B8%A1%E0%B8%B2%E0%B8%81%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%AA%E0%B8%B8%E0%B8%94">คนชอบมากที่สุด</a>
                    </li> -->
                </ul>
            </div>

            <?php // echo "<pre>"; print_R($list_video); 
            ?>


            <?php foreach ($list_video as $value) {
                $id = $value['movie_id'];
                $urlvideo = base_url('/page/video/id/' . $id . '/main');
            ?>
                <div class="movie">
                    <div class="movie-box">
                        <div class="movie-title">
                            <a href='<?php echo $urlvideo; ?>'>
                                <span class="movie-title-color"><?php echo $value['movie_thname']; ?></span>
                            </a>
                        </div>
                        <div class="movie-imdb">
                            <b><span><?php echo $value['movie_ratescore']; ?></span></b>
                        </div>
                        <?php
                        if ($value['movie_quality'] == "hd") {
                            $display = "red";
                        } else if ($value['movie_quality'] == "sd") {
                            $display = "green";
                        } else {
                            $display = "green";
                        }
                        ?>
                        <div class="movie-corner movie-HD" style=" background-color: <?php echo $display; ?>;"><?php echo strtoupper($value['movie_quality']); ?></div>
                        <div class="movie-image">
                            <a href='<?php echo $urlvideo; ?>'>
                                <img src="<?php echo $value['movie_picture']; ?>" alt="<?php echo $value['movie_thname']; ?>">
                            </a>
                        </div>
                    </div>
                    <div class="movie-footer">
                        <?php //echo $value['movie_sound']; 
                        ?>
                    </div>
                </div>
            <?php } ?>

        </div>
        <!-- Pagination -->
        <div class="box">
            <div class="navigation">
                <ul>
                    <div class="topbar-filter">
                        <div class="pagination2">
                            <?= pagination($paginate['page'], $paginate['total_page']); ?>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
        <!-- /Pagination -->
    </div>



    <div class="content-right">
        <div class="sidebar">
            <div class="sidebar-header">
                <p style="font-size: 18px; text-align: center;">
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
                <li class="cat-item cat-left">
                    <a href="#" title="Thai Movie">
                        หนังติดเรท </a>
                </li>
                <li class="cat-item cat-left">
                    <a href="#" title="Thai Movie">
                        เกาหลี </a>
                </li>
                <li class="cat-item cat-left">
                    <a href="#" title="Thai Movie">
                        หนังรักโรแมนติก </a>
                </li>
            </ul>
        </div>
        <div class="sidebar">
            <div class="sidebar-header">
                <p style="font-size: 18px; text-align: center;">
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
            </ul>
        </div>
    </div>
    <style>
        .cat-left {
            background-image: url(https://www.movie2free.com/wp-content/themes/next/images/nav-bullet.gif);
            background-position: left center;
            background-repeat: no-repeat;
            padding: 6px 6px 6px 18px;
        }
    </style>
</div>
<div class="clearfix"></div>
<div style="display: none">
    <h3>ดูหนังตามหมวดหมู่เลือกหมวดหมู่ต่างๆเพื่อดูหนังออนไลน์</h3>
    <h3>ประเภทของหนัง ดูหนังต่างๆตามประเภทที่จัดไว้ คิกเพื่อดูหนังออนไลน์</h3>
</div>