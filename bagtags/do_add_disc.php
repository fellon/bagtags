<?php
session_start();
/*
  Disc Lost and Found
  Created by Phil Brock
  Start Date: 5/20/2012
*/

// Grab tools
include_once('common.php');
// Grab the data and check to make sure it's all there then add it to the dbase.
// If the data in either field are NIL then skip it.
if ($_POST['name'] && $_POST['date'] && $_POST['status'] && $_POST['model'] && $_POST['make'] && $_POST['color'] && $_POST['course'] && $_POST['info'] != "NIL") {
	// Do sql update to new number.
	$sql = "INSERT INTO LF (status, date, make, model, weight, color, course, hole, name, info, idc, reward) VALUES ('$_POST[status]', '$_POST[date]', '$_POST[make]', '$_POST[model]', '$_POST[weight]', '$_POST[color]', '$_POST[course]', '$_POST[hole]', '$_POST[name]', '$_POST[info]', '$_POST[idc]', '$_POST[reward]')";
			  dosql($sql, "fellon");
			  	echo ' Disc has been added to the database';
			  	echo '<br>';
	} else {
	echo "Something was missing. Disc was not added. Please try again.";
	}
	
?>

Back to the <a href="lostfound.php">Lost and Found</a>