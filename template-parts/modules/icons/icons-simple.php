<?php $icons = $icons[0]; ?>


<?php if(!empty($icons['icon_mobile'])): ?>

	<!-- MAPA -->
	<div class="icons d-md-none">
		<ul class="icons__list">
			<?php foreach ($icons['icon_mobile'] as $item) { ?>
				<li>
					<img src="<?php echo $item['image']['url']; ?>" alt="">
					<?php echo $item['title']; ?>
				</li>
			<?php }  ?>
		</ul>
	</div>

	<!-- MAPA -->
	<div class="icons d-none d-md-block">
		<ul class="icons__list">
			<?php foreach ($icons['icon'] as $item) { ?>
				<li>
					<img src="<?php echo $item['image']['url']; ?>" alt="">
					<?php echo $item['title']; ?>
				</li>
			<?php }  ?>
		</ul>
	</div>

<?php else: ?>	

	<!-- MAPA -->
	<div class="icons">
		<ul class="icons__list">
			<?php foreach ($icons['icon'] as $item) { ?>
				<li>
					<img src="<?php echo $item['image']['url']; ?>" alt="">
					<?php echo $item['title']; ?>
				</li>
			<?php }  ?>
		</ul>
	</div>

<?php endif; ?>