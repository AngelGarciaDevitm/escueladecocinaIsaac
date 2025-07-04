<?php get_header(); ?>

<div class="container mb-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <blockquote class="subtitulo text-center pl-3">
                    Recetas, Recomendaciones y Tips para Chef's Profesionales o Novatos
                </blockquote>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <main class="col-lg-9 col-md-8">
                <h1 class="separador text-center mb-3">Nuestro Blog</h1>
                
                <?php while(have_posts()): the_post(); ?>
                
                <div class="row entrada mb-4">
                    <div class="col-md-4">
                        <?php the_post_thumbnail('mediano', array('class' => 'img-fluid') ); ?>
                    </div>
                    <div class="col-md-8">
                        <div class="contenido-entrada pt-4 pt-md-0">
                            <a href="entrada.html">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <div class="meta pt-2 pt-md-0">
                                <p class="m-0">
                                    Escrito el: <span>20/10/24</span> por <a href="#">Admin</a>
                                </p>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae enim quibusdam, hic saepe ullam eveniet facilis eligendi earum beatae dolore et omnis qui quos blanditiis dolor vitae inventore ut voluptates?</p>
                            <a href="entrada.html" class="btn btn-primary text-light">Ver Entrada</a>
                        </div><!--contenido entrada-->
                    </div>
                </div><!--.row-->
                <?php endwhile; ?>
            </main>

            <aside class="col-lg-3 col-md-4 bg-primary p-4">
                <div class="proximos-cursos">
                    <h2 class="text-center text-light separador inverso">Próximos Cursos</h2>

                    <div class="card mb-4">
                        <img src="img/clase1.jpg" alt="imagen de curso" class="img-fluid">
                        <div class="card-body">
                            <h3 class="card-title">Comida Italiana para principiantes
                            </h3>
                            <p class="card-subtitle m-0">
                                Aprende las bases de la comida italiana con este curso
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="#">Más informacion</a>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <img src="img/clase1.jpg" alt="imagen de curso" class="img-fluid">
                        <div class="card-body">
                            <h3 class="card-title">Comida Italiana para principiantes
                            </h3>
                            <p class="card-subtitle m-0">
                                Aprende las bases de la comida italiana con este curso
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="#">Más informacion</a>
                        </div>
                    </div>
                </div><!--proximos cursos-->

                <div class="ultimas-entradas mt-5">
                    <h2 class="text-center text-light">Últimas entradas</h2>

                    <ul class="list-unstyled mt-4">
                        <li>
                            <a href="#">Titulo Entrada Texto</a>
                        </li>
                        <li>
                            <a href="#">Titulo Entrada Texto</a>
                        </li> 
                        <li>
                            <a href="#">Titulo Entrada Texto</a>
                        </li>
                         <li>
                            <a href="#">Titulo Entrada Texto</a>
                        </li>
                         <li>
                            <a href="#">Titulo Entrada Texto</a>
                        </li>
                         <li>
                            <a href="#">Titulo Entrada Texto</a>
                        </li> 
                    </ul>
                </div>
            </aside>
        </div>
    </div>

<?php get_footer();?>