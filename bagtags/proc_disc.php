<?php
session_start();
/*
  Disc Lost and Found
  Created by Phil Brock
  Start Date: 5/20/2012
*/

// Grab tools
include_once('common.php');

// This will either load a link and take a person back to the main page
// or delete the disc from inventory, or move the disc to the returned catagory.
// grab the data.
$did = $_POST['did'];
$option = $_POST['option'];

// Check what we are doing.

// If nothing
if ($option == "") {
	echo 'Nothing to process.';
	echo '<br>';
	}
	
// Delete the entry	
if ($option == "D") {
  $sql = "DELETE FROM LF WHERE did = '$did'";
			  dosql($sql, "fellon");
			  // return confirm
			  echo 'Your post has been deleted from the system.';
			  echo '<br>';
			  }

// Flag the disc as returned to owner.			  		  
if ($option == "R") {
	$sql = "UPDATE LF SET status='R' WHERE did='$did'";
	dosql($sql, "fellon");
	// confirm
	echo 'This disc has been returned to owner.';
	echo '<br>';
	}
?>
<a href="lostfound.php">Return</a>