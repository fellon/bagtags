<?php
// session_start();
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
<title>Peregrine Point Bag Tag Standings</title>
</head>

<p class="auto-style1">
<img alt="2012bagtag" height="100" longdesc="2012 Bag Tag number 1" src="bagtag1_2012.jpg" width="100"><em><span class="auto-style2">Peregrine 
Point Bag Tag Standings</span></em></p>
<table style="width: 29%">
	<tr>
		<td style="width: 185px"><a href="index.php">Peregrine Point BagTags</a></td>
		<td><a href="lostfound.php">Disc Lost &amp; Found</a></td>
	</tr>
</table>
</p>
<p>
Ratings are maintained by user submissions.<br>There is no  guarantee of accuracy.<br>
You must first "<a href="add_player.php">register</a>" yourself into the system.<br>
<br><a href="update_tags.php">Submit a tag 
update</a>. </p>

<table style="width: 400px">
	<tr>
		<td><strong>Tag #</strong></td>
		<td><strong>Player Name</strong></td>
		<td><strong>Updated</strong></td>
	</tr>
	


<?php 
  // Start the table before we call this loop.
  
  $sql = "SELECT * FROM tag_players ORDER BY `playerTag` ASC  LIMIT 0 , 150";
			  dosql($sql, "fellon");
			  // Now make a while statement to grab only the general topics.
			  $total_players = 0;
			  while ($row = mysql_fetch_array($_SESSION['result'])) {
			  $playerTag = $row['playerTag'];
			  $playerName = $row['playerName'];
			  $lastUpdate = $row['lastUpdate'];
			  $total_players++;
	?>
  <tr>
		<td><?php echo $playerTag; ?></td>
		<td><?php echo $playerName; ?></td>
		<td><?php echo $lastUpdate; ?></td>
	</tr>
<?php
// kill the while loop
}
?>
  </table>
  <br>There are currently <?php echo $total_players; ?> tag holders registered out of 150 tags.
  <br><a href="log.php">Log</a>

<p>I have not added self error checking as of yet. So please make sure that your 
fields are filled out correctly. If they do not update as you like, then just 
try again.<br>Code maintained by Phil. Questions, comments, or suggestions, 
please contact Phil Brock via Facebook.</p>
