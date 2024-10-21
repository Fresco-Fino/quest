<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<!-- BOTON TO TOP -->
	<a class="back-to-top" href="#" title="Ir a arriba"></a>

	<!-- LOADING -->
    <div class="loading"></div>

	<!-- HEADER -->
	<header>

		<!-- BRAND -->
		<a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>">

			<img src="<?php bloginfo( 'template_url' ); ?>/img/brand.png" alt=""  class="navbar-brand--white"> 
			<img src="<?php bloginfo( 'template_url' ); ?>/img/brand-black.png" alt="" class="navbar-brand--black">

			<?php if(is_front_page()): ?>
				
			<?php else: ?>
				
			<?php endif; ?>

		</a>

		<div class="d-flex align-items-center position-relative z-3">
			<?php do_action('wpml_add_language_selector'); ?>

			<?php if(is_front_page()): ?>
				<a href="#contacto" class="btn btn-primary btn_ancla_contact"><?php _e('CONTÁCTANOS','queens'); ?></a>
			<?php else: ?>
				<a href="<?php bloginfo('url'); ?>/#contacto" class="btn btn-primary"><?php _e('CONTÁCTANOS','queens'); ?></a>
			<?php endif; ?>

		</div>		

	</header>

	<!-- CONTAINER -->
	<div id="wrapper">