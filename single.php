<?php get_header(); ?>

    <?php while(have_posts()): the_post();?>


        <?php get_template_part('template-parts/contenido', 'posts'); ?>

        <div class="comentarios container">
            <?php
                if( comments_open() ):
                    comments_template();
                else:
                    echo "<p class='text-center comentarios-cerrados alert alert-danger'>Los comentarios estan cerrados</p>";
                endif;

            ?>
        </div>
    
    <?php endwhile; ?>

<?php get_footer();?>