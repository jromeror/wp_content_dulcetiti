<?php get_header() ?>

<section class="my-5 container">
	<?php if (have_posts()) { ?>
		<h2 class="text-center mb-5"><?php single_term_title(); ?></h2>
		<?php while ( have_posts() ) { the_post(); ?>

<!-- Copiar estructura de page productos -->

		<?php }; ?>


	<?php } else { ?>
		<!-- Content -->
		<h2 class="text-center mb-5">No hay elementos</h2>
	<?php } wp_reset_query(); ?>

	
	</section>
<?php get_footer() ?>