<?php $icons = get_sub_field('icons'); ?>
<?php $icons_mobile = get_sub_field('icons_mobile'); ?>

<div class="section_wrap">

	<?php if( !empty($content['title']) || !empty($content['section']) || !empty($content['pre-content']) || !empty($content['content']) ): ?>
		<div class="container-fluid">
			<div class="row">

				<div class="col-lg-5">

					<!-- ANIMATION HEAD > number, section y title -->
					<div class="animated_head">
						<?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-section.php'); ?>
						<?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-title.php'); ?>
					</div>

				</div>

				<div class="col-lg-6 offset-lg-1 normal__animation">
					<?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-precontent.php'); ?>
					<?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-content.php'); ?>
				</div>

			</div>
		</div>
	<?php endif; ?>

	<?php if(!empty($icons)): ?>
		<?php if(!empty(count($icons)>1)): ?>
			<?php require( TEMPLATEPATH . '/template-parts/modules/icons/icons-tabs.php' ); ?>
		<?php else: ?>
			<?php require( TEMPLATEPATH . '/template-parts/modules/icons/icons-simple.php' ); ?>
		<?php endif; ?>
	<?php endif; ?>

</div>