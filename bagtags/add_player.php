<?php
/*
  Peregrine Point Bag Tag tracking system
  Created by Phil Brock
  Start Date: 4/22/2012
*/

// Grab tools
include_once('common.php');

// Extract the data from the updater and then update the database.
// Verify that the values are not NULL.

?>
<head>
<style type="text/css">

.auto-style2 {
	font-size: xx-large;
}
</style>
<title>Register a tag</title>
</head>

<p>
<img alt="2012bagtag" height="100" longdesc="2012 Bag Tag number 1" src="bagtag1_2012.jpg" width="100"><em><span class="auto-style2">Peregrine 
Point Bag Tag Standings</span></em></p>
<p>
Enter your name followed by the tag you currently have. Name should be in the 
following format. Phil B<br>This form is only for entering new users. Do not use 
this form if you are submitting a tag <a href="update_tags.php">update</a>.</p>
<form action="do_addplayer.php" method="post">

<table style="width: 400px">
	<tr>
		<td style="height: 23px">Player Name</td>
		<td style="height: 23px">Current Tag</td>
	</tr>
	<tr>
		<td><input name="Name" type="text">&nbsp;</td>
		<td><input name="currentTag" size="4" type="text">&nbsp;</td>
	</tr>
</table>

<input name="Submit1" type="submit" value="submit" />
</form>
<a href="index.php">Return</a>

