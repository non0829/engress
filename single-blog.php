<?php get_header(); ?>

<main>
    <ul class="breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="#"><span itemprop="name">ホーム</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="#"><span itemprop="name">お知らせ</span></a>
            <meta itemprop="position" content="2" />
        </li>
        <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="#"><span itemprop="name">カテゴリー</span></a>
            <meta itemprop="position" content="3" />
        </li>
        <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="#"><span itemprop="name">ブログテキストテキストテキスト</span></a>
            <meta itemprop="position" content="4" />
        </li>
    </ul>

    <div class="single_blog">
        <div class="wrapper flex">
            <div class="single_blog_left">
                <article class="blog_content">
                    <?php
                    $taxonomy = 'blog_category'; //カスタムタクソノミースラッグ
                    $taxonomy_terms_cat = wp_get_object_terms($post->ID, $taxonomy);
                    $taxonomy_terms_cat_name = $taxonomy_terms_cat[0]->name; //ターム名
                    ?>
                    <span class="tag"><?php echo $taxonomy_terms_cat_name ?></span>
                    <h1><?php the_title() ?>
                    </h1>
                    <div class="flex">
                        <div class="sns_btn">
                            <?php
                            if( function_exists('wp_social_bookmarking_light_output_e') ) {
                                wp_social_bookmarking_light_output_e();
                            }
                            ?>
                        </div>
                        <time><?php echo get_the_date('Y-m-d'); ?></time>
                        <?php the_content() ?>
                </article>
                <aside class="bottombar">
                    <h2>おすすめの記事</h2>
                    <article class="flex">
                        <div class="blog_image">
                            <img src="./image/sample01.jpg" alt="">
                            <span>カテゴリ1</span>
                        </div>
                        <div class="blog_text">
                            <time>2020-12-01</time>
                            <h3><a href="#">ブログタイトルテキストテキストテキストテキスト</a></h3>
                        </div>
                    </article>
                    <article class="flex">
                        <div class="blog_image">
                            <img src="./image/sample01.jpg" alt="">
                            <span>カテゴリ1</span>
                        </div>
                        <div class="blog_text">
                            <time>2020-12-01</time>
                            <h3><a href="#">ブログタイトルテキストテキストテキストテキスト</a></h3>
                        </div>
                    </article>
                    <article class="flex">
                        <div class="blog_image">
                            <img src="./image/sample01.jpg" alt="">
                            <span>カテゴリ1</span>
                        </div>
                        <div class="blog_text">
                            <time>2020-12-01</time>
                            <h3><a href="#">ブログタイトルテキストテキストテキストテキスト</a></h3>
                        </div>
                    </article>
                </aside>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>