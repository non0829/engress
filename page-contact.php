<?php get_header(); ?>

<main>
    <section class="sec_title_image">
        <img src="<?php echo get_template_directory_uri(); ?>/image/cta.jpg" alt="">
        <h1>お問い合わせ・資料請求</h1>
    </section>

    <ul class="breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="#"><span itemprop="name">ホーム</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="#"><span itemprop="name">お問い合わせ</span></a>
            <meta itemprop="position" content="2" />
        </li>
    </ul>

    <section class="sec_contact_content">
        <div class="wrapper">
            <p class="contact_message">弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</p>
            <form action="#" method="get">
                <div class="form_content">
                    <label for="company">会社名</label>
                    <input type="text" placeholder="Engress" name="company">
                </div>
                <div class="form_content">
                    <label for="name">氏名</label>
                    <input type="text" placeholder="田中　太郎" name="name">
                </div>
                <div class="form_content">
                    <label for="company">メールアドレス</label>
                    <input type="email" placeholder="example@example.com" name="email">
                </div>
                <div class="form_content">
                    <label for="phone">電話番号</label>
                    <input type="text" placeholder="01-2345-6789" name="phone">
                </div>
                <div class="form_content form_content_type">
                    <p>お問い合わせの種類を選択してください<span>（資料請求の方は資料請求を選択ください）</span></p>
                    <label>
                        <input type="radio" value="商談のご相談" name="type">商談のご相談
                    </label>
                    <label>
                        <input type="radio" value="サービスに関するお問い合わせ" name="type">サービスに関するお問い合わせ
                    </label>
                    <label>
                        <input type="radio" value="資料請求" name="type">資料請求
                    </label>
                    <label>
                        <input type="radio" value="その他" name="type">その他
                    </label>
                </div>
                <div class="form_content form_textarea">
                    <label for="content">お問い合わせ内容</label>
                    <textarea name="content" cols="10" rows="10" placeholder="入力してください"></textarea>
                </div>
                <div class="form_content form_privacy">
                    <p><a href="#">プライバシーポリシー</a>に同意の上、送信してください</p>
                    <input type="checkbox" name="privacy" value="agree"><label for="privacy">プライバシーポリシーに同意する</label>
                </div>
                <input type="submit" value="送信する" class="submit">
            </form>
        </div>
    </section>

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