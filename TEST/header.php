<!-- Fichero correspondiente a la cabecera de la pagina -->
<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Brxlsblog</title>
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css" media='all'>
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>//css/bootstrap.min.css" type="text/css" media='all'>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css" media='all'>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<section id="header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 top">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-2 col-md-2 logo">
									<img class="img-responsive" src="<?php bloginfo('template_url');?>/image/logoCogi.svg" alt="Logo">
								</div>
								<!-- <div class="col-xs-8 col-md-4 redes">
									<i class="fa fa-twitter-square fa-3x"></i>
									<i class="fa fa-facebook-square fa-3x"></i>
									<i class="fa fa-instagram fa-3x"></i>
									<i class="fa fa-google-plus-square fa-3x"></i>
								</div> -->
								<div class="col-xs-2 col-md-6 col-md-offset-4 redes">
									<i id="redes" class="fa fa-twitter-square fa-3x"></i>
									<i id="redes" class="fa fa-facebook-square fa-3x"></i>
									<i id="redes" class="fa fa-instagram fa-3x"></i>
									<i id="redes" class="fa fa-google-plus-square fa-3x"></i>
									<!-- Button trigger modal
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newsletter">
									Newsletter
									</button> -->
									<!-- Modal -->
									<div class="modal fade" id="newsletter" tabindex="-1" role="dialog" aria-labelledby="Newsletter">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
													</button>
													<img src="<?php bloginfo('template_url');?>/image/logoCogi.svg" alt="Logo">
												</div>
												<div class="modal-body ">
													<div class="row newsletter">
														<form class="form-inline">
															<div class="form-group">
																<input type="text" class="form-news" id="firstName" placeholder="First name">
																<input type="text" class="form-news" id="lastName" placeholder="Last name">
															</div>
														</form>
														<form>
															<input type="email" class="form-news" id="email" placeholder="Email">
														</form>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary">Submit</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<nav class="navbar navbar-default fixed" role="navigation">
						<div class="navbar-header">
							<div class="nav navbar-brand logoMovil">
								<a href="#">
									<img class="img-responsive" src="<?php bloginfo('template_url');?>/image/logoCogi.svg" alt="Logo">
								</a>
							</div>
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Menu">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="Menu">
							<ul class="nav navbar-nav">
								<?php /* Primary navigation */
									wp_nav_menu( array(
									  'menu' => 'top_menu',
									  'depth' => 2,
									  'container' => false,
									  'menu_class' => 'nav navbar-nav',
									  //Process nav menu using our custom nav walker
									  'walker' => new wp_bootstrap_navwalker())
									);
								?>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li>
									<?php /*get_search_form();*/ ?>
									<form role="search">
										<div class="form-goup has-feedback-left">
											<input type="text" class="search glyphicon" placeholder="&#57347; Search">
										</div>
									</form>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</section>