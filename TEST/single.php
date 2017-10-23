<?php
/*Pagina para nmostrar el contenido de los posts*/
get_header();
?>
<div class="container contenido">
	<div class="row">
		<div class="col-md-8">
			<?php
			while ( have_posts()) : the_post();
			?>
			<article <?php post_class();?> class="post" >
				<div class="col-md-12" style="padding: 15px; border: 2px solid black; margin-bottom: 5px;">
					<div class="col-md-12">
						<h1><?php the_title();?></h1>
					</div>
					<div class="col-md-8">
						<h2> Por: <?php the_author(); ?></h2>
					</div>
					<div class="col-md-4">
						<h2><?php the_time('d/m/Y') ?></h2>
					</div>
				</div>
				<div class="col-md-12" style="padding: 20px; height: auto;">
					<?php the_content(); ?>
					<div class="col-md-6">
						<h4> Por: <?php the_author(); ?></h4>
						<h4><?php the_time('d/m/Y') ?></h4>
					</div>
					<div class="col-md-6">
						<?php  the_tags('<h4>Etiquteas:</h4>', ', '); ?>
					</div>
				</div>
			</article>
			<?php
				endwhile;
			?>
			<div class="col-md-12" style="height: 250px;">
				<?php the_comment(); ?>
			</div>
			<div class="col-md-12">
				<h2>Quizas te pueda interasr:</h2>
			</div>
			<div class="col-md-12" style="margin-top: 10px;">
				<div class="row categorias">
					<?php
						query_posts('orderby=rand&showposts=2&order=DESC');
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
			</div>
		</div>
		<div class="col-md-4">
			<div class="row">
				<?php
					get_sidebar();
				 /*if ( is_active_sidebar('sidebar-1')) : 
				 dynamic_sidebar('sidebar-1'); 
				  endif; */?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
?>