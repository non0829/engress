<?php get_header(); ?>

<main>
    <?php get_template_part( 'templates/breadcrumbs' ); ?>

    <div class="confirm">
        <p>お問い合わせいただきありがとうございます<br>内容を確認した後、担当者よりご連絡いたします</p>
        <a href="<?php echo esc_url(home_url()); ?>">ホームへ戻る</a>
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
<?php wp_footer(); ?>
</body>

</html>