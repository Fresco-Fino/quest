<?php $icons = $icons[0]; ?>


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