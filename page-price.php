<?php get_header(); ?>

<main>
    <section class="sec_title_image">
        <img src="<?php echo get_template_directory_uri(); ?>/image/plan.jpg" alt="">
        <h1>コース・料金</h1>
    </section>

    <ul class="breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="#"><span itemprop="name">ホーム</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="#"><span itemprop="name">料金体系</span></a>
            <meta itemprop="position" content="2" />
        </li>
    </ul>

    <section class="sec_price_system">
        <div class="wrapper">
            <h2>料金体系</h2>
            <div class="flex">
                <p>入会金 39,800円</p>
                <span></span>
                <p>月額費用</p>
            </div>
            <p class="price_system_text">
                Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
        </div>
    </section>

    <section class="sec_price_table">
        <div class="wrapper">
            <h2>料金表</h2>
            <ul class="flex">
                <li>
                    <div class="price_plan">
                        <h3>基礎プラン</h3>
                        <div class="price_text">
                            <h3>59,000円~</h3>
                            <p>*月額（税抜価格）</p>
                            <ul class="price_text_check">
                                <li>カリキュラム作成</li>
                                <li>TOEFL学習サポート</li>
                                <li>週一回のビデオMTG</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="price_plan">
                        <h3>演習プラン</h3>
                        <div class="price_text">
                            <h3>75,000円~</h3>
                            <p>*月額（税抜価格）</p>
                            <ul class="price_text_check">
                                <li>カリキュラム作成</li>
                                <li>TOEFL学習サポート</li>
                                <li>週一回のビデオMTG</li>
                                <li>月二回の模試（解説付き）</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="price_plan price_plan_feature">
                        <h3>おすすめ<br>志望校対策プラン</h3>
                        <div class="price_text">
                            <h3>95,000円~</h3>
                            <p>*月額（税抜価格）</p>
                            <ul class="price_text_check">
                                <li>カリキュラム作成</li>
                                <li>TOEFL学習サポート</li>
                                <li>週一回のビデオMTG</li>
                                <li>月二回の模試（解説付き）</li>
                                <li>週一の英語面接対策</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="price_plan">
                        <h3>フレックスプラン</h3>
                        <div class="price_text">
                            <h3>60,000円~</h3>
                            <p>*月額（税抜価格）</p>
                            <ul class="price_text_check">
                                <li>＊別途ご相談ください</li>
                            </ul>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </section>

</main>

<?php get_footer(); ?>