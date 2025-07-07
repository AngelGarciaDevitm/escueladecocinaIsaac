<?php get_header(); ?>

    <?php while(have_posts()): the_post();?>


        <?php get_template_part('template-parts/contenido', 'posts'); ?>

       <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <h2 class="separador text-center my-3">¿Que Incluye?</h2>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-secondary text-light">Todos los Ingredientes</li>
                    <li class="list-group-item list-group-item-secondary text-light">Mesas de Trabajo Individuales</li>
                    <li class="list-group-item list-group-item-secondary text-light">Recetario</li>
                    <li class="list-group-item list-group-item-secondary text-light">Reconocimiento por Completar el curso</li>
                </ul>

                <h2 class="separador text-center my-3 mt-5 ">Información Extra</h2>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-primary text-light">20 Cupos Disponibles</li>
                    <li class="list-group-item list-group-item-primary text-light">Costo: $300</li>
                    <li class="list-group-item list-group-item-primary text-light">Fecha Inicio: 20 / 10 / 2018</li>
                    <li class="list-group-item list-group-item-primary text-light">Horario: 18:00 - 20:00 horas</li>
                    <li class="list-group-item list-group-item-primary text-light">Duración: 8 Semanas / 2 Horas cada Sábado</li>
                </ul>
            </div>
            <div class="col-md-6 text-center">
                <h2 class="separador text-center mt-5 my-md-3">Imparte</h2>

                <div class="row justify-content-center ">
                    <div class="col-md-7">
                        <img src="img/instructor.jpg" class="img-fluid rounded-circle mb-4 ">
                    </div>
                </div>
                <p class="instructor"> Isabelle De la torre 

                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quo culpa dignissimos, veritatis eveniet similique fugit cumque temporibus commodi, modi inventore non officia perferendis ratione odit nisi provident natus eum?
                </p>
            </div>
        </div>
       </div>
    
    <?php endwhile; ?>

<?php get_footer();?>