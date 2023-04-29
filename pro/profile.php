<?php
include_once('config.php');
$query = "select * from trackTable";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>

<head>
	<title>Side Bar Profile with Upper Navbar</title>
	<link rel="stylesheet" href="profile.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Special+Elite&family=Merriweather&family=Questrial&display=swap"
		rel="stylesheet">
</head>

<body>
	<nav>
		<div class="twoTogethers">
			<img src="logoImg.png" alt="" class="logoImg">
			<span class="logo">PROJECT.LY</span>
		</div>
		<ul>
			<!-- <li><a href="#">HOME</a></li>
		  <li><a href="#">ABOUT</a></li> -->
			<li><a href="logout.php">LOGOUT</a></li>
		</ul>
	</nav>
	<!-- <div class="dropdown">
		<select>
			<option value="value1">All</option>
			<option value="value2">This Week</option>
			<option value="value3">This Month</option>
		</select>
	</div> -->

	

	<!-- <table style="width:100%">
		  <tr>
			<th>S.NO.</th>
			<th>APPLIED FOR</th>
			<th>DATE</th>
			<th>ORGANIZATION / COURSE NAME</th>
		  </tr>
		 
		  
		  
		</table>
		</div>
		 -->



	<div class="sidebar">
		<div class="profile">
			<div class="profile-pic">
				<label class="-label" for="file">
					<span class="glyphicon glyphicon-camera"></span>
					<span>Change Image</span>
				</label>
				<input id="file" type="file" onchange="loadFile(event)" />
				<img src="profile-pic.jpeg" id="output" width="200" />
			</div>

			<!-- <img src="images/cute-robot-wearing-headphone-cartoon-vector-cartoon.avif" alt="Profile Image">  -->
			<h3>Mickey-Mouse</h3>


			<!-- <button class="btn"><a href="editprofile.html">Edit Profile</a></button> -->
			<a href="editprofile.html" class="edit-profile">Edit Profile</a>


		</div>

		<hr width="100%" color="white" />
		<!-- <a href="#" class="skills">SKILLS</a> -->

	</div>

	<h2 align="center" style="margin-left:7rem; margin-top:2rem;">This is your progress bar</h2>

	<div class="table_div">
	<table class="customTable" align="center" border="2px solid #7ea8f8" style="margin-left:23rem; margin-top:2rem; background: #e5cbeb; border-collapse: collapse;">
		<thead  style="background-color: #aa6cd4; color: white; font-family: 'Open Sans', sans-serif; padding:2rem 4rem;">
		<tr>
			<th> SNo.</th>
			<th> Name </th>
			<th id="email_head"> Email </th>
			<th> Job Title</th>
			<th id="orgname_head"> Organization Name</th>
			<th> Date</th>
		</tr>
		</thead>

		<?php
		while ($rows = mysqli_fetch_assoc($result)) {
			// print_r($rows);
			?>
			<tr>
				<td>
					<?php echo $rows['sno']; ?>
				</td>
				<td>
					<?php echo $rows['name']; ?>
				</td>
				<td>
					<?php echo $rows['email']; ?>
				</td>
				<td>
					<?php echo $rows['jobTitle']; ?>
				</td>
				<td>
					<?php echo $rows['organ_name']; ?>
				</td>
				<td>
					<?php echo $rows['date']; ?>
				</td>
			</tr>
			<?php
		}
		?>

	</table>
	</div>

	<script src="profile.js"></script>


</body>

</html>