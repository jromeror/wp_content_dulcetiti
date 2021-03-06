<?php get_header() ?>

<section class="container py-5">
<h2 class="text-center pt-5"><?php single_term_title(); ?></h2>
<div class="complet pt-5">
	<?php if (have_posts()) { ?>
		<?php while ( have_posts() ) { the_post(); ?>
		<div class="complet__div">
			<div class="card-deck mb-5">
				<article class="card complet__div-img">
				<?php the_post_thumbnail('galeria', array('class'=> 'w-100 h-auto')); ?>
					<div class="card-body">
						<p><?php the_title(); ?></p>
						<p><?php the_excerpt(); ?></p>
						<h5>Precio: $ <?php the_field('precio'); ?></h5>
						<div class="pt-2"><a class="btn-rosa" href="<?php the_permalink(); ?>">Ver</a></div>
					</div>
				</article>
			</div>
		</div>

		<?php }; ?>


	<?php } else { ?>
		<!-- Content -->
		<h2 class="text-center mb-5">No hay elementos</h2>
	<?php } wp_reset_query(); ?>

	
</div>
</section>
<?php get_footer() ?>