<aside class="sidebar">
    <div class="connect_article">
        <h2>関連記事</h2>
        <?php // 現在表示されている投稿と同じタームに分類された投稿を取得
        $post_terms = wp_get_object_terms($post->ID, 'category'); // タクソノミーの指定
        if ($post_terms && !is_wp_error($post_terms)) { // 値があるときに作動
            $terms_slug = array(); // 配列のセット
            foreach ($post_terms as $value) { // 配列の作成
                $terms_slug[] = $value->slug; // タームのスラッグを配列に追加
            }
        }
        $args = array(
            'post_type' => 'post', // 投稿タイプを指定
            'posts_per_page' => 3, // 表示件数を指定
            'orderby' =>  'rand', // ランダムに投稿を取得
            'post__not_in' => array($post->ID), // 現在の投稿を除外
            'tax_query' => array( // タクソノミーパラメーターを使用
                array(
                    'taxonomy' => 'category', // タームを取得タクソノミーを指定
                    'field' => 'slug', // スラッグに一致するタームを返す
                    'terms' => $terms_slug // タームの配列を指定
                )
            )
        );
        $the_query = new WP_Query($args);
        ?>
        <div class="connect_article_container">
            <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <article class="flex">
                <div class="blog_image">
                    <?php if (has_post_thumbnail()) : ?>
                    <?php echo get_the_post_thumbnail() ?>
                    <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/image/sample01.jpg" alt="">
                    <?php endif; ?>
                </div>
                <div class="blog_text">
                    <p><a href="<?php the_permalink() ?> "><?php
                                                        if (mb_strlen($post->post_title) > 40) {
                                                            $title = mb_substr($post->post_title, 0, 40);
                                                            echo $title . '...';
                                                        } else {
                                                            echo $post->post_title;
                                                        }
                                                        ?></a></p>
                </div>
            </article>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="category">
        <h2>カテゴリー</h2>
        <?php
        $tax_name = 'category'; //タクソノミーを指定
        $terms = get_terms($tax_name);
        ?>
        <ul>
            <?php foreach ($terms as $term) : ?>
            <li><a href="<?php echo get_term_link($term->slug, $tax_name) ?>"><?php echo $term->name ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</aside>