<div id="body">
	<div id="browse" class="rtrBackground">
		<form action="/rtrigniter/races" method="POST">
		  <h1>Browse</h1>
		  <select id="browseState">
			  <option value="XX">State</option>
			  <option value="UT">Utah</option>
				<option value="CA">Other -- Outside US</option>
			</select>
			<select id="browseEventType">
				<option value="XX">Event Type</option>
				<option value="UT">5K</option>
				<option value="CA">10K</option>
				<option value="CA">Half Marathon</option>
				<option value="CA">Marathon</option>
			</select>
			<input type="text" name="browseDate" value="Date" />
			<input id="browseButton" class="submitButton" type="submit" value="" />
		</form>
	</div>
	<div id="search" class="rtrBackground">
		<form action="/rtrigniter/races" method="POST">
		  <h1>Search</h1>
			<input type="text" name="keywords" value="" />

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
