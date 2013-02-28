<div id="body">
	<h1>Register</h1>
	<p>
	  Race: <?php echo $register_model->race['title'] ?>
	</p>
	<? $number_participants = count($register_model->participants); ?>
	<form method="POST">
		<p>
			How many participants would you like to register?
		</p>
		<p>
			Participants:
			<select id="participantsNumber" name="participantsNumber">
				<?php for ($i = 0; $i < 10; $i++) { ?>
					<option value="<?= $i ?>"><?= $i ?></option>
				<?php } ?>
			</select>
		</p>
		<hr/>
		<h2>Participant Information</h2>
		<div id="participants">
		</div>
	  <div>
			<input type="submit" value="submit" />
		</div>
	</form>
	<script id="participantTemplate" type="text/x-jquery-tmpl">
		<fieldset class="participant">
			<legend>Participant {{:participantIndex + 1}}</legend>
			<p>
				<label>Participant Type:</label>
				<select>
					<option value="adult">Adult (13+)</option>
					<option value="child">Child (3-12)</option>
				</select>
			</p>
			<p>
				<label>First Name:</label>
				<input type="text" name="firstname_{{:participantIndex}}" value="{{:firstname}}" />
			</p>
			<p>
				<label>Last Name:</label>
				<input type="text" name="lastname_{{:participantIndex}}" value="{{:lastname}}" />
			</p>
			<p>
				<label>Email:</label>
				<input type="text" name="email_{{:participantIndex}}" value="{{:email}}" />
			</p>
			<p>
				<label>Birth Date:</label>
				<select name="birthdate_month_{{:participantIndex}}">
					<option value="1">Jan</option>
					<option value="2">Feb</option>
					<option value="3">Mar</option>
					<option value="4">Apr</option>
					<option value="5">May</option>
					<option value="6">Jun</option>
					<option value="7">Jul</option>
					<option value="8">Aug</option>
					<option value="9">Sep</option>
					<option value="10">Oct</option>
					<option value="11">Nov</option>
					<option value="12">Dec</option>
				</select>
				<select name="birthdate_day_{{:participantIndex}}">
					<? for ($j = 1; $j < 32; $j++) { ?> 
						<option value="<?= $j ?>"><?= $j ?></option>
					<? } ?>
				</select>
				<select name="birthdate_year_{{:participantIndex}}">
					<? for ($j = 2012; $j > 1899; $j--) { ?>
						<option value="<?= $j ?>"><?= $j ?></option>
					<? } ?>
				</select>
			</p>
			<p>
				<label>Gender:</label>
				<input type="radio" name="gender_{{:participantIndex}}" value="Female" />
				<input type="radio" name="gender_{{:participantIndex}}" value="Male" />
			</p>
			<p>
				<label>Shirt size:</label>
				(Adult)
				<input type="radio" id="shirtsize_adult_small_{{:participantIndex}}" name="shirtsize_adult_{{:participantIndex}}" value="S" />
				<label for="shirtsize_adult_small_{{:participantIndex}}">S</label>
				<input type="radio" id="shirtsize_adult_medium_{{:participantIndex}}" name="shirtsize_adult_{{:participantIndex}}" value="M" />
				<label for="shirtsize_adult_medium_{{:participantIndex}}">M</label>
				<input type="radio" id="shirtsize_adult_large_{{:participantIndex}}" name="shirtsize_adult_{{:participantIndex}}" value="L" />
				<label for="shirtsize_adult_large_{{:participantIndex}}">L</label>
				<input type="radio" id="shirtsize_adult_extralarge_{{:participantIndex}}" name="shirtsize_adult_{{:participantIndex}}" value="XL" />
				<label for="shirtsize_adult_extralarge_{{:participantIndex}}">XL</label>
				<input type="radio" id="shirtsize_adult_extraextralarge_{{:participantIndex}}" name="shirtsize_adult_{{:participantIndex}}" value="XXL" />
				<label for="shirtsize_adult_extraextralarge_{{:participantIndex}}">XXL</label>
				(Youth)
				<input type="radio" id="shirtsize_youth_small_{{:participantIndex}}" name="shirtsize_youth_{{:participantIndex}}" value="S" />
				<label for="shirtsize_youth_small_{{:participantIndex}}">S</label>
				<input type="radio" id="shirtsize_youth_medium_{{:participantIndex}}" name="shirtsize_youth_{{:participantIndex}}" value="M" />
				<label for="shirtsize_youth_medium_{{:participantIndex}}">M</label>
				<input type="radio" id="shirtsize_youth_large_{{:participantIndex}}" name="shirtsize_youth_{{:participantIndex}}" value="L" />
				<label for="shirtsize_youth_large_{{:participantIndex}}">L</label>
			</p>
			
		</fieldset>
	</script>
	<?
		$script = <<<EOD
		RTR.Util.createObject('ParticipantsViewModel', {
			'containerId': 'participants',
			'participantTemplateId': 'participantTemplate',
			'selectParticipantsNumberId': 'participantsNumber'
		});
EOD;

	defer_js($script);
	?>
</div>
