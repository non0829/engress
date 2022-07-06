<footer>
    <section class="footer_image">
        <img src="<?php echo get_template_directory_uri(); ?>/image/cta.jpg" alt="">
        <div>
            <h2>まずは無料で資料請求から</h2>
            <button><a href="<?php echo esc_url(home_url('contact')); ?>">資料請求</a></button>
            <p><a href="<?php echo home_url("contact"); ?>">お問い合わせ</a></p>
        </div>
    </section>
    <div class="footer_phone">
        <div class="footer_phone_text flex">
            <p>お電話でのお問い合わせはこちら</p>
            <h2>0123-456-7890</h2>
            <p>平日 08:00~20:00</p>
        </div>
    </div>
    <div class="footer_info">
        <div class="footer_info_text flex">
            <nav class="footer_info_left">
                <ul class="flex">
                    <li><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></li>
                    <li><a href="<?php echo esc_url(home_url('news')); ?>">お知らせ</a></li>
                    <li><a href="<?php echo esc_url(home_url('blog')); ?>">ブログ</a></li>
                    <li><a href="<?php echo esc_url(home_url('price')); ?>">コース・料金</a></li>
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