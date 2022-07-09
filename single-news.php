<?php get_header(); ?>

<main>
    <?php get_template_part( 'templates/breadcrumbs' ); ?>

    <article class="single_news">
        <div class="wrapper">
            <h1><?php the_title() ?></h1>
            <time><?php echo get_the_date('Y-m-d'); ?></time>
            <?php the_content() ?>
        </div>
    </article>

</main>

<?php get_footer(); ?>