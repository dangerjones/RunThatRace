<div id="body">
	<?php foreach ($races as $races_item): ?>
		<p class="raceQuickSummary">
			<span><?php echo date('D d', date('Ymd', $races_item['day'])) ?></span>
			<?php echo $races_item['title'] ?>
			<a href="/rtrigniter/races/view/<?php echo $races_item['link'] ?>">View race</a>
		</p>
	<?php endforeach ?>
</div>
