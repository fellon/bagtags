<?php
session_start();
/*
  Disc Lost and Found
  Created by Phil Brock
  Start Date: 5/20/2012
*/

// Grab tools
include_once('common.php');
// This will display all the info regarding the lost/found disc.  I think we need a ID now to make this work.
// Added did. Disc ID.
// We can send any one as a link to this page with the did attached and it will let us process it.
// Get disc ID. And pull data.
$did = $_POST['did'];
if ($did !="") {
  $sql = "SELECT * FROM LF WHERE did='$did'";
			  dosql($sql, "fellon");
			  // Now make a while statement to grab only the general topics.
			  while ($row = mysql_fetch_array($_SESSION[result])) {
			  $make = $row['make'];
			  $model = $row['model'];
			  $course = $row['course'];
			  $weight = $row['weight'];
			  $color = $row['color'];
			  $date1 = $row['date'];
			  $name = $row['name'];
			  $info = $row['info'];
			  $hole = $row['hole'];
			  $status = $row['status'];
			  $idc = $row['idc'];
			  $reward = $row['reward'];
			  }
			  }
			  ?>

<p class="auto-style1">Disc info</p>
<?php
// format data, create a form. Make some magic buttons.
if ($status == "L") {
	echo $date1;
	echo '<br>'; 
		echo '  LOST:  ';
		echo $color;
		echo ' '; 
		echo $make; 
		echo ' ';
		echo $model; 
		echo ' '; 
		echo $weight;
		echo '<br>';
		echo 'At ';
		echo $course;
		echo ' on hole ';
		echo $hole; 
		echo '<br>';
		echo $idc;
		echo '<br>';
		echo $name;
		echo ' at ';
		echo $info;
		echo '.';
		}
		
if ($status == "F") {
	echo $date1;
	echo '<br>'; 
		echo '  FOUND:  ';
		echo $color;
		echo ' '; 
		echo $make; 
		echo ' ';
		echo $model; 
		echo ' '; 
		echo $weight;
		echo '<br>';
		echo 'At ';
		echo $course;
		echo ' on hole ';
		echo $hole; 
		echo '<br>';
		echo $idc;
		echo '<br>';
		echo $name;
		echo ' at ';
		echo $info;
		echo '.';

		}
?>
<head>
<style type="text/css">
.auto-style1 {
	font-size: large;
}
</style>
</head>

<p>If this disc or post is yours please process it when it is complete.</p>
<form action="proc_disc.php" method="post">
<select name="option">
				<option selected="" value="V">Done Viewing</option>
				<option value="D">Delete Post</option>
				<option value="R">Disc Returned</option>
			</select> 
			<input name="did" type="hidden" value="<?php echo $did; ?>">
	<input name="sbmtBtn" type="submit" value="Complete"></form>

<p>Return to the <a href="lostfound.php">Lost &amp; Found</a></p>


