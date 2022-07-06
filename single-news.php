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
            <a itemprop="item" href="#"><span itemprop="name">お知らせのタイトルテキストテキストテキストテキストテキストテキストテキスト</span></a>
            <meta itemprop="position" content="3" />
        </li>
    </ul>

    <article class="single_news">
        <div class="wrapper">
            <h1><?php the_title() ?></h1>
            <time><?php echo get_the_date('Y-m-d'); ?></time>
            <?php the_content() ?>
        </div>
    </article>

</main>

<?php get_footer(); ?>