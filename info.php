<?php
//session_start();
/*if(!isset($_SESSION['user']))
{
header('location:index.php');
}*/
include('dbconfig.php');

?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#titles
		{
			height: 350px;
			width : 250px;
			float: left;
		}
		#intext
		{
			height: 350px;
			width: 190px;
			float: left;
		}
		input
		{
			margin-bottom: 10px;
			width: 200px;	
		}
		body
		{
			background: #f2f2f2;
			color : black;
		}
		form
		{
			height: 450px;
			width: 450px;
			margin: 0px auto;
			position: relative;
		}
		label
		{
			line-height: 30px;
			font-size: 20px;
		}
		input[type=submit]
		{
			background-color: #808080;
  			border: none;
  			color: white;
  			padding: 16px 32px;
  			text-decoration: none;
  			margin: 4px 2px;
  			cursor: pointer;
  			width: 450px;
  			font-size: 35px;
		}
	</style>
</head>
<body>
	<div id="form">
		<form action="info_connect.php" method="post" enctype="multipart/form-data">
			<h1><b><center>Application </center></b></h1>
				<div id="titles">
					<label>Enter Enrollment No : </label><br>
					<label>Enter Full Name : </label><br>
					
					<label>Department : </label><br>
					<label>Year : </label><br>
					<label>Reason For Leaving institute : </label><br>
					<!--<label>Enter Your Sub - Cast : </label><br>
					<label>Enter Your Nationality : </label><br>
					<label>Enter Date Of Birth : </label><br>
					<label>Enter Place Of Birth : </label><br>
					<label>Institution Last Attended : </label><br>
					<label>Enter Branch Name : </label><br>-->
				</div>
				
				<div id="intext">
					<input type="text" name="tx1" required><br>
					<input type="text" name="tx2" required><br>
					<select name="depa" class="form-control" value=" ">
						<?php
						$sql=mysqli_query($conn,"select * from departments");
						while($r=mysqli_fetch_array($sql))
						{
						echo "<option value='".$r['department']."' name='department'>".$r['department']."</option>";
						}
							 ?>
					</select><br><br>
					<input type="text" name="tx3" required><br>
					<input type="text" name="tx4" required><br>
					
					<!--<input type="text" name="tx7" required><br>
					<input type="date" name="tx8" required><br>
					<input type="text" name="tx9" required><br>
					<input type="text" name="tx10" required><br>
					<input type="text" name="tx11" required><br>-->
				</div>

				<h2><b><center>Please Upload Following Documents : </center></b></h2>
		<table border="2px solid black" align="center" width="100%">
			<tr>
				<th>Document Name : </th>
				<th>Upload Here : </th>
			</tr>
			<tr>
				<td>
					Fee Receipts* : 
				</td>
				<td>
					<input type="file" name="fee">
				</td>
			</tr>
			<tr>
				<td>
					Scholarship Receipt: 
				</td>
				<td>
					<input type="file" name="scholarship">
				</td>
			</tr>
			<tr>
				<td>
					LC Application : 
				</td>
				<td>
					<input type="file" name="app">
				</td>
			</tr>
			<tr>
				<td>
					First Semester Marksheet : 
				</td>
				<td>
					<input type="file" name="sem1">
				</td>
			</tr>
			<tr>
				<td>
					Second Semester Marksheet : 
				</td>
				<td>
					<input type="file" name="sem2">
				</td>
			</tr>
			<tr>
				<td>
					Third Semester Marksheet : 
				</td>
				<td>
					<input type="file" name="sem3">
				</td>
			</tr>
			<tr>
				<td>
					Fourth Semester Marksheet : 
				</td>
				<td>
					<input type="file" name="sem4">
				</td>
			</tr>
			<tr>
				<td>
					Fifth Semester Marksheet : 
				</td>
				<td>
					<input type="file" name="sem5">
				</td>
			</tr>
			<tr>
				<td>
					Sixth Semester Marksheet : 
				</td>
				<td>
					<input type="file" name="sem6">
				</td>
			</tr>
		</table>
		<br><br>
		
		<input type="submit" name="submit" value="Submit" width="100px">
		
		</form>

	</div>
</body>
</html>