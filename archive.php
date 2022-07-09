<?php get_header(); ?>

<main>
    <section class="sec_title_image">
        <img src="<?php echo get_template_directory_uri(); ?>/image/blog.jpg" alt="">
        <h1>ブログ</h1>
    </section>
    <?php get_template_part( 'templates/breadcrumbs' ); ?>

    <section class="sec_blog_content">
        <div class="wrapper">
            <?php if (is_category()) : ?>
            <?php
                $category_query = get_queried_object();
                $category_name = $category_query->name
            ?>
            <h2><?php echo $category_name ?>一覧</h2>
            <?php else : ?>
            <h2>新着一覧</h2>
            <?php endif ?>
            <div class="blog_container">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="flex">
                    <div class="blog_image">
                        <?php if (has_post_thumbnail()) : ?>
                        <?php echo get_the_post_thumbnail() ?>
                        <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/image/sample01.jpg" alt="">
                        <?php endif; ?>
                        <?php if (is_category()) : ?>
                        <span><?php echo $category_name ?></span>
                        <?php else : ?>
                        <?php
                                    $category = get_the_category();
                                    $cat = $category[0]
                                    ?>
                        <span><?php echo $cat->name ?></span>
                        <?php endif ?>
                    </div>
                    <div class="blog_text">
                        <time><?php echo get_the_date('Y-m-d'); ?></time>
                        <h3><a href="<?php the_permalink() ?> "><?php
                                                                        if (mb_strlen($post->post_title) > 40) {
                                                                            $title = mb_substr($post->post_title, 0, 40);
                                                                            echo $title . '...';
                                                                        } else {
                                                                            echo $post->post_title;
                                                                        }
                                                                        ?></a></h3>
                        <?php if (has_excerpt() || !empty($post->post_content)) : ?>
                        <p><?php the_excerpt() ?></p>
                        <?php endif ?>
                    </div>
                </article>
                <?php endwhile;
                endif; ?>
            </div>
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