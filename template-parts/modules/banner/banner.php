
<?php // var_dump($media); ?>

<!-- CARRUSEL BOTON -->
<!-- <a href="#" data-toggle="modal" data-target="#modalGallery" class="carrusel_button"><?php _e('VER GALERÍA', 'gloria') ?></a> -->

<!-- BANNER SCROLL -->
<div class="carrusel_scroll">
	<div class="c-text">scroll down</div>
	<div class="c-scrolldown">
		<div class="c-line"></div>
	</div>
</div>

<?php  if(!empty($content['video'])): ?>
	<div class="btn__lg">
	<a data-lg-size="1280-720" data-src="<?php echo $content['video']; ?>" data-poster="<?php echo $content['video_poster']; ?>" class="">
		<img src="<?php bloginfo('template_url') ?>/img/play.png" alt="">
		<?php _e('ver video','gloria') ?>
	</a>	
	</div>
<?php endif;  ?>

<div class="banner__container">
	<!-- BANNER TITULO -->
	<div class="banner__title animated_letters">
		<?php echo $content['title']; ?>
	</div>
	<div class="banner__content">
		<?php echo $content['content']; ?>
	</div>
	<div class="banner__price">
		<?php echo $content['price']; ?>
	</div>
</div>

<?php if(!empty($media['video'])): ?>

	<video autoplay loop muted playsinline>
		<source src="<?php echo $media['video']['url'] ?>" type="video/mp4">
    </video>

<?php else : ?>

	<!-- CARRUSEL OWL -->
	<?php if(!empty($media['gallery_mobile'])): ?>
		<div class="owl-carousel d-none d-lg-block">
			<?php $m = 1; foreach ($media['gallery'] as $image) { ?>
				<div class="item" data-position="<?php echo $m; ?>">
					<img src="<?php echo $image['url']; ?>" >
				</div>
			<?php $m++; }  ?>
		</div>
		<div class="owl-carousel d-lg-none">
			<?php $m = 1; foreach ($media['gallery_mobile'] as $image) { ?>
				<div class="item" data-position="<?php echo $m; ?>">
					<img src="<?php echo $image['url']; ?>" >
				</div>
			<?php $m++; }  ?>
		</div>
	<?php else: ?>
		<div class="owl-carousel">
			<?php $m = 1; foreach ($media['gallery'] as $image) { ?>
				<div class="item" data-position="<?php echo $m; ?>">
					<img src="<?php echo $image['url']; ?>" >
				</div>
			<?php $m++; }  ?>
		</div>
	<?php endif; ?>

<?php endif; ?>

<!-- CARRUSEL NAVIGATION -->
<?php /*
<div class="carrusel__navigation">
	<div class="carrusel__navigation__bar">
		<div class="carrusel__navigation__bar_number carrusel__navigation__bar__current">
			<div class="current_0">00</div>
			<?php $n = 1; foreach ($media['gallery'] as $image) {
				if($n == 1): $active = 'active'; else: $active = ''; endif; ?>
				<div class="current_item current_<?php echo $n; ?> <?php echo $active; ?>">0<?php echo $n; ?></div>
			<?php $n++; }  ?>
		</div>
		<div class="carrusel__navigation__bar_progress">
			<?php $n = 1; foreach ($media['gallery'] as $image) { ?>
				<div class="carrusel__navigation__bar_progress_item" data-position="<?php echo $n; ?>"></div>
			<?php $n++; }  ?>
		</div>
		<div class="carrusel__navigation__bar_number carrusel__navigation__bar__total">
			0<?php echo count($media['gallery']); ?>
		</div>
	</div>
</div>
*/ ?>