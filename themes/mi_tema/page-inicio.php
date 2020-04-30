<?php get_header() ?>
<?php the_post() ?>

  <!-- BEGIN HEADER -->

  <header class="header__image">
        <div class="text-center">
           <object data="<?php echo get_theme_file_uri(); ?>/assets/images/login/isotipo.svg" type="image/svg+xml" class="header__logo">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/login/isotipo.svg" alt="logo">
          </object>
            <div class="col-12">
            <h1><?php get_template_part('_includes/medalla', 'main') ?></h1> <!-- SVG MEDALLA -->
                <p class="header__title">Los mejores alfajores artesanales</p>
            </div>
        </div>
      </header>

      <!-- END HEADER -->

      <!-- BEGIN GALERIA -->

      <section id="galeria__nav" class="py-5">
        <div class="container text-center">
          <h3 class="title__principal mb-5">Galería de trabajos realizados</h3>
          <div class="row">
          <?php $arg = array(
            'post_type'     => 'galeria',
            'posts_per_page' => 4,
            'paged' => $paged,
            'order' => 'DESC', 
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
            <button class="btn-rosa"><a href="galerias" class="boton_a">Ver Todos los trabajos</a></button>
          </div>
        </div>
      </section>

      <!-- END GALERIA -->

      <!-- BEGIN SERVICES -->

      <section id="servicios__nav" class="container">
        <h3 class="title__principal mb-5">Servicios</h3>
        <div class="row text-center">
        <?php $arg = array(
          'post_type' => 'post',
          'posts_per_page' => 2,
          'order' => 'ASC', 
          );

          $get_arg = new WP_Query( $arg );
          while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
          ?>
          <div class="card-deck mb-5 col-12 col-md-6">
          <article class="card">
          <?php the_post_thumbnail('servicios', array('class' => 'w-100 h-auto')); ?> 
            <div class="card-body">
              <h5 class="card-title card__texto"><?php the_title(); ?></h5>
              <p class="card-text  mt-3 text-left card__texto-subtext"><?php the_excerpt(); ?></p>
              <p><a href="<?php the_permalink(); ?>" class="btn-rosa">Ver Más</a></p>
            </div>
          </article>
          </div>
          <?php } wp_reset_postdata(); ?>
        </div>
      </section>

      <!-- END SERVICES -->

      <!-- BEGIN NEWSLATTER-->

    <div id="contacto__nav" class="container mb-5">
      <h3 class="title__principal pb-5 mt-5 text-center">Suscríbete a mi newsletter</h3>
      <div>
        <?php if ( is_active_sidebar( 'content-widget' ) ) { ?>
            <?php dynamic_sidebar( 'content-widget' ); ?>
        <?php }; ?>
    </div>
    </div>
      <!-- END NEWSLATTER-->



<?php get_footer() ?>