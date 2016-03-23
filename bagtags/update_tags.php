<?php

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
<style type="text/css">
.auto-style2 {
	font-size: xx-large;
}
</style>
<title>Update tags</title>
</head>

<p>
<img alt="2012bagtag" height="100" longdesc="2012 Bag Tag number 1" src="bagtag1_2012.jpg" width="100"><em><span class="auto-style2">Peregrine 
Point Bag Tag Standings</span></em></p>
<p>&nbsp;</p>
<p>Update tag standings!<br>You may update up to 6 players at once. If you need 
to update more just come back to the update system and modify as needed.<br>If 
you make a mistake, you can just run the update again with the correct 
information.</p>
<p><br>Text fields will create errors if non numerical data is entered. <br>Please bear in mind that this is on the honor system and is 
just used for reference. Tag in hand is the final standing.</p>
<form method="post" action="do_updatetag.php">
	<table style="width: 400px">
		<tr>
			<td>Current Tag / Player Name</td>
			<td>New Tag</td>
		</tr>
		<tr>
			<td><select name="Name1">
			<option selected="" value="NULL">Select a player</option>
			<?php
			// Create option list from players and their current tags
			// Tag number / Player name
			 $sql = "SELECT * FROM tag_players ORDER BY `playerTag` ASC  LIMIT 0 , 150";
			  dosql($sql, "fellon");
			  // Now make a while statement to grab only the general topics.
			  while ($row = mysql_fetch_array($_SESSION[result])) {
			  $playerTag = $row['playerTag'];
			  $playerName = $row['playerName'];
			  // We have the data
			  ?>
			<option value="<?php echo $playerName; ?>"><?php echo $playerTag; ?> / <?php echo $playerName; ?></option>
			<?php } ?>		
			</select></td>
			<td><input name="Tag1" type="text" size="3" value="NIL"></td>
		</tr>
		<tr>
			<td><select name="Name2" style="height: 22px">
			<option selected="" value="NULL">Select a player</option>
			<?php
			// Create option list from players and their current tags
			// Tag number / Player name
			 $sql = "SELECT * FROM tag_players ORDER BY `playerTag` ASC  LIMIT 0 , 150";
			  dosql($sql, "fellon");
			  // Now make a while statement to grab only the general topics.
			  while ($row = mysql_fetch_array($_SESSION[result])) {
			  $playerTag = $row['playerTag'];
			  $playerName = $row['playerName'];
			  // We have the data
			  ?>
			<option value="<?php echo $playerName; ?>"><?php echo $playerTag; ?> / <?php echo $playerName; ?></option>
			<?php } ?></select></td>
			<td><input name="Tag2" type="text" size="3" value="NIL"></td>
		</tr>
		<tr>
			<td><select name="Name3">
			<option selected="" value="NULL">Select a player</option>
			<?php
			// Create option list from players and their current tags
			// Tag number / Player name
			 $sql = "SELECT * FROM tag_players ORDER BY `playerTag` ASC  LIMIT 0 , 150";
			  dosql($sql, "fellon");
			  // Now make a while statement to grab only the general topics.
			  while ($row = mysql_fetch_array($_SESSION[result])) {
			  $playerTag = $row['playerTag'];
			  $playerName = $row['playerName'];
			  // We have the data
			  ?>
			<option value="<?php echo $playerName; ?>"><?php echo $playerTag; ?> / <?php echo $playerName; ?></option>
			<?php } ?></select></td>
			<td><input name="Tag3" type="text" size="3" value="NIL"></td>
		</tr>
		<tr>
			<td style="height: 26px"><select name="Name4">
			<option selected="" value="NULL">Select a player</option>
			<?php
			// Create option list from players and their current tags
			// Tag number / Player name
			 $sql = "SELECT * FROM tag_players ORDER BY `playerTag` ASC  LIMIT 0 , 150";
			  dosql($sql, "fellon");
			  // Now make a while statement to grab only the general topics.
			  while ($row = mysql_fetch_array($_SESSION[result])) {
			  $playerTag = $row['playerTag'];
			  $playerName = $row['playerName'];
			  // We have the data
			  ?>
			<option value="<?php echo $playerName; ?>"><?php echo $playerTag; ?> / <?php echo $playerName; ?></option>
			<?php } ?></select></td>
			<td style="height: 26px">
			<input name="Tag4" type="text" size="3" value="NIL"></td>
		</tr>
		<tr>
			<td><select name="Name5">
			<option selected="" value="Null">Select a player</option>
			<?php
			// Create option list from players and their current tags
			// Tag number / Player name
			 $sql = "SELECT * FROM tag_players ORDER BY `playerTag` ASC  LIMIT 0 , 150";
			  dosql($sql, "fellon");
			  // Now make a while statement to grab only the general topics.
			  while ($row = mysql_fetch_array($_SESSION[result])) {
			  $playerTag = $row['playerTag'];
			  $playerName = $row['playerName'];
			  // We have the data
			  ?>
			<option value="<?php echo $playerName; ?>"><?php echo $playerTag; ?> / <?php echo $playerName; ?></option>
			<?php } ?></select></td>
			<td><input name="Tag5" type="text" size="3" value="NIL"></td>
		</tr>
		<tr>
			<td><select name="Name6" style="height: 22px">
			<option selected="" value="NULL">Select a player</option>
			<?php
			// Create option list from players and their current tags
			// Tag number / Player name
			 $sql = "SELECT * FROM tag_players ORDER BY `playerTag` ASC  LIMIT 0 , 150";
			  dosql($sql, "fellon");
			  // Now make a while statement to grab only the general topics.
			  while ($row = mysql_fetch_array($_SESSION[result])) {
			  $playerTag = $row['playerTag'];
			  $playerName = $row['playerName'];
			  // We have the data
			  ?>
			<option value="<?php echo $playerName; ?>"><?php echo $playerTag; ?> / <?php echo $playerName; ?></option>
			<?php } ?></select></td>
			<td><input name="Tag6" type="text" size="3" value="NIL"></td>
		</tr>
	</table>
	<input name="sbmtBtn" type="submit" value="Submit" />
</form>
<p><a href="index.php">Return</a>
</p>
