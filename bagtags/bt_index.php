<?php
session_start();
/*
  Peregrine Point Bag Tag tracking system
  Created by Phil Brock
  Start Date: 4/22/2012
*/

// Grab tools
include_once('common.php');
// Index page should show the current standings.
// Make a sql call to grab the entries in tag_player and put them in a basic table in the order of their tags.
?>

<head>
<meta content="en-us" http-equiv="Content-Language">
<style type="text/css">
.auto-style1 {
	text-align: left;
}
.auto-style2 {
	font-size: xx-large;
}
</style>
</head>

<p class="auto-style1">
<img alt="2012bagtag" height="100" longdesc="2012 Bag Tag number 1" src="bagtag1_2012.jpg" width="100"><em><span class="auto-style2">Peregrine 
Point Bag Tag Standings</span></em></p>
<p>
Your submissions keep the list currrent! <a href="update_tags.php">Submit a tag 
update</a>. "<a href="add_player.php">Register</a>" your tag.</p>

<table style="width: 400px">
	<tr>
		<td><strong>Tag #</strong></td>
		<td><strong>Player Name</strong></td>
	</tr>
	


<?php 
  // Start the table before we call this loop.
  
  $sql = "SELECT * FROM tag_players ORDER BY `playerTag` ASC  LIMIT 0 , 6";
			  dosql($sql, "fellon");
			  // Now make a while statement to grab only the general topics.
			  while ($row = mysql_fetch_array($_SESSION[result])) {
			  $playerTag = $row['playerTag'];
			  $playerName = $row['playerName'];
	?>
  <tr>
		<td><?php echo $playerTag; ?></td>
		<td><?php echo $playerName; ?></td>
	</tr>
<?php
// kill the while loop
}
?>
  </table>

