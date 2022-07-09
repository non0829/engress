<?php get_header(); ?>

<main>
    <section class="sec_title_image">
        <img src="<?php echo get_template_directory_uri(); ?>/image/plan.jpg" alt="">
        <h1>コース・料金</h1>
    </section>
    <?php get_template_part( 'templates/breadcrumbs' ); ?>

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
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li>
                    <?php
                            $recommend = get_field('おすすめ');
                            if ($recommend) : ?>
                    <div class="price_plan price_plan_feature">
                        <?php else : ?>
                        <div class="price_plan">
                            <?php endif; ?>
                            <h3>
                                <?php
                                        $title = get_the_title($ID);
                                        $title = str_replace(" ", "<br>", $title);
                                        echo $title;
                                        ?>
                            </h3>
                            <div class="price_text">
                                <h3>
                                    <?php $myk_field_name = get_field('月額(税抜価格)');
                                            if ($myk_field_name) { ?>
                                    <?php echo number_format($myk_field_name); ?>
                                    <?php } ?>
                                    円~</h3>
                                <p>*月額（税抜価格）</p>
                                <?php
                                        $hobbies = get_field('詳細');
                                        if ($hobbies) :
                                        ?>
                                <ul class="price_text_check">
                                    <?php foreach ($hobbies as $hobby) : ?>
                                    <li><?php echo $hobby; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>

                            </div>
                        </div>
                </li>
                <?php endwhile;
                endif; ?>

            </ul>
        </div>
    </section>

</main>

<?php get_footer(); ?>