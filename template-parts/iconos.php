        <section class="nosotros mt-5 container">

        <?php
            printf( '<pre>%s</pre>', var_export( get_post_custom( get_the_ID() ), true ) );
        ?>
            <?php $titulo = get_post_meta( get_the_ID(), 'edc_group_titulo_iconos', true); ?>
            <h2 class="text-center mb-5 separador"><?php echo $titulo; ?></h2>

            <div class="row">
                <?php $iconos = get_post_meta( get_the_ID(), 'edc_group_nosotros', true);
                echo "<pre>";
                var_dump($iconos);
                echo "</pre>";
                
                ?>
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