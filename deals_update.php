<?php
	include 'database.php';
	$query = "SELECT * FROM deals ORDER BY days";
	$deals = mysqli_query($conn, $query);
?>

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
          <h1><a href="index.html" class='noline'>Gainesville's Daily Deals!</a></h1>
      </header>

			<div class="desc">

				<p class="mid"><a href="new_deal.php">Add New Deal</a></p>

        <p>Here is a collection of daily deals submitted by users all over Gainesville</p>

				<table>
	<!-- table column headings -->
					<tr id='headings'>
					  <th>Date Added</th>
					  <th>Location</th>
					  <th>Deal</th>
					  <th>Day(s)</th>
					</tr>

					<!-- Begin PHP while-loop to display database query results
			     with each row enclosed in TD tags.
			     Each time it loops, it writes ONE ROW.
					 This code depends on the first 5 lines at the start of this file.
					 $socks comes from that code.
					 NOT-E all form controls must have a name= attribute.
				     -->
					<?php while ($row = mysqli_fetch_assoc($deals)) :  ?>

					<tr>
					  <td id='daterow'><?php echo stripslashes($row['date']); ?></td>
					  <td><?php echo stripslashes($row['location']); ?></td>
					  <td><?php echo stripslashes($row['deal']); ?></td>
					  <td><?php echo $row['days']; ?></td>
					</tr><!-- end of HTML table row -->

					<?php endwhile;  ?>
					<!-- end the PHP while-loop
					     everything else on this page is normal HTML -->

				</table>

      </div>
    </div>

</body>
</html>
