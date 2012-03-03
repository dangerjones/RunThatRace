<div id="body">
	<?php foreach ($races as $races_item): ?>
		<p class="raceQuickSummary">
			<span>
				<?= formatted_race_date($races_item)?> 
			</span>
			<?= $races_item['title'] ?>
			<a href="/rtrigniter/races/view/<?php echo $races_item['link'] ?>">View race</a>
		</p>
	<?php endforeach ?>
</div>
