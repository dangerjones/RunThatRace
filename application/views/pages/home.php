<div id="body">
	<div id="browse" class="rtrBackground">
		<form action="/rtrigniter/races/search" method="POST">
		  <h1>Browse</h1>
		  <select id="searchState" name="searchState">
			  <option value="">State</option>
			  <option value="UT">Utah</option>
				<option value="CA">Other -- Outside US</option>
			</select>
			<select id="searchEventType" name="searchEventType">
				<option value="">Event Type</option>
				<option value="5K">5K</option>
				<option value="10K">10K</option>
				<option value="HalfMarathon">Half Marathon</option>
				<option value="Marathon">Marathon</option>
			</select>
			<select id="searchMonth" name="searchMonth">
				<option value="">Month</option>
				<?php
					$date_value = date('Ym');
					$date_text = date('Ym');
					for ($i = 0; $i < 12; $i++) {
						$date_value = date('Ym', strtotime('+' . $i . 'month'));
						$date_text = date('M Y', strtotime('+' . $i . 'month'));
						echo "<option value='$date_value'>$date_text</option>";
					}
				?>
			</select>
			<input id="browseButton" class="submitButton" type="submit" value="" />
		</form>
	</div>
	<div id="search" class="rtrBackground">
		<form action="/rtrigniter/races/search" method="POST">
		  <h1>Search</h1>
			<input type="text" name="searchName" value="" />

			<h2>Search by:</h2>
			<h3>Event Name</li>
			<h3>Location</h3>
			<h3>Keyword</h3>
			<input id="searchButton" class="submitButton" type="submit" value="" />
		</form>
	</div>
  <div id="create" class="rtrBackground">
		<form action="/rtrigniter/director" method="GET">
		  <h1>Create</h1>
			<ul>
				<li>Add Events</li>
				<li>Manage Registration</li>
				<li>Contact Registrants</li>
				<li>Promote Event</li>
			</ul>
			<input id="createButton" class="submitButton" type="submit" value="" />
		</form>
	</div>
	<div class="clearBoth"></div>
</div>
<div id="bodyFooter">
  <button class="bigBlackButton">Find Running <span>Groups</span></button>
  <button class="bigBlackButton">Find Running <span>Routes</span></button>
  <button class="bigBlackButton">Find Running <span>Stores</span></button>
	<div class="clearBoth"></div>
</div>
