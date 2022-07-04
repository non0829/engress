<?php get_header(); ?>

<main>
    <ul class="breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="#"><span itemprop="name">ホーム</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="#"><span itemprop="name">送信完了</span></a>
            <meta itemprop="position" content="2" />
        </li>
    </ul>

    <div class="confirm">
        <p>お問い合わせいただきありがとうございます<br>内容を確認した後、担当者よりご連絡いたします</p>
        <a href="#">ホームへ戻る</a>
    </div>

</main>

<footer>
    <div class="footer_info">
        <div class="footer_info_text flex">
            <nav class="footer_info_left">
                <ul class="flex">
                    <li>ホーム</li>
                    <li>お知らせ</li>
                    <li>ブログ</li>
                    <li>コース・料金</li>
                </ul>
            </nav>
            <div class="footer_info_right">
                <div class="footer_info_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/logo (2).png" alt="">
                </div>
                <div class="footer_info_phone">
                    <div class="footer_tel flex">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/phone2.png" alt="">
                        <p>0123-456-7890</p>
                    </div>
                    <p>平日08:00〜20:00</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_copyright">
        <div class="footer_copyright_text">
            <p>© 2020 Engress.</p>
        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="main.js"></script>
</body>

</html>