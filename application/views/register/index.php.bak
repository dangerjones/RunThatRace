<div id="body">
	<h1>Register</h1>
	<p>
	  Race: <?php echo $register_model->race['title'] ?>
	</p>
  <form action="/rtrigniter/register/number_participants" method="post">
		<p>
			How many participants would you like to register?
		</p>
		<p>
			Adults (13+):
			<select name="adults">
				<?php for ($i = 0; $i < 10; $i++) { ?>
					<option value="<?php echo $i ?>"><?php echo $i ?></option>
				<?php } ?>
			</select>
		</p>
		<p>
			Children (3-12):
			<select name="children">
				<?php for ($i = 0; $i < 10; $i++) { ?>
					<option value="<?php echo $i ?>"><?php echo $i ?></option>
				<?php } ?>
			</select>
		</p>
		<input type="submit" value="submit" />
	</form>
</div>
