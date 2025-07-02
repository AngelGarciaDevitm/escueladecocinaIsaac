<?php 
/*
* Template Name: pagina con iconos 
*/
get_header(); ?>

    <?php while(have_posts()): the_post();

        get_template_part('template-parts/contenido', 'paginas'); ?>

        <section class="nosotros mt-5 container">
            <h2 class="text-center mb-5 separador">¿Porqué estudiar con nosotros?</h2>

            <div class="row">
                <div class="col-md-4 text-center informacion">
                    <img src="img/icono_chef.png" alt="icono chef" class="img-fluid mb-3">
                    <h3>
                        Chef's Especialitas
                    </h3>
                    <p>Los mejores chef's que han trabajado en los mejores restaurantes de Europa.</p>
                </div><!--col-md-4-->
                <div class="col-md-4 text-center informacion">
                    <img src="img/icono_vino.png" alt="icono vino" class="img-fluid mb-3">
                    <h3>
                        Incluye todo sobre bebidas
                    </h3>
                    <p>Además de la cocina, incluimos en el programa todo lo relacionado a bebidas.</p>
                </div><!--col-md-4-->
                <div class="col-md-4 text-center informacion">
                    <img src="img/icono_menu.png" alt="icono menu" class="img-fluid mb-3">
                    <h3>
                        Siempre Actualizados
                    </h3>
                    <p>El programa se actualiza constantemente con nuevos platillos y técnicas</p>
                </div><!--col-md-4-->
            </div>
        </section>
    </main>
    
    <?php endwhile; ?>

<?php get_footer();?>