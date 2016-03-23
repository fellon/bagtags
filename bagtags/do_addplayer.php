
<head>
<meta content="en-us" http-equiv="Content-Language">
</head>

<?php
session_start();
/*
  Peregrine Point Bag Tag tracking system
  Created by Phil Brock
  Start Date: 4/22/2012
*/

// Grab tools
include_once('common.php');
date_default_timezone_set('America/Los_Angeles');
$today = date("F j, Y, g:i a"); 

// Extract the data from the updater and then update the database.
// Verify that the values are not NULL.


// If the data in either field are NIL then skip it.
if ($_POST['Name'] && $_POST['currentTag'] != "") {
	// Do sql update to new number.
	$sql = "INSERT INTO tag_players (playerName, playerTag, lastUpdate) VALUES ('$_POST[Name]','$_POST[currentTag]','$today')";
			  dosql($sql, "fellon");
			  	echo $_POST['Name'];
			  	echo ' has been added to the tag list at ';
			  	echo $_POST['currentTag'];
			  	echo '<br>';
	}
	?>
	<p><a href="index.php">Return</a></p>

	