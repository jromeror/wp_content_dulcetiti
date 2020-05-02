<?php get_header() ?>

	<!-- BEGIN CONTACTO --> 

	<section class="container-fluid mt-5">
        <h3 class="title__principal text-center text-rosa pt-5">Contacto</h3>  
        <div class="row">
            <div class="section_information col-12 col-md-6 text-center">
                <h4 class="subtitle__principal my-5"><strong>Puedes visitarnos</strong></h4>
                <h5>Dirección:</h5>
                <p class="subtitle__principal-texto"><i class="fas fa-home"></i> Pasaje el molle, 693, Quilicura, Santiago, Chile.</p>
                <h5>Teléfono:</h5>
                <p class="subtitle__principal-texto"><i class="fas fa-phone-alt"></i> (+569) 88023249</p>
                <h5>E-mail:</h5>
                <p class="subtitle__principal-texto"><i class="fas fa-envelope"></i> l.lillomarin@gmail.com</p>
              </div>
              <div class="section__contacto col-12 col-md-6">
                <form>
                    <h4 class="subtitle__principal text-center my-5"><strong>Formulario</strong></h4>
						<?php if ( have_posts() ) { ?>
							<?php while ( have_posts() ) { ?>
								<?php the_post(); ?>
								<?php the_content(); ?>
								<?php } ?>
							<?php } else { ?>
								<!-- Content -->
						<?php } wp_reset_query(); ?>
                  </form>
              </div>
          </div>
      </section>
  
	  <!-- END CONTACTO --> 

<?php get_footer() ?>