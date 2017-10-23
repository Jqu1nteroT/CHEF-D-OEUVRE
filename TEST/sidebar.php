<!-- sidebar -->
<aside class="sidebar" role="complementary">
	<?php
	$args = array(
	'posts_per_page' => 3,
	'meta_key' => 'post_views',
	'orderby' => 'meta_value_num',
	'order' => 'DESC'
	);
	
	$popular_posts = new WP_Query( $args );?>
	<div class="col-md-12 titleVu">
		<h1>+Visto</h1>
	</div>
	
		<?php
		while ( $popular_posts->have_posts() ) : $popular_posts->the_post();?>
		<div class="col-md-12 artPlus">
		<div class="col-md-6">
			<?php the_excerpt();?>
		</div>
		<div class="col-md-6">
			<?php
				if (has_post_thumbnail()) : the_post_thumbnail('large');
					endif;
			?>
		</div>
		<div class="col-md-8">
			<h4><?php the_time('d/m/Y') ?></h4>
		</div>
		<div class="col-md-4">
			<a href=" <?php echo get_permalink(); ?> ">
				<?php _e('Read more...') ?>
			</a>
		</div>
	</div>
		<?php
			endwhile;
		?>

		<!-- <div class="col-md-12 artPlus">
				<div class="col-md-6"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae inventore, vero harum numquam nesciunt magnam!</p></div>
			<div class="col-md-6"><img src="<?php bloginfo('template_url');?>/image/blue-2705642_1920.jpg" alt=""></div>
			<div class="col-md-8"><h4>25/01/1991</h4></div>
			<div class="col-md-4"><a href="#">Read More..</a></div>
		</div>
		<div class="col-md-12 artPlus">
			<div class="col-md-6"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem veritatis quisquam a deserunt eaque voluptatibus!</p></div>
			<div class="col-md-6"><img src="<?php bloginfo('template_url');?>/image/climbing-2264698_1920.jpg" alt=""></div>
			<div class="col-md-8"><h4>25/01/1991</h4></div>
			<div class="col-md-4"><a href="#">Read More..</a></div>
		</div>
		<div class="col-md-12 artPlus">
			<div class="col-md-6"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium nesciunt incidunt, atque, tempore illo expedita!</p></div>
			<div class="col-md-6"><img src="<?php bloginfo('template_url');?>/image/snake-2577406_1920.jpg" alt=""></div>
			<div class="col-md-8"><h4>25/01/1991</h4>
			</div>
			<div class="col-md-4">
				<a href="#">Read More..</a></div>
			</div>
		</div> -->
		<div class="row followUs">
			<div class="col-md-12 titleFollow">
				<h2>Follow us</h2>
			</div>
			<div class="col-md-12 redesFollow">
				<i class="fa fa-twitter-square fa-3x"></i>
				<i class="fa fa-facebook-square fa-3x"></i>
				<i class="fa fa-instagram fa-3x"></i>
				<i class="fa fa-google-plus-square fa-3x"></i>
			</div>
		</div>
		<div class="row trending">
			<div class="col-md-12 titleTrending">
				<h2>+Trending:</h1>
			</div>
			<div class="col-md-12 contenu">
				<img src="<?php bloginfo('template_url');?>/image/blue-2705642_1920.jpg" alt="">
				<h2>Lorem ipsum dolor sit amet.</h2>
			</div>
		</div>
	</div>
</aside>
<!-- /sidebar -->