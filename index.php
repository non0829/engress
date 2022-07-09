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
                        <h3>日本人指導歴10年以上の<br>経験豊富な講師陣</h3>
                        <p>Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。
                        </p>
                    </div>
                    <div class="strong_article_right">
                        <div class="strong_article_right_inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/feature02.jpg" alt="">
                        </div>
                    </div>
                </article>
                <article class="flex">
                    <div class="strong_article_left">
                        <span>特長 3</span>
                        <h3>平均3ヶ月でTOEFL<br>iBT20点アップ</h3>
                        <p>Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。
                        </p>
                    </div>
                    <div class="strong_article_right">
                        <div class="strong_article_right_inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/feature03.jpg" alt="">
                        </div>
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
                <?php
                    $args = array(
                        'post_type' => 'success', // 投稿タイプを指定
                        'posts_per_page' => 3, // 表示件数を指定
                    );
                    $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <article>
                    <p><?php the_title() ?></p>
                    <div>
                        <div class="success_image">
                            <img src="<?php the_field('顔写真'); ?>" alt="">
                        </div>
                        <div class="flex success_flex">
                            <p><?php the_field('属性'); ?></p>
                            <p><?php the_field('名前'); ?></p>
                            <p><?php the_field('成績詳細'); ?></p>
                        </div>
                    </div>
                </article>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
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
                <div class="accordion-title jsAccordionTitle">
                    <h4>Engressはサラリーマンでも学習を続けられるでしょうか？</h4>
                </div>
                <div class="accordion-content">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</div>
                <div class="accordion-title jsAccordionTitle">
                    <h4>教材はオリジナルのものを使用しているのでしょうか？</h4>
                </div>
                <div class="accordion-content">教材はEngressオリジナルのものを使用しています。</div>
                <div class="accordion-title jsAccordionTitle">
                    <h4>講師に日本人はいますか？</h4>
                </div>
                <div class="accordion-content">日本人講師も在籍しています。</div>
                <div class="accordion-title jsAccordionTitle last-accordion-title">
                    <h4>TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</h4>
                </div>
                <div class="accordion-content">TOEFL対策専門のため、それ以外のサポートは行っておりません。</div>
            </div><!-- accordion__container -->
        </div>
    </section>

    <div class="wrapper wrapper_blog_news">
        <div class="flex">
            <section class="sec_blog">
                <h3>ブログ</h3>
                <?php
                $args = array(
                    'post_type' => 'post', // 投稿タイプを指定
                    'posts_per_page' => 3, // 表示件数を指定
                    'orderby' =>  'rand', // ランダムに投稿を取得
                );
                $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <article class="flex">
                    <div class="blog_image">
                        <?php if (has_post_thumbnail()) : ?>
                        <?php echo get_the_post_thumbnail() ?>
                        <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/image/sample01.jpg" alt="">
                        <?php endif; ?>
                        <?php
                        $category = get_the_category();
                        $cat = $category[0]
                        ?>
                        <span><?php echo $cat->name ?></span>
                    </div>
                    <div class="flex blog_text">
                        <h4><a href="<?php the_permalink() ?> "><?php
                                                        if (mb_strlen($post->post_title) > 40) {
                                                            $title = mb_substr($post->post_title, 0, 40);
                                                            echo $title . '...';
                                                        } else {
                                                            echo $post->post_title;
                                                        }
                                                        ?></a></h4>
                        <time><?php echo get_the_date('Y-m-d'); ?></time>
                    </div>
                </article>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </section>
            <section class="sec_news">
                <h3>お知らせ</h3>
                <?php
                $args = array(
                    'post_type' => 'news', // 投稿タイプを指定
                    'posts_per_page' => 3, // 表示件数を指定
                );
                $the_query = new WP_Query($args);
                ?>
                <ul>
                    <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li>
                        <time><?php echo get_the_date('Y-m-d'); ?></time>
                        <h4><a href="<?php the_permalink() ?> "><?php
                                                        if (mb_strlen($post->post_title) > 40) {
                                                            $title = mb_substr($post->post_title, 0, 40);
                                                            echo $title . '...';
                                                        } else {
                                                            echo $post->post_title;
                                                        }
                                                        ?></a></h4>
                    </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </ul>
            </section>
        </div>
    </div>
</main>

<?php get_footer(); ?>