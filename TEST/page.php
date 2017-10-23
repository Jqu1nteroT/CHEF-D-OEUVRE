<?php 
/*
 Plantilla para motrar paginas
*/
 get_header();?>

<div class="row">
	<div class="col-md-12">
		<?php 
			while ( have_posts()) : the_post();
		?>
			<article <?php post_class();?>>
				<div class="entry-header">
					<?php the_title('<h1 class="entry-title">', '</h1>');?>
				</div>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php
			endwhile;
		?>
	</div>
</div>

<?php get_footer();?>