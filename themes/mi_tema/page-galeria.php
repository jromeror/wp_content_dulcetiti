<?php get_header() ?>


      <!-- BEGIN GALERIA -->

      <section id="galeria__nav" class="py-5">
        <div class="container text-center">
          <h3 class="title__principal mb-5">Galería de trabajos realizados</h3>
          <div class="row">
          <?php $arg = array(
            'post_type'     => 'galeria',
            'posts_per_page' => 4,
            );

            $get_arg = new WP_Query( $arg );

            while ( $get_arg->have_posts() ) {
            $get_arg->the_post();
            ?>

            <figure class="col-6 col-md-3 galeria">
            <?php the_post_thumbnail('galeria', array('class' => 'w-100 h-auto')); ?> 
             <figcaption class="overlay">
                <h4 class="text"><?php the_title(); ?></h4>
               </figcaption>  
            </figure>
            <?php } wp_reset_postdata(); ?>
            </div>
          <div class="mb-5 mt-5">
            <button class="btn-rosa"><a href="galeria" class="boton_a">Ver Todos los trabajos</a></button>
          </div>
        </div>
      </section>

      <!-- END GALERIA -->

<?php get_footer() ?>