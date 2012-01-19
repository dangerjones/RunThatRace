<div id="body">
	<!-- <xmp>
		Requested link: <?php echo $requested_link ?>
		Races: <?php print_r($races); ?>
	</xmp> -->
	<?php if (count($races) > 0) { ?>
		<div class="raceSummary">
			<h1><?php echo $races['title'] ?></h1>
			<p>
				<?php echo $races['text'] ?>
			</p>
			<a href="/rtrigniter/register/<?php echo $races['link'] ?>">Register</a>
		</div>
	<?php } else { ?>
		<h1>Error</h1>
		<p>
			Sorry we could not find that race.
		</p>
	<?php } ?>
</div>
