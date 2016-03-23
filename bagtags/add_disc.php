<?php
session_start();
/*
  Disc Lost and Found
  Created by Phil Brock
  Start Date: 5/20/2012
*/

// Grab tools
include_once('common.php');

// Create form to add a disc
?>
<form method="post" action="do_add_disc.php">
<table>
	<tr>
		<td>* Status:</td>
		<td>
			<select name="status">
			<option>Choose one</option>
			<option value="L">LOST</option>
			<option value="F">FOUND</option>
			</select>	
			</td>
		<td>* Date lost / found:</td>
		<td>
			<input name="date" size="20" type="text">
		</td>
	</tr>
	<tr>
		<td style="height: 28px;">Make:</td>
		<td style="height: 28px;">

			<input name="make" size="20" type="text">
		</td>
		<td style="height: 28px;">Model:</td>
		<td style="height: 28px;">
			<input name="model" size="20" type="text">
		</td>
	</tr>
	<tr>
		<td>Weight:</td>
		<td>
			<input name="weight" size="3" type="text">
		</td>
		<td>* Color(s):</td>
		<td>
			<input name="color" size="50" type="text">
		</td>
	</tr>
	<tr>
		<td>* Course:</td>
		<td>
			<input name="course" size="50" type="text">
		</td>
		<td>Hole #:</td>
		<td>
		
			<input name="hole" size="3" type="text">
		</td>
	</tr>
	<tr>
		<td>* Your name:</td>
		<td>
			<input name="name" size="50" type="text">
		</td>
		<td>* Contact info (Phone or e-mail):</td>
		<td>
			<input name="info" size="50" type="text">
		</td>
	</tr>
	<tr>
		<td>Identifying Characteristics:</td>
		<td>
			<input name="idc" size="75" type="text">
		</td>
		<td>Reward?</td>
		<td>
		
			<select name="reward">
			<option value="0">Choose one</option>
			<option value="1">YES</option>
			<option value="0">NO</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			<input name="Submit" type="submit" value="Submit">
		</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>
</form>

