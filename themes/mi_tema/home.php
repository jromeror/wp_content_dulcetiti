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

      <div id="servicios__nav" class="container text-center">
        <h3 class="title__principal mb-5">Servicios</h3>
        <div class="row">
        <div class="card-deck mb-5">
          <article class="card col-12 col-md-6">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/service-01.jpg" class="card-img-top servicios__cursor" alt="Alfajores Personalizados" data-toggle="modal" data-target="#alfajores__personalizados">
            <div class="card-body">
              <h5 class="card-title card__texto">Alfajores personalizados</h5>
              <p class="card-text  mt-3 text-left card__texto-subtext">Solicita alfajores personalizados bañados en chocolate, chocolate blanco, colores y relleno de manjar o frambuesa.</p>
            </div>
          </article>
          <article class="card col-12 col-md-6">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/service-02.jpg" class="card-img-top servicios__cursor" alt="Coctelería Dulce" data-toggle="modal" data-target="#cocteleria__dulce">
            <div class="card-body">
              <h5 class="card-title card__texto">Coctelería dulce</h5>
              <p class="card-text mt-3 text-left card__texto-subtext">Nuestro cóctel dulce son 100% caseros, deliciosos y de excelente calidad, para que disfrutes de tu fiesta y al mejor precio.</p>
            </div>
          </article>
        </div>
      </div>
      <div class="mb-5 mt-5">
          <button class="btn-rosa"><a href="page-galeria.html" class="boton_a">Ver Todos los Productos</a></button>
      </div>

    </div>

      <!-- END SERVICES -->

      <!-- BEGIN MODAL BOOTSTRAP 4.4.1 -->

      <div id="alfajores__personalizados" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title card__texto">Alfajores Personalizados</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>
              <ul class="card__texto-subtext">
                <li>Alfajores personalizados tamaño normal hasta formato de 24 unidades.</li>
                <li>En unidades personalizadas para fiestas corporativas, cumpleaños, bautizos, etc.</li>
                <li>Alfajores personalizados tamaño mini para todo tipo de ocasión desde 50 unidades mínimo.</li>
              </ul>
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-modal" data-dismiss="modal"><a href="#" class="btn-rosa">Cerrar</a></button>
          </div>
        </div>
      </div>
    </div>

    <div id="cocteleria__dulce" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title card__texto">Coctelería Dulce</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>
              <ul class="card__texto-subtext">
                <li>Mini alfajotres personalizados.</li>
                <li>Mini cupcakes y tamaño normal.</li>
                <li>Mini pie de limón y tamaño normal.</li>
                <li>Tartaletas de frutas.</li>
                <li>Barras de cereal.</li>
                <li>Cachitos rellenos.</li>
                <li>Marshmallow temáticos.</li>
              </ul>
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-modal" data-dismiss="modal"><a href="#" class="btn-rosa">Cerrar</a></button>
          </div>
        </div>
      </div>
    </div>

     <!-- END MODAL BOOTSTRAP 4.4.1 -->

      <!-- BEGIN NEWSLATTER-->

    <div id="contacto__nav" class="container">
      <h3 class="title__principal pb-5 mt-5 text-center"> Suscríbete a mi newsletter</h3>
      <form>
        <div class="form-group">
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Dirección de email">
        </div>
        <a href="" class="boton btn-newsletter">Suscríbete ahora</a>
      </form>
      <div class="mb-5 mt-5 text-center">
        <button class="btn-rosa"><a href="page-contacto.html" class="boton_a">Ir a Contacto</a></button>
      </div>
    </div>
      <!-- END NEWSLATTER-->


<?php get_footer() ?>