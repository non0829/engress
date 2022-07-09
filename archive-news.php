<?php get_header(); ?>

<main>
    <section class="sec_title_image">
        <img src="<?php echo get_template_directory_uri(); ?>/image/blog.jpg" alt="">
        <h1>お知らせ</h1>
    </section>
    <?php get_template_part( 'templates/breadcrumbs' ); ?>

    <section class="sec_news_content">
        <div class="wrapper">
            <h2>お知らせ一覧</h2>
            <ul class="news_container">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li>
                    <div class="flex">
                        <p><?php echo get_the_date('Y-m-d'); ?></p>
                        <p><a href="<?php the_permalink() ?> "><?php
                                                                        if (mb_strlen($post->post_title) > 40) {
                                                                            $title = mb_substr($post->post_title, 0, 40);
                                                                            echo $title . '...';
                                                                        } else {
                                                                            echo $post->post_title;
                                                                        }
                                                                        ?></a></p>
                    </div>
                </li>
                <?php endwhile;
                endif; ?>
            </ul>
            <div class="pager">
                <?php the_posts_pagination(
                    array(
                        'mid_size'      => 1, // 現在ページの左右に表示するページ番号の数
                        'prev_next'     => false, // 「前へ」「次へ」のリンクを表示する場合はtrue
                        'type'          => 'list', // 戻り値の指定 (plain/list)
                    )
                ); ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>