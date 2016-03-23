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
date_default_timezone_set('America/Los_Angeles');
$today = date("F j, Y, g:i a"); 
// If the data in either field are NIL then skip it.
if ($_POST['Name1'] && $_POST['Tag1'] != "NIL") {
	// Do sql update to new number.
	$sql = "UPDATE tag_players SET playerTag='$_POST[Tag1]', lastUpdate='$today' WHERE playerName='$_POST[Name1]'";
			  dosql($sql, "fellon");
			  	echo $_POST['Name1'];
			  	echo ' has been updated to tag number ';
			  	echo $_POST['Tag1'];
			  	echo '<br>';
	}
	
// Repeat for all other fields.
if ($_POST['Name2'] && $_POST['Tag2'] != "NIL") {
	// Do sql update to new number.
	$sql = "UPDATE tag_players SET playerTag='$_POST[Tag2]', lastUpdate='$today' WHERE playerName='$_POST[Name2]'";
			  dosql($sql, "fellon");
	echo $_POST['Name2'];
			  	echo ' has been updated to tag number ';
			  	echo $_POST['Tag2'];
			  	echo '<br>';
	}

if ($_POST['Name3'] && $_POST['Tag3'] != "NIL") {
	// Do sql update to new number.
	$sql = "UPDATE tag_players SET playerTag='$_POST[Tag3]', lastUpdate='$today' WHERE playerName='$_POST[Name3]'";
			  dosql($sql, "fellon");
echo $_POST['Name3'];
			  	echo ' has been updated to tag number ';
			  	echo $_POST['Tag3'];
			  	echo '<br>';

	}

if ($_POST['Name4'] && $_POST['Tag4'] != "NIL") {
	// Do sql update to new number.
	$sql = "UPDATE tag_players SET playerTag='$_POST[Tag4]', lastUpdate='$today' WHERE playerName='$_POST[Name4]'";
			  dosql($sql, "fellon");
echo $_POST['Name4'];
			  	echo ' has been updated to tag number ';
			  	echo $_POST['Tag4'];
			  	echo '<br>';

	}

if ($_POST['Name5'] && $_POST['Tag5'] != "NIL") {
	// Do sql update to new number.
	$sql = "UPDATE tag_players SET playerTag='$_POST[Tag5]' WHERE playerName='$_POST[Name5]'";
			  dosql($sql, "fellon");
echo $_POST['Name5'];
			  	echo ' has been updated to tag number ';
			  	echo $_POST['Tag5'];
			  	echo '<br>';

	}

if ($_POST['Name6'] && $_POST['Tag6'] != "NIL") {
	// Do sql update to new number.
	$sql = "UPDATE tag_players SET playerTag='$_POST[Tag6]', lastUpdate='$today' WHERE playerName='$_POST[Name6]'";
			  dosql($sql, "fellon");
echo $_POST['Name6'];
			  	echo ' has been updated to tag number ';
			  	echo $_POST['Tag6'];
			  	echo '<br>';

	}
	?>
	<a href="index.php">Return</a>
	