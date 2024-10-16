<?php if($config['type'] == 'type-carousel'): ?>
    <?php require( TEMPLATEPATH . '/template-parts/modules/gallery/gallery-carousel.php' ); ?>
<?php else:  ?>
    <?php require( TEMPLATEPATH . '/template-parts/modules/gallery/gallery-slider.php' ); ?>
<?php endif; ?>

<!-- CARRUSEL NAVIGATION -->
<div class="carrusel__navigation">
	<div class="carrusel__navigation__bar">
		<div class="carrusel__navigation__bar_number carrusel__navigation__bar__current">
			<div class="current_0">00</div>
			<?php $n = 1; foreach ($media as $image) {
				if($n == 1): $active = 'active'; else: $active = ''; endif; ?>
				<div class="current_item current_<?php echo $n; ?> <?php echo $active; ?>">0<?php echo $n; ?></div>
			<?php $n++; }  ?>
		</div>
		<div class="carrusel__navigation__bar_progress">
			<?php $n = 1; foreach ($media as $image) { ?>
				<div class="carrusel__navigation__bar_progress_item" data-position="<?php echo $n; ?>"></div>
			<?php $n++; }  ?>
		</div>
		<div class="carrusel__navigation__bar_number carrusel__navigation__bar__total">			
			<?php if(count($media) < 10) { ?>0<?php } ?><?php echo count($media); ?>
		</div>
	</div>
</div>