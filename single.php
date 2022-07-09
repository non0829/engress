<?php get_header(); ?>

<main>
    <?php get_template_part( 'templates/breadcrumbs' ); ?>

    <div class="single_blog">
        <div class="wrapper flex">
            <div class="single_blog_left">
                <article class="blog_content">
                    <?php
                    $category = get_the_category();
                    $cat = $category[0]
                    ?>
                    <span class="tag"><?php echo $cat->name ?></span>
                    <h1><?php the_title() ?>
                    </h1>
                    <div class="flex">
                        <div class="sns_btn">
                            <?php
                            if (function_exists('wp_social_bookmarking_light_output_e')) {
                                wp_social_bookmarking_light_output_e();
                            }
                            ?>
                        </div>
                        <time><?php echo get_the_date('Y-m-d'); ?></time>
                    </div>
                    <?php the_content() ?>
                </article>
                <?php get_template_part( 'templates/bottombar' ); ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>