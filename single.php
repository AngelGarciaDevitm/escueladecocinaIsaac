<?php get_header(); ?>

    <?php while(have_posts()): the_post();?>


        <?php get_template_part('template-parts/contenido', 'posts');
    
    endwhile; ?>

<?php get_footer();?>