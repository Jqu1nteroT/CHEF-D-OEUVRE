<!-- Fichero correspondiente al pie de pagina -->

		<footer>
			<div id="footer">
				<div class="container-fluid py-3">
					<div class="row">
						<div class="col-md-3 test">
							<img class="img-responsive" src="<?php bloginfo('template_url');?>/image/logoCogi.svg" alt="Logo">
						</div>
						<div class="col-md-3 test">
							<h3>Feature:</h3>
							<ul>
								<li>Incio</li>
								<li>Gestion</li>
								<li>Eventos</li>
								<li>Curiosidades</li>
								<li>Lugares</li>
							</ul>
						</div>
						<div class="col-md-3 test">
							<h3>Learn More:</h3>
							<ul>
								<li>About us</li>
								<li>Contac us</li>
								<li>Privaci policy</li>
							</ul>
						</div>
						<div class="col-md-3 test3">
							<h3>Subscribe:</h3>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newsletter">
							Send
							</button>
							<h3>Follow us:</h3>
							<i class="fa fa-twitter-square fa-2x"></i>
							<i class="fa fa-facebook-square fa-2x"></i>
							<i class="fa fa-instagram fa-2x"></i>
							<i class="fa fa-google-plus-square fa-2x"></i>
						</div>
					</div>
					<div class="row ">
						<div class="col-md-4 col-md-offset-4">
							<p>Terms Privacy Accesibility <i class="fa fa-copyright" aria-hidden="true"></i> Pquintero, All Rights Reserved</p>
						</div>
					</div>
				</div>
			</div>
			<div id="footerMovil">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 Movil">
							<img src="<?php bloginfo('template_url');?>/image/logoCogi.svg" alt="Logo"><br>
							<i class="fa fa-twitter-square fa-2x"></i>
							<i class="fa fa-facebook-square fa-2x"></i>
							<i class="fa fa-instagram fa-2x"></i>
							<i class="fa fa-google-plus-square fa-2x"></i>
							<center>
							<table>
								<tr>
									<td class="barra"><a href="#">accueil</a></td>
									<td class="barra"><a href="#">Gestion</a></td>
									<td class="barra"><a href="#">Eventos</a></td>
									<td class="barra"><a href="#">Curiosidades</a></td>
									<td><a href="#">Lugares</a></td>
								</tr>
							</table>
							<table>
								<tr>
									<td class="barra"><a href="#">About us</a></td>
									<td class="barra"><a href="#">Contac us</a></td>
									<td><a href="#">Privaci policy</a></td>
								</tr>
							</table>
							</center>
							<p>Terms Privacy Accesibility <i class="fa fa-copyright" aria-hidden="true"></i> Pquintero, All Rights Reserved</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/script.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>