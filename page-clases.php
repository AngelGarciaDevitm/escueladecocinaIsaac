<?php
/**
 * Template Name: Listado de clases
 */
get_header(); ?>

<div class="container mb-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <blockquote class="subtitulo text-center pl-3">
                    <?php while(have_posts()): the_post();
                            the_content();

                            $titulo = get_the_title();

                        endwhile;
                    ?>
                </blockquote>
            </div>
        </div>
    </div>

    <section class="clases mt-5 py-5">
        <h1 class="separador text-center mb-3"><?php echo $titulo; ?></h1>

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


<?php get_footer(); ?>