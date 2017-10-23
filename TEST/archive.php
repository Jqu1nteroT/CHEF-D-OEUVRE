<?php
/*Pagina para mostrar las categorias*/
get_header();
?>
<div class="container categorias page-content contenido">
	<div class="row">
		<div class="col-md-8">
			<div class="col-md-12">
				<?php if (is_category()){ ?>
				<h1 class="entry-title">
				<strong><?php single_cat_title(); ?>:</strong>
				</h1>
				<?php } ?>
			</div>
			<?php
			
				while (have_posts()) : the_post();
			?>
			<div class="col-xs-6 col-md-6 movil">
				<div class="categoria">
					<article>
						<?php
							if (has_post_thumbnail()) : the_post_thumbnail('large');
							endif;
						?>
						<div class="artCon">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-6 title">
										<h2>
										<a href=" <?php echo get_permalink(); ?> ">
											<?php the_title(); ?>
										</a>
										</h2>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 col-md-12">
										<?php the_excerpt(); ?>
									</div>
									<div class="col-xs-12 col-md-12" >
										<a href=" <?php echo get_permalink(); ?> ">
											<?php _e('Read more...') ?>
										</a>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
			<?php
				endwhile;
			?>
			
		</div>
		<div class="col-md-4 sidebar">
			<div class="row">
				<?php get_sidebar(); ?>
			<?php /*if ( is_active_sidebar('sidebar-1')) :*/ ?>
				<?php /*dynamic_sidebar('sidebar-1');*/ ?>
			<?php /*endif;*/ ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>