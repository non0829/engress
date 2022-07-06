<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engress</title>
    <meta name=”description” content="日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクール" />
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="flex">
            <ul class="header_left_nav flex">
                <li><img src="<?php echo get_template_directory_uri(); ?>/image/logo (2).png" alt=""></li>
                <li><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></li>
                <li><a href="<?php echo esc_url(home_url('news')); ?>">お知らせ</a></li>
                <li><a href="<?php echo esc_url(home_url('blog')); ?>">ブログ</a></li>
                <li><a href="<?php echo esc_url(home_url('price')); ?>">コース・料金</a></li>
            </ul>
            <div class="header_right_nav flex">
                <div class="header_info">
                    <p>平日08:00〜20:00</p>
                    <div class="header_tel flex">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/phone.png" alt="">
                        <p>0123-456-7890</p>
                    </div>
                </div>
                <button class="header_btn button"><a href="#">資料請求</a></button>
                <button class="header_btn button"><a
                        href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a></button>
            </div>
            <button type="button" id="js-hamburger" class="button hamburger">
                <span class="hamburger__line">
                </span>
            </button>
        </nav>
        <div class="sp-global-menu" id="js-global-menu">
            <nav>
                <ul>
                    <li><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></li>
                    <li><a href="<?php echo esc_url(home_url('news')); ?>">お知らせ</a></li>
                    <li><a href="<?php echo esc_url(home_url('blog')); ?>">ブログ</a></li>
                    <li><a href="<?php echo esc_url(home_url('price')); ?>">コース・料金</a></li>
                </ul>
                <div class="sp-global-menu_info">
                    <p>平日08:00〜20:00</p>
                    <div class="sp-global-menu_tel flex">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/phone2.png" alt="">
                        <p>0123-456-7890</p>
                    </div>
                </div>
                <button class="header_btn button"><a href="#">資料請求</a></button>
                <button class="header_btn button"><a
                        href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a></button>
            </nav>
        </div><!-- /.sp-header-menu -->
        <div class="back_color"></div>
    </header>