<?php get_header() ?>

<!-- BEGIN PRODUCTOS -->

<section class="container my-5">
		<h3 class="title__principal text-center py-5">Productos</h3>
       	 <div class="row text-center">
        <?php $arg = array(
          'post_type' => 'shop',
          'posts_per_page' => -1,
          'order' => 'ASC', 
          );

          $get_arg = new WP_Query( $arg );
          while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
          ?>
          <div class="card-deck mb-5 col-6 col-md-3">
          <article class="card">
          <?php the_post_thumbnail('galeria', array('class'=> 'w-100 h-auto')); ?>
            <div class="card-body">
			<p><?php the_title(); ?></p>
			<p><?php the_excerpt(); ?></p>
			<h5>Precio: $ <?php the_field('precio'); ?></h5>
            </div>
		  </article>
          </div>
          <?php } wp_reset_postdata(); ?>
		</div>
		<div class="my-5">
             <button class="btn-rosa"><a href="<?php echo get_home_url()?>" class="boton_a">Volver a inicio</a></button>
          </div>
	  </section>

	  <!-- END PRODUCTOS -->
	  
	  <?php get_footer() ?>