<?php /* Template name: Thank you */ ?>
<?php get_header(''); ?>

<?php
	$titulo = get_field('titulo'); 
	$contenido = get_field('contenido'); 
	$fondo = get_field('fondo'); 
?>

<div class="thankyou">	
	<div class="thankyou_wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1">	
					<div class="thankyou__title"><?php echo $titulo; ?>	</div>	
					<?php echo $contenido; ?>
					<a href="<?php bloginfo('url') ?>" class="btn btn-outline-secondary mt-5">
						<?php _e('Volver atrás','quest') ?>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>


