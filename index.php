<?php get_header(); ?>

<main>
    <section class="sec_image">
        <img src="<?php echo get_template_directory_uri(); ?>/image/fv.jpg" alt="">
        <div>
            <h2>まずは無料で資料請求から</h2>
            <h3>日本人へのTOEFL指導歴豊かな講師陣の<br>コーチング型TOEFLスクール</h3>
            <button class="button"><a href="#">資料請求</a></button>
            <p><a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a></p>
        </div>
    </section>

    <section class="sec_about">
        <div class="wrapper">
            <h2>TOEFL学習でこんな悩みありませんか？</h2>
            <ul class="flex">
                <li>勉強の習慣が<br>身についていない</li>
                <li>勉強しているはず<br>なのに点数が伸びない</li>
                <li>正しい勉強方法が<br>わからない</li>
            </ul>
            <div class="sec_about_box">
                <div class="sec_about_box_inner">
                    <h2>Engressは<br><span>TOEFLに特化したスクール</span>です</h2>
                    <p>完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec_strong">
        <div class="wrapper">
            <h2>TOEFL対策に特化したEngress3つの強み</h2>
            <div class="strong_article_container">
                <article class="flex">
                    <div class="strong_article_left">
                        <span>特長 1</span>
                        <h3>TOEFLに最適化された<br>無駄のないカリキュラム</h3>
                        <p>TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
                        </p>
                    </div>
                    <div class="strong_article_right">
                        <div class="strong_article_right_inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/feature01.jpg" alt="">
                        </div>
                    </div>
                </article>
                <article class="flex">
                    <div class="strong_article_left">
                        <span>特長 2</span>
                        <h3>TOEFLに最適化された<br>無駄のないカリキュラム</h3>
                        <p>TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
                        </p>
                    </div>
                    <div class="strong_article_right">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/feature02.jpg" alt="">
                    </div>
                </article>
                <article class="flex">
                    <div class="strong_article_left">
                        <span>特長 3</span>
                        <h3>TOEFLに最適化された<br>無駄のないカリキュラム</h3>
                        <p>TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
                        </p>
                    </div>
                    <div class="strong_article_right">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/feature03.jpg" alt="">
                    </div>
                </article>
                <div class="strong_price">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/price.jpg" alt="">
                    <div>
                        <h3>Engressの料金プランはこちら</h3>
                        <button><a href="<?php echo esc_url(home_url('price')); ?>">料金を見てみる</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec_success">
        <div class="wrapper">
            <h2>TOEFL成功事例</h2>
            <div class="flex">
                <article>
                    <p>TOEFL iBT 100点を突破してコロンビア大学大学院に進学できました！</p>
                    <div class="success_image">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/model01.jpg" alt="">
                    </div>
                    <div class="flex success_flex">
                        <p>会社員</p>
                        <p>T.Fujiyamaさん</p>
                        <p>3ヶ月でTOEFL80→108点</p>
                    </div>
                </article>
                <article>
                    <p>半年でTOEFL 40点→100点を達成！コロンビア大学大学院に合格</p>
                    <div class="success_image">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/model02.jpg" alt="">
                    </div>
                    <div class="flex success_flex">
                        <p>大学生</p>
                        <p>Y.Takiyamaさん</p>
                        <p>6ヶ月でTOEFL40→100点</p>
                    </div>
                </article>
                <article>
                    <p>早稲田大学 国際教養学部AO入試合格！TOEFL iBT 109点</p>
                    <div class="success_image">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/model03.jpg" alt="">
                    </div>
                    <div class="flex success_flex">
                        <p>高校生</p>
                        <p>M.Yamadaさん</p>
                        <p>5ヶ月でTOEFL68→109点</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="sec_flow">
        <div class="wrapper">
            <h2>ご利用の流れ</h2>
            <dl>
                <div class="flex">
                    <dt>01</dt>
                    <dd>お問い合わせ</dd>
                    <dd>まずはフォームまたはお電話からお申し込みください。</dd>
                </div>
                <div class="flex">
                    <dt>02</dt>
                    <dd>ヒアリング</dd>
                    <dd>現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</dd>
                </div>
                <div class="flex">
                    <dt>03</dt>
                    <dd>学習プランのご提供</dd>
                    <dd>目標達成のために最適な学習プランをご提案致します。</dd>
                </div>
                <div class="flex">
                    <dt>04</dt>
                    <dd>ご入会</dd>
                    <dd>お申込み完了後、レッスンがスタートします。</dd>
                </div>
            </dl>
        </div>
    </section>

    <section class="sec_question">
        <div class="wrapper">
            <h2>よくある質問</h2>
            <div class="accordion-container">
                <h4 class="accordion-title jsAccordionTitle">Engressはサラリーマンでも学習を続けられるでしょうか？</h4>
                <div class="accordion-content">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</div>
                <h4 class="accordion-title jsAccordionTitle">教材はオリジナルのものを使用しているのでしょうか？</h4>
                <div class="accordion-content">教材はEngressオリジナルのものを使用しています。</div>
                <h4 class="accordion-title jsAccordionTitle">講師に日本人はいますか？</h4>
                <div class="accordion-content">日本人講師も在籍しています。</div>
                <h4 class="accordion-title jsAccordionTitle">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</h4>
                <div class="accordion-content">TOEFL対策専門のため、それ以外のサポートは行っておりません。</div>
            </div><!-- accordion__container -->
        </div>
    </section>

    <div class="wrapper wrapper_blog_news">
        <div class="flex">
            <section class="sec_blog">
                <h3>ブログ</h3>
                <article class="flex">
                    <div class="blog_image">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/sample01.jpg" alt="">
                        <span>カテゴリー</span>
                    </div>
                    <div class="flex blog_text">
                        <h4><a href="#">Engress説明会in大阪の模様をお伝えします</a></h4>
                        <time>2020-12-27</time>
                    </div>
                </article>
                <article class="flex">
                    <div class="blog_image">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/sample02.jpg" alt="">
                        <span>カテゴリー</span>
                    </div>
                    <div class="flex blog_text">
                        <h4><a href="#">Engressもくもく会でみんなでTOEFL学習をしませんか？</a></h4>
                        <time>2020-12-01</time>
                    </div>
                </article>
                <article class="flex">
                    <div class="blog_image">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/sample03.jpg" alt="">
                        <span>カテゴリー</span>
                    </div>
                    <div class="flex blog_text">
                        <h4><a href="#">TOEFL学習にはコーチング学習が最強である話</a></h4>
                        <time>2020-11-20</time>
                    </div>
                </article>
            </section>
            <section class="sec_news">
                <h3>お知らせ</h3>
                <ul>
                    <li>
                        <time>2020-12-01</time>
                        <h4><a href="#">2021年のスケジュールについて</a></h4>
                    </li>
                    <li>
                        <time>2020-11-02</time>
                        <h4><a href="#">11月休校日のお知らせ</a></h4>
                    </li>
                    <li>
                        <time>2020-10-01</time>
                        <h4><a href="#">10月休校日のお知らせ</a></h4>
                    </li>
                </ul>
            </section>
        </div>
    </div>
</main>

<?php get_footer(); ?>