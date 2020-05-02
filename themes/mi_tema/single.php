<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>
			<article class="my-5">
				<div class="p-5">
					<div class="row no-gutters">
						<div class="col-md-5">
							<?php the_post_thumbnail('galeria', array('class'=> 'w-100 h-auto my-4')); ?>
						</div>
						<div class="text-left col-md-7">
							<div class="card-body">
								<h2 class="text-center"><?php the_title(); ?><hr></h2>
								<h3 class="pt-5"><?php the_content(); ?></h3>
								<h5>Precio: $ <?php the_field('precio'); ?></h5>
								<h5 class="pt-5">Categoría: <?php the_category(' '); ?></h5>
							</div>
						</div>
					</div>
				</div>
			</article>
		<p class="my-5"><a href="<?php echo get_home_url()?>" class="btn-rosa">Volver a inicio</a></p>
	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>
<?php get_footer() ?>