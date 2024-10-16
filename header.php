<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KTTQKFKN');</script>
	<!-- End Google Tag Manager -->

</head>

<body <?php body_class(); ?>>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTTQKFKN"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<?php if(is_front_page()): ?>
		<div class="message">
			<div class="message__open">
				<img src="<?php bloginfo('template_url'); ?>/img/message-open.png" alt="">
			</div>
			<div class="message__close">
				<img src="<?php bloginfo('template_url'); ?>/img/message-close.png" alt="">
			</div>
			<p><?php _e('Ven a vernos a <strong>Marina Port Vell</strong> desde el 22 de agosto hasta la finalización de la <strong>Copa del América</strong>. <a href="#contacto" target="_blank">Agenda una cita</a> y te invitamos a disfrutar del mejor village de la <strong>Copa del América</strong>.','gloria'); ?> <a href="https://gloriadiagonal.com/wp-content/uploads/2024/09/News_GD-by-CT_Sep.pdf" target="_blank"><?php _e('Descubre todo lo que puedes hacer en la marina', 'gloria') ?></a></p>
		</div>
	<?php endif; ?>

	<!-- BOTON TO TOP -->
	<a class="back-to-top" href="#" title="Ir a arriba"></a>

	<!-- LOADING -->
    <div class="loading">
    	<div class="loading__brand">
    		<img src="<?php bloginfo( 'template_url' ); ?>/img/loading.png" class="img-fluid">
			<!-- <div class="progress__bar">
				<div class="bar"></div>
			</div> -->
    	</div>
    </div>

	<!-- HEADER -->
	<header>

		<!-- BRAND -->
		<a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>">

			<?php if(is_front_page()): ?>
				<img src="<?php bloginfo( 'template_url' ); ?>/img/brand.png" alt="" class="d-none d-md-block">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/brand-mobile.png" alt="" class="d-md-none">
			<?php else: ?>
				<img src="<?php bloginfo( 'template_url' ); ?>/img/brand-white.png" alt="" class="d-none d-md-block">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/brand-mobile-white.png" alt="" class="d-md-none">
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