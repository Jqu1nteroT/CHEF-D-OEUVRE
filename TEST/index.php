<?php get_header();?>
<section id="slider">
	<div class="jumbotron">
		<?php
			$args = array(
				'post_type' => 'brxlsblog_slider',
				'posts_per_page' => 4
			);
			$loop = new WP_Query( $args );
		if ($loop->have_posts()): ?>
		<div id="carousel-1" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<?php
				$l = $loop->post_count;
				for ($i = 0; $i < $l; $i++) { ?>
				<li data-target="#carousel-1" data-slide-to="<?php echo $i; ?>" <?php if ($i == 0){ ?>class="active"<?php } ?>>
				</li>
				<?php
				}
				?>
			</ol>
			<div class="carousel-inner" role="listbox">
				<?php
				$n = 0;
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="item <?php if($n == 0) { echo 'active'; } ?>">
					<?php echo get_the_post_thumbnail( $loop->ID, 'brxlsblog-feactured-image'); ?>
					<div class="carousel-caption">
						<?php the_content(); ?>
					</div>
				</div>
				<?php
				$n++;
				endwhile;
				?>
			</div>
			<a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-1" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<?php
		endif;
		?>
	</section>
	<section id="contenu">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8">
					<div class="lastNew">
						<!--Test para lo ultimo publicado -->
							
						<!-- fin del test -->
						<div class="article">
							<img class="img-responsive" src="<?php bloginfo('template_url');?>/image/climbing-2264698_1920.jpg" alt="">
							<div class="artCon">
								<div class="container-fluid">
									<div class="row">
										<div class="col-xs-12 col-md-6 title"><h2>Title1:</h2></div>
										<div class="col-xs-6 col-md-6"><h3>25/01/1991</h3></div>
									</div>
									<div class="row">
										<div class="col-xs-6 col-md-12">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem cum aliquam, saepe quod nulla ipsum ipsa recusandae repudiandae provident id deserunt, laboriosam hic est laudantium aperiam, harum itaque ex magnam perspiciatis. Sint quia quasi obcaecati facilis at sunt suscipit doloremque ea nisi dicta, rerum! Culpa consequuntur quaerat quam sint iure.</p>
										</div>
										<div class="col-xs-12 col-md-12" >
											<a href="#">Read more...</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-6 movil">
							<div class="miniArt">
								<img class="img-responsive" src="<?php bloginfo('template_url');?>/image/seemed-2823949_1920.jpg" alt="...">
								<div class="artCon">
									<div class="container-fluid">
										<div class="row">
											<div class="col-xs-12 col-md-6 title"><h2>Title2:</h2></div>
											<div class="col-xs-6 col-md-6"><h3>25/01/1991</h3></div>
										</div>
										<div class="row">
											<div class="col-xs-6 col-md-12">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem cum aliquam, saepe quod nulla ipsum ipsa recusandae repudiandae provident id deserunt, laboriosam hic est laudantium aperiam, harum itaque ex magnam perspiciatis. Sint quia quasi obcaecati facilis at sunt suscipit doloremque ea nisi dicta, rerum! Culpa consequuntur quaerat quam sint iure.</p>
											</div>
											<div class="col-xs-12 col-md-12" >
												<a href="#">Read more...</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-6 movil">
							<div class="miniArt">
								<img class="img-responsive" src="<?php bloginfo('template_url');?>/image/snake-2577406_1920.jpg" alt="...">
								<div class="artCon">
									<div class="container-fluid">
										<div class="row">
											<div class="col-xs-12 col-md-6 title"><h2>Title3:</h2></div>
											<div class="col-xs-6 col-md-6"><h3>25/01/1991</h3></div>
										</div>
										<div class="row">
											<div class="col-xs-6 col-md-12">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem cum aliquam, saepe quod nulla ipsum ipsa recusandae repudiandae provident id deserunt, laboriosam hic est laudantium aperiam, harum itaque ex magnam perspiciatis. Sint quia quasi obcaecati facilis at sunt suscipit doloremque ea nisi dicta, rerum! Culpa consequuntur quaerat quam sint iure.</p>
											</div>
											<div class="col-xs-12 col-md-12">
												<a href="#">Read more...</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
						<div class="col-xs-12 col-md-12 titleNews">
							<h2>NEW'S</h2>
						</div>
						<div class="new">
						<?php query_posts('showposts=10&order=DESC'); ?>
						<!-- Post publicados en la section news -->
						<?php
							while (have_posts()) : the_post();
						?>
						<div class="col-xs-6 col-md-6 allNews">
							<article>
								<?php
									if (has_post_thumbnail()) : the_post_thumbnail('large');
								endif;?>
								<div class="row">
									<div class="col-md-12">
										<h2>
										<?php the_title(); ?>
										</h2>
									</div>
									<div class="col-md-9 col-md-offset-2">
										<?php the_excerpt(); ?>
									</div>
								</div>
								<a href=" <?php echo get_permalink(); ?> ">
									<?php _e('Read more...') ?>
								</a>
							</article>
						</div>
						<?php 
							endwhile; 
							/*next_posts_link();*/
						?>
						<!--Fin de los post -->
					</div>
				</div>
					<div class="col-md-4 sidebar">
						<div class="row plusVu">
							<div class="col-md-12 titleVu">
								<h1>+Visto</h1>
							</div>
							<div class="col-md-12 artPlus">
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
							</div>
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
					</div>
				</div>
			</section>
			<?php get_footer();?>