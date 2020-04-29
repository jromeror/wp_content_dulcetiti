<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>
		<article class="mb-5 container">
		<h2><?php the_title(); ?></h2>
		<div>
		<?php the_post_thumbnail('entradas', array('class' => 'w-100 h-auto ')); ?> 
		</div>
		</article>
		<div>
			<?php the_content() ?>
		</div>
		<p><a href="<?php echo get_home_url()?>" class="btn-rosa">Volver a inicio</a></p>

	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>
<?php get_footer() ?>