<?php 
/**
 * Template Name: Galería de Imagenes
 */

get_header(); ?>

    <?php while(have_posts()): the_post();?>

        <?php get_template_part('template-parts/contenido', 'paginas');



         //printf( '<pre>%s</pre>', var_export( get_post_custom( get_the_ID() ), true) );

         $imagenes = get_post_meta(get_the_ID(), 'edc_galeria_imagenes', true);
         ?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card-columns">
                        <?php foreach($imagenes as $id => $imagen): ?>
                            <div class="card">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#image_<?php echo esc_attr($id);?>">
                                    Launch demo modal
                                </button>

                                <div class="modal fade" id="#image_<?php echo esc_attr($id);?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>  
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--.card-->
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; ?>

<?php get_footer();?>
