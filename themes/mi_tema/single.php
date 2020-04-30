<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>
		<article class="my-5 container">
		<h2 class="py-5"><?php the_title(); ?></h2>
		<p><?php the_tags( '<span class="text-warning">#</span>', ' <span class="text-warning">#</span>', '' ); ?></p>
		<div>
		<?php the_post_thumbnail('detail', array('class' => 'w-100 h-auto ')); ?> 
		</div>
		</article>
		<div>
			<?php the_content() ?>
		</div>
		<p class="my-5"><a href="<?php echo get_home_url()?>" class="btn-rosa">Volver a inicio</a></p>

	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>
<?php get_footer() ?>