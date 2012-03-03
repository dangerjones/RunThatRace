<div id="body">
	<!-- <xmp>
		Requested link: <?php echo $requested_link ?>
		Races: <?php print_r($races); ?>
	</xmp> -->
	<?php if (count($races) > 0) { ?>
		<div class="raceSummary">
			<h1><?= $races['title'] ?></h1>
			<h2><?= formatted_race_date($races) ?></h2>
			<p>
				<?= $races['text'] ?>
			</p>
			<a href="/rtrigniter/register/<?= $races['link'] ?>">Register</a>
		</div>
	<?php } else { ?>
		<h1>Error</h1>
		<p>
			Sorry we could not find that race.
		</p>
	<?php } ?>
</div>
