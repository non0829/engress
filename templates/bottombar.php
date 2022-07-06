<aside class="bottombar">
    <h2>おすすめの記事</h2>
    <?php
    $args   = array(
        'posts_per_page' => 3, // 表示する件数
        'orderby'        => 'date', // 日付でソート
        'order'          => 'DESC', // DESCで最新から表示、ASCで最古から表示
        'tag'            => 'pickup' // 表示したいタグのスラッグを指定
    );
    $query = new WP_Query($args);
    while ($query->have_posts()) :
        $query->the_post();
    ?>
    <article class="flex">
        <div class="blog_image">
            <?php if (has_post_thumbnail()) : ?>
            <?php echo get_the_post_thumbnail() ?>
            <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/image/sample01.jpg" alt="">
            <?php endif; ?>
            <?php
                $category = get_the_category();
                $cat = $category[0]
                ?>
            <span><?php echo $cat->name ?></span>
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
        </div>
    </article>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>
</aside>