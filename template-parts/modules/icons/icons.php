<?php $icons = get_sub_field('icons'); ?>
<?php $icons_mobile = get_sub_field('icons_mobile'); ?>

<div class="section_wrap">

	<div class="container-fluid animated_head">
		<div class="row">
			<div class="col-lg-3">
				<?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-section.php'); ?>			
			</div>
			<div class="col-lg-5 offset-lg-2 normal__animation">
				<?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-title.php'); ?>
				<?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-content.php'); ?>				
			</div>
		</div>
	</div>

	<?php if(!empty($icons)): ?>
		<?php if(!empty(count($icons)>1)): ?>
			<?php require( TEMPLATEPATH . '/template-parts/modules/icons/icons-tabs.php' ); ?>
		<?php else: ?>
			<?php require( TEMPLATEPATH . '/template-parts/modules/icons/icons-simple.php' ); ?>
		<?php endif; ?>
	<?php endif; ?>

</div>