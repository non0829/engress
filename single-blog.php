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
                    <span class="tag">カテゴリー</span>
                    <h1>ブログテキストテキストテキストテキストテキストテキスト</h1>
                    <div class="flex">
                        <div class="sns_btn">
                            ここにボタン入るよ
                        </div>
                        <time>2020-01-01</time>
                    </div>
                    <figure>
                        <img src="./image/sample01.jpg" alt="">
                    </figure>
                    <div class="section2">
                        <h2>見出しh2</h2>
                        <p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                    <div class="section3">
                        <h3>見出しh3</h3>
                        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                    <div class="quote flex">
                        <span>“</span>
                        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
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