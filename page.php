<?php get_header(); ?>

    <?php while(have_posts()): the_post(); ?>
        <div class="container">
            <div class="row">
                <div class="col-12 imagen-destacada nosotros-bg">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
        </div>

        <main class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 py-3 px-5 contenido-nosotros bg-light">
                    <h1 class="text-center my-5 separador"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            </div> <!--.row-->
        </main>
    <?php endwhile; ?>

<?php get_footer();?>