<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> Gainesville's Daily Deals </title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div>

      <header>
          <h1><a href="index.html" class='noline'>Enter a Daily Deal!</a></h1>
      </header>

			<div class="desc">
				<p class="mid"><a href="deals_update.php">View All Deals</a></p>

        <div id="deals">
        <!-- this form is handled by the JavaScript file linked at bottom -->
        <form id="dealform" method="post" action="" autocomplete="off">

            <label for="location">Location </label>
          	<input type="text" name="location" id="location" maxlength="50" required>

            <label for="deal">Deal Details </label>
          	<input type="text" name="deal" id="deal" max="999" required>

            <label for="days">Day(s) of the Week </label>
            <select name="days" id="days" required>
                <option value=""></option>
                <option value="Weekdays">Weekdays</option>
                <option value="Weekends">Weekends</option>
                <option value="Mondays">Mondays</option>
                <option value="Tuesdays">Tuesdays</option>
                <option value="Wednesdays">Wednesdays</option>
                <option value="Thursdays">Thursdays</option>
                <option value="Fridays">Fridays</option>
                <option value="Saturdays">Saturdays</option>
                <option value="Sundays">Sundays</option>
            </select>

              <!-- step="0.01" (above) allows decimal to be entered -->
          	<input type="submit" id="submit" value="Submit">
          </form>
        </div>
      </div>

          <!-- empty div -->
    <div id="response"></div>

    </div> <!-- close container -->

    <script src="js/enter.js"></script>

</body>
</html>
