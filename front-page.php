<?php get_header(); ?>

    <?php while(have_posts()): the_post(); ?>


    <div class="container-fluid imagenes-principales">
        <div class="row imagen-superior imagen">
            <div class="col-md-6 bg-primary">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-sm-8 col-md-6">
                        <div class="contenido text-center text-light py-3">
                           <?php echo get_post_meta( get_the_ID(), 'edc_homepage_texto_superior_1', true); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 imagen-fondo" style="background-image:url(<?php echo get_post_meta( get_the_ID(), 'edc_homepage_imagen_superior_1', true); ?>);"></div>
            
            
        </div><!--.row-->
        <div class="row imagen-inferior imagen">
            <div class="col-md-6 bg-secondary">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-sm-8 col-md-6">
                        <div class="contenido text-center py-3">
                            <?php echo get_post_meta( get_the_ID(), 'edc_homepage_texto_superior_2', true); ?>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 imagen-fondo" style="background-image:url(<?php echo get_post_meta( get_the_ID(), 'edc_homepage_imagen_superior_2', true); ?>);"></div> 
        </div><!--.row-->
    </div><!--.container-->

    <div class="container">
        <section class="nosotros mt-5">
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
    </div>


    <section class="clases mt-5 py-5">
        <h1 class="separador text-center mb-3">Próximas Clases</h1>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="img/clase1.jpg" alt="card-img-top">

                        <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                            <p class="m-0">23 / Eenero / 2024 17:00 hrs</p>

                            <span class="badge badge-secondary p-2">$300</span>
                        </div><!--.card-->
                        <div class="card-body">
                            <h3 class="card-title">Comida Italiana para principiantes</h3>
                            <p class="card-subtitle mb-2">
                                Aprende las bases de la comida italiana con este curso.
                            </p>
                            <p class="card-text">
                                Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat mattis. Quisque egestas.
                            </p>
                            <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más Información</a>
                        </div>
                    </div><!--.card-->
                </div><!--.col-md-6-->

                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="img/clase2.jpg" alt="card-img-top">

                        <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                            <p class="m-0">23 / Eenero / 2024 17:00 hrs</p>

                            <span class="badge badge-secondary p-2">$300</span>
                        </div><!--.card-->
                        <div class="card-body">
                            <h3 class="card-title">Planeación de Menús para bodas</h3>
                            <p class="card-subtitle mb-2">
                                Añade la planeación de menús para bodas a tus habilidades.
                            </p>
                            <p class="card-text">
                                Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat mattis. Quisque egestas.
                            </p>
                            <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más Información</a>
                        </div>
                    </div><!--.card-->
                </div><!--.col-md-6-->

                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="img/clase3.jpg" alt="card-img-top">

                        <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                            <p class="m-0">23 / Eenero / 2024 17:00 hrs</p>

                            <span class="badge badge-secondary p-2">$300</span>
                        </div><!--.card-->
                        <div class="card-body">
                            <h3 class="card-title">Preparación de Pasteles</h3>
                            <p class="card-subtitle mb-2">
                                Aprende a preparar deliciosos postres con este curso.
                            </p>
                            <p class="card-text">
                                Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat mattis. Quisque egestas.
                            </p>
                            <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más Información</a>
                        </div>
                    </div><!--.card-->
                </div><!--.col-md-6-->

                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="img/clase4.jpg" alt="card-img-top">

                        <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                            <p class="m-0">23 / Eenero / 2024 17:00 hrs</p>

                            <span class="badge badge-secondary p-2">$300</span>
                        </div><!--.card-->
                        <div class="card-body">
                            <h3 class="card-title">Comida Mexicana</h3>
                            <p class="card-subtitle mb-2">
                                Prepara la mejor comida mexicana con este curso
                            </p>
                            <p class="card-text">
                                Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat mattis. Quisque egestas.
                            </p>
                            <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más Información</a>
                        </div>
                    </div><!--.card-->
                </div><!--.col-md-6-->

                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="img/clase5.jpg" alt="card-img-top">

                        <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                            <p class="m-0">23 / Eenero / 2024 17:00 hrs</p>

                            <span class="badge badge-secondary p-2">$300</span>
                        </div><!--.card-->
                        <div class="card-body">
                            <h3 class="card-title">CComida de Marruecos</h3>
                            <p class="card-subtitle mb-2">
                                Aprende deliciosas recetas de la comida marroquí.
                            </p>
                            <p class="card-text">
                                Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat mattis. Quisque egestas.
                            </p>
                            <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más Información</a>
                        </div>
                    </div><!--.card-->
                </div><!--.col-md-6-->

                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="img/clase6.jpg" alt="card-img-top">

                        <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                            <p class="m-0">23 / Eenero / 2024 17:00 hrs</p>

                            <span class="badge badge-secondary p-2">$300</span>
                        </div><!--.card-->
                        <div class="card-body">
                            <h3 class="card-title">Prepara 10 tipos de ensaladas</h3>
                            <p class="card-subtitle mb-2">
                                En este curso aprenderás hasta 10 tipos de ensaladas.
                            </p>
                            <p class="card-text">
                                Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat mattis. Quisque egestas.
                            </p>
                            <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más Información</a>
                        </div>
                    </div><!--.card-->
                </div><!--.col-md-6-->
            </div>
        </div>
    </section>


    <div class="licenciatura" style="background-image:url(<?php echo get_post_meta( get_the_ID(), 'edc_homepage_imagen_licenciatura', true); ?>);">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="comtenido text-light text-center">
                        <p><?php echo get_post_meta( get_the_ID(), 'edc_homepage_texto_licenciatura', true); ?></p>
                        <?php $contacto = get_page_by_title('Contacto');?>
                        <a href="<?php echo get_permalink($contacto->ID) ?>" class="btn btn-primary text-uppercase">Mas Informacion</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>

<?php get_footer(); ?>