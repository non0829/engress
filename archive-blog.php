<?php get_header(); ?>

<main>
    <section class="sec_title_image">
        <img src="<?php echo get_template_directory_uri(); ?>/image/blog.jpg" alt="">
        <h1>ブログ</h1>
    </section>

    <ul class="breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="#"><span itemprop="name">ホーム</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="#"><span itemprop="name">ブログ</span></a>
            <meta itemprop="position" content="2" />
        </li>
    </ul>

    <section class="sec_blog_content">
        <div class="wrapper">
            <h2>新着一覧</h2>
            <div class="blog_container">
                <article class="flex">
                    <div class="blog_image">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/sample01.jpg" alt="">
                        <span>カテゴリ1</span>
                    </div>
                    <div class="flex blog_text">
                        <time>2020-12-01</time>
                        <h3><a href="#">ブログタイトルテキストテキストテキストテキスト</a></h3>
                        <p>記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                </article>
                <article class="flex">
                    <div class="blog_image">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/sample01.jpg" alt="">
                        <span>カテゴリ1</span>
                    </div>
                    <div class="flex blog_text">
                        <time>2020-12-01</time>
                        <h3><a href="#">ブログタイトルテキストテキストテキストテキスト</a></h3>
                        <p>記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                </article>
                <article class="flex">
                    <div class="blog_image">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/sample01.jpg" alt="">
                        <span>カテゴリ1</span>
                    </div>
                    <div class="flex blog_text">
                        <time>2020-12-01</time>
                        <h3><a href="#">ブログタイトルテキストテキストテキストテキスト</a></h3>
                        <p>記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                </article>
            </div>
            <div class="pager"></div>
        </div>
    </section>

</main>

<?php get_footer(); ?>