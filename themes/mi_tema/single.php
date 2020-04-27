<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>


		<?php the_post_thumbnail('entradas', array('class' => 'w-100 h-auto')); ?>
		<h3><?php the_category(' '); ?></h3>
		<h4><?php the_title(); ?></h4>
		<div><?php the_content(); ?></div>
	

	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>


<?php get_footer() ?>