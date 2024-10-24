<?php $email = get_sub_field('email'); ?>

<div class="section_wrap" id="contacto">
	<div class="container-fluid">
		<div class="row">

			<div class="col-lg-6 col-xl-4">
				<div class="animated_head">
					<?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-section.php'); ?>
					<?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-title.php'); ?>
					<?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-content.php'); ?>
				</div>
			</div>

			<div class="col-lg-6 col-xl-7 offset-xl-1">
				<div class="normal__animation pt-5 mt-5">
					<?php echo do_shortcode('[contact-form-7 id="114d1ab" title="Formulario de contacto 1"]') ?>
				</div>
			</div>

		</div>
	</div>
</div>