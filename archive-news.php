<?php get_header(); ?>

<main>
    <section class="sec_title_image">
        <img src="<?php echo get_template_directory_uri(); ?>/image/blog.jpg" alt="">
        <h1>お知らせ</h1>
    </section>

    <ul class="breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="#"><span itemprop="name">ホーム</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="#"><span itemprop="name">お知らせ</span></a>
            <meta itemprop="position" content="2" />
        </li>
    </ul>

    <section class="sec_news_content">
        <div class="wrapper">
            <h2>お知らせ一覧</h2>
            <ul class="news_container">
                <li>
                    <div class="flex">
                        <p>2020-12-30</p>
                        <p><a href="#">お知らせのタイトルテキストテキストテキストテキストテキストテキストテキスト</a></p>
                    </div>
                </li>
                <li>
                    <div class="flex">
                        <p>2020-12-30</p>
                        <p><a href="#">お知らせのタイトルテキストテキストテキストテキストテキストテキストテキスト</a></p>
                    </div>
                </li>
                <li>
                    <div class="flex">
                        <p>2020-12-30</p>
                        <p><a href="#">お知らせのタイトルテキストテキストテキストテキストテキストテキストテキスト</a></p>
                    </div>
                </li>
            </ul>
            <div class="pager"></div>
        </div>
    </section>

</main>

<?php get_footer(); ?>