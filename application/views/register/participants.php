<div id="body">
	<h1>Register</h1>
	<p>
	  Race: <?php echo $register_model->race['title'] ?>
	</p>
	<h2>Participant Information</h2>
	<? $number_participants = count($register_model->participants); ?>
	<? for ($i = 0; $i < $number_participants; $i++) { ?>
		<? $p = $register_model->participants[$i]; ?>
		<div class="participant">
			<p>
				<label>Participant Type:</label>
				<select>
					<option value="adult">Adult (13+)</option>
					<option value="child">Child (3-12)</option>
				</select>
			</p>
			<p>
				<label>First Name:</label>
				<input type="text" name="firstname_<?= $i ?>" value="<?= $p['firstname'] ?>" />
			</p>
			<p>
				<label>Last Name:</label>
				<input type="text" name="lastname_<?= $i ?>" value="<?= $p['lastname'] ?>" />
			</p>
			<p>
				<label>Email:</label>
				<input type="text" name="email_<?= $i ?>" value="<?= $p['email'] ?>" />
			</p>
			<p>
				<label>Birth Date:</label>
				<select name="birthdate_month_<?= $i ?>">
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
				<select name="birthdate_day_<?= $i ?>">
					<? for ($j = 1; $j < 32; $j++) { ?> 
						<option value="<?= $j ?>"><?= $j ?></option>
					<? } ?>
				</select>
				<select name="birthdate_year_<?= $i ?>">
					<? for ($j = 2012; $j > 1899; $j--) { ?>
						<option value="<?= $j ?>"><?= $j ?></option>
					<? } ?>
				</select>
			</p>
			<p>
				<label>Gender:</label>
				<input type="radio" name="gender_<?= $i ?>" value="Female" />
				<input type="radio" name="gender_<?= $i ?>" value="Male" />
			</p>
			<p>
				<label>Shirt size:</label>
				(Adult)
				<input type="radio" id="shirtsize_adult_small_<?= $i ?>" name="shirtsize_adult_<?= $i ?>" value="S" />
				<label for="shirtsize_adult_small_<?= $i ?>">S</label>
				<input type="radio" id="shirtsize_adult_medium_<?= $i ?>" name="shirtsize_adult_<?= $i ?>" value="M" />
				<label for="shirtsize_adult_medium_<?= $i ?>">M</label>
				<input type="radio" id="shirtsize_adult_large_<?= $i ?>" name="shirtsize_adult_<?= $i ?>" value="L" />
				<label for="shirtsize_adult_large_<?= $i ?>">L</label>
				<input type="radio" id="shirtsize_adult_extralarge_<?= $i ?>" name="shirtsize_adult_<?= $i ?>" value="XL" />
				<label for="shirtsize_adult_extralarge_<?= $i ?>">XL</label>
				<input type="radio" id="shirtsize_adult_extraextralarge_<?= $i ?>" name="shirtsize_adult_<?= $i ?>" value="XXL" />
				<label for="shirtsize_adult_extraextralarge_<?= $i ?>">XXL</label>
				(Youth)
				<input type="radio" id="shirtsize_youth_small_<?= $i ?>" name="shirtsize_youth_<?= $i ?>" value="S" />
				<label for="shirtsize_youth_small_<?= $i ?>">S</label>
				<input type="radio" id="shirtsize_youth_medium_<?= $i ?>" name="shirtsize_youth_<?= $i ?>" value="M" />
				<label for="shirtsize_youth_medium_<?= $i ?>">M</label>
				<input type="radio" id="shirtsize_youth_large_<?= $i ?>" name="shirtsize_youth_<?= $i ?>" value="L" />
				<label for="shirtsize_youth_large_<?= $i ?>">L</label>
			</p>
			
		</div>
	<? } ?>
</div>
