<?php $email = get_sub_field('email'); ?>

<div class="section_wrap" id="contacto">
	<div class="container-fluid">
		<div class="row">

			<div class="col-lg-6 col-xl-4">
				<div class="animated_head">
					<?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-section.php'); ?>
					<?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-title.php'); ?>
					<?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-subtitle.php'); ?>
					<?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-content.php'); ?>
					<?php if(!empty($email)): ?>
						<a href="mailto:<?php echo $email; ?>" class="mt-4 d-block">
							<img src="<?php bloginfo( 'template_url' ) ?>/img/mail-icon.png" alt="">
							<?php echo $email; ?>
						</a>
					<?php endif; ?>
					<img src="https://gloriadiagonal.com/wp-content/uploads/2024/08/CT_ConrenTramway_Logotipo_Horizontal_RGB_04.png" class="contact_form mt-5" alt="">
				</div>
			</div>

			<div class="col-lg-6 col-xl-7 offset-xl-1">
				<div class="normal__animation pt-5 mt-5">
					<script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
						<script>
						hbspt.forms.create({
							region: "eu1",
							portalId: "143718147",
							formId: "7eb1de1d-84fc-433d-a405-dcd36e7a8911"
						});
					</script>
					<?php // echo do_shortcode('[contact-form-7 id="114d1ab" title="Formulario de contacto 1"]') ?>
				</div>
			</div>

		</div>
	</div>
</div>