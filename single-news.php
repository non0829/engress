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
                <h1>お知らせのタイトルテキストテキストテキストテキストテキストテキストテキスト</h1>
                <time>2020-10-01</time>
                <div class="section1">
                    <h2>見出し1</h2>
                    <p>本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <div class="section2">
                    <h3>見出し2</h3>
                    <p>本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <div class="quote flex">
                    <span>“</span>
                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <figure>
                    <img src="./image/sample01.jpg" alt="">
                </figure>
                <ul>
                    <li><span>テキストテキストテキストテキストテキストテキストテキストテキスト</span></li>
                    <li><span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</span></li>
                    <li><span>テキストテキストテキストテキストテキストテキストテキストテキスト</span></li>
                </ul>
                <a href="#">リンクリンクリンクリンク</a>
            </div>
        </article>

    </main>

    <?php get_footer(); ?>