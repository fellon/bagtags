<?php
/*
  Disc Lost and Found
  Created by Phil Brock
  Start Date: 5/20/2012
*/

// Grab tools
include_once('common.php');
// Should have two coloms. One for lost, one for found.
// Found objects should have a option to claim, which will reveal contact info.
// Lost objects should have a found button that reveals contact info.
// Default sort should be by course.
// Make two tables. One for lost, and one for found.
// Have a third list for discs sucessfully returned to owner.
// Info: Make / Model / Weight / Color / Course found / Hole found / Identifiying characteristics / Contact Name / Contact info (Phone / email) / Date / L F R / Reward?
// Make it able to go to a dynamic page that will let you move the disc to the recovered list.
?>

<head>
<style type="text/css">
.auto-style1 {
	border: 2px solid #800000;
}
.auto-style2 {
	border: 2px solid #008000;
}
.auto-style3 {
	border: 2px solid #0000FF;
}
.auto-style4 {
	font-size: x-large;
}
</style>
</head>

<p><span class="auto-style4">Ye Olde Lost &amp; Found</span></p>
<table style="width: 29%">
	<tr>
		<td style="width: 185px"><a href="index.php">Peregrine Point Bag Tags</a></td>
		<td><a href="lostfound.php">Disc Lost &amp; Found</a></td>
	</tr>
</table>
<p>A golf disc lost and found for local disc golfers.<br><br>Warning! This is still 
currently in development. Warning!<br>A few things may not work yet. But the main 
functionality is there. I will be making tweaks to it over the next few days.<br>
Hope it helps bring a few pieces of plastic home.<br></p>
<p><a href="add_disc.php">Add a disc</a></p>
<p>Lost:<br>
<table class="auto-style1" width="900px">
	<tr>
		<td style="width: 80px">Date</td>
		<td>Information</td>
	</tr>
	<?php
	// Start loop to pull all L status discs from the dbase.
$sql = "SELECT * FROM LF WHERE status='L' ORDER BY `course` ASC  LIMIT 0 , 150";
			  dosql($sql, "fellon");
			  // Now make a while statement to grab only the general topics.
			  while ($row = mysql_fetch_array($_SESSION['result'])) {
			  $make = $row['make'];
			  $model = $row['model'];
			  $course = $row['course'];
			  $weight = $row['weight'];
			  $color = $row['color'];
			  $date1 = $row['date'];
			  $name = $row['name'];
			  $did = $row['did'];
			  $idc = $row['idc'];
			  $hole =$row['hole'];
// Now populate the tables			  
?>
	<tr>
	<form action="do_disc.php" method="post">
		<td><?php echo $date1;?></td>
		<td><?php 
		echo 'LOST: ';
		echo $color;
		echo ' '; 
		echo $make; 
		echo ' ';
		echo $model; 
		echo ' '; 
		echo $weight;
		echo ' at ';
		echo $course; 
		echo " Please contact: <input type=hidden name=did value=$did><input name=sbmtBtn type=submit value=$name>";
		echo "<br>";
		echo "Lost on hole $hole :: Info: $idc";
		?></td>
		</form>
	</tr>
	<?php // Kill the loop
	}
	?>
</table>
</p>
<p>Found:<br>
<table class="auto-style2" width="900px">
	<tr>
		<td style="width: 80px">Date</td>
		<td>Information</td>
	</tr>
	<?php
	// Start loop to pull all L status discs from the dbase.
$sql = "SELECT * FROM LF WHERE status='F' ORDER BY `course` ASC  LIMIT 0 , 150";
			  dosql($sql, "fellon");
			  // Now make a while statement to grab only the general topics.
			  while ($row = mysql_fetch_array($_SESSION['result'])) {
			  $make = $row['make'];
			  $model = $row['model'];
			  $course = $row['course'];
			  $weight = $row['weight'];
			  $color = $row['color'];
			  $date1 = $row['date'];
			  $name = $row['name'];
			  $did = $row['did'];
			  $idc = $row['idc'];
			  $hole =$row['hole'];
// Now populate the tables			  
?>
	<tr>
	<form action="do_disc.php" method="post">
		<td><?php echo $date1;?></td>
		<td><?php 
		echo 'FOUND: ';
		echo $color;
		echo ' '; 
		echo $make; 
		echo ' ';
		echo $model; 
		echo ' at ';
		echo $course; 
		echo '  Please contact ';
		echo "<input type=hidden name=did value=$did><input name=sbmtBtn type=submit value=$name>";
		echo "<br>";
		echo "Found on hole $hole :: Info: $idc";
		?></td>
		</form>
	</tr>
	<?php // Kill the loop
	}
	?>
</table>
</p>
<p>Returned to Owner:<br>
<table class="auto-style3" width="900px">
	<tr>
		<td style="width: 80px">Date</td>
		<td>Information</td>
	</tr>
	<?php
	// Start loop to pull all L status discs from the dbase.
$sql = "SELECT * FROM LF WHERE status='R' ORDER BY `course` ASC  LIMIT 0 , 150";
			  dosql($sql, "fellon");
			  // Now make a while statement to grab only the general topics.
			  while ($row = mysql_fetch_array($_SESSION['result'])) {
			  $make = $row['make'];
			  $model = $row['model'];
			  $course = $row['course'];
			  $weight = $row['weight'];
			  $color = $row['color'];
			  $date1 = $row['date'];
			  $name = $row['name'];
			  $did = $row['did'];
// Now populate the tables			  
?>
	<tr>
		<td><?php echo $date1;?></td>
		<td><?php 
		echo 'Returned: ';
		echo $color;
		echo ' '; 
		echo $make; 
		echo ' ';
		echo $model; 
		echo ' at ';
		echo $course; 
		echo '  by ';
		echo $name;
		?></td>
	</tr>
	<?php // Kill the loop
	}
	?>
</table>
</p>
<p>Questions, comments? Contact Phil Brock via Facebook.</p>
