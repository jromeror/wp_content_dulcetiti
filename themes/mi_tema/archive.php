<?php get_header() ?>

<section class="my-5 container">
	<?php if (have_posts()) { ?>
		<h2 class="text-center mb-5"><?php single_term_title(); ?></h2>
		<?php while ( have_posts() ) { the_post(); ?>
			<article class="card">
			<?php the_post_thumbnail('servicios', array('class' => 'w-100 h-auto')); ?> 
				<div class="card-body">
				<h5 class="card-title card__texto"><?php the_title(); ?></h5>
				<p class="card-text  mt-3 text-left card__texto-subtext"><?php the_excerpt(); ?></p>
				<p><a href="<?php the_permalink(); ?>" class="btn-rosa">Ver Más</a></p>
				</div>
			</article>
		<?php }; ?>


	<?php } else { ?>
		<!-- Content -->
		<h2 class="text-center mb-5">No hay elementos</h2>
	<?php } wp_reset_query(); ?>

	<?php get_sidebar() ?>
	</section>
<?php get_footer() ?>