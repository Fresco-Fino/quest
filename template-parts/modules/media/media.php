<div class="section_wrap">
	<div class="container-fluid">
		<div class="row">

			<div class="col-lg-5 mb-5 mb-lg-0">

				<!-- ANIMATION HEAD > number, section y title -->
				<div class="animated_head">
					<?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-section.php'); ?>
					<?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-content.php'); ?>
				</div>

			</div>

			<div class="col-lg-6 offset-lg-1 normal__animation">
				<?php if(!empty($media)): ?>
                    <img src="<?php echo $media['url'] ?>" alt="" class="img-fluid">
                <?php endif; ?>
			</div>

		</div>
	</div>
</div>