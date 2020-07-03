<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name=description content="<?php
	global $page, $paged; wp_title( '-', true, 'right' ); bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " - $site_description";
		if ( $paged >= 2 || $page >= 2 )
			echo ' - ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page )
		);
?>" />
	<title>
		<?php
			global $page, $paged; wp_title( '-', true, 'right' ); bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " - $site_description";
				if ( $paged >= 2 || $page >= 2 )
					echo ' - ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page )
				);
		?>
	</title>


	<link rel="shortcut icon" href="<?php  echo get_template_directory_uri() ?>/img/favicon.ico" type="image/x-icon">
	<link rel=icon href="<?php  echo get_template_directory_uri() ?>/img/favicon.ico" type="image/x-icon">

	<link href="<?php  echo get_template_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php  echo get_template_directory_uri() ?>/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php  echo get_template_directory_uri() ?>/css/magnific-popup.css" rel="stylesheet">
	<link href="<?php  echo get_template_directory_uri() ?>/js/sweetalert/sweetalert.css" rel="stylesheet">
	<link href="<?php  echo get_template_directory_uri() ?>/css/style.css" rel="stylesheet">


	<script src="<?php  echo get_template_directory_uri() ?>/js/modernizr-latest.js"></script>
	<?php wp_head();?>
</head>

<body>



	<header>
		<div class="container">
			<div class="row">

				<div class="col-xs-9 col-sm-10 col-md-3">
					<div class="logo">
						<a href="<?php bloginfo('url'); ?>"><img src="<?php  echo get_template_directory_uri() ?>/img/logo.png" title="Dr. Paulo Pinheiro" alt="Dr. Paulo Pinheiro" class="img-responsive"></a>
					</div>
				</div>

				<div class="hidden-xs hidden-sm col-md-6">
					<nav class="menu">
						<ul>
							<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
							<li><a href="<?php bloginfo('url'); ?>/biografia">Biografia</a></li>
							<li><a href="<?php bloginfo('url'); ?>/galeria-de-fotos">Galeria de fotos</a></li>
							<li><a href="<?php bloginfo('url'); ?>/contato">Contato</a></li>
						</ul>
					</nav>
				</div>


				<div class="hidden-xs hidden-sm col-md-3">
					<ul class="social-top">
						<li><a class="face-top" href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a class="twitter-top" href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a class="insta-top" href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>

				</div>


				<div class="text-right col-xs-3 col-sm-2 hidden-md hidden-lg">
					<a href="javascript:void(0)" class="mobile-control mobile-open transition"><i class="fa fa-bars" aria-hidden="true"></i></a>
				</div>


			</div>

			<div class="row hidden-md hidden-lg">

				<nav class="menu-mobile">

					<ul>
						<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
						<li><a href="<?php bloginfo('url'); ?>/biografia">Biografia</a></li>
						<li><a href="<?php bloginfo('url'); ?>/galeria-de-fotos">Galeria de fotos</a></li>
						<li><a href="<?php bloginfo('url'); ?>/contato">Contato</a></li>
					</ul>
					<div class="mobile-social">
						<a class="face-top" href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a class="twitter-top" href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a class="insta-top" href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</div>

				</nav>

			</div>

		</div>
	</header>
