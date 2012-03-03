<div id="body">
	<?php foreach ($races as $races_item): ?>
		<p class="raceQuickSummary">
			<span>
				<?php 
					$date = DateTime::createFromFormat('Ymd', $races_item['day']);
					echo $date->format('D M d');
			  ?>
			</span>
			<?php echo $races_item['title'] ?>
			<a href="/rtrigniter/races/view/<?php echo $races_item['link'] ?>">View race</a>
		</p>
	<?php endforeach ?>
</div>
