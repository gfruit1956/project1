<?php
include("config.php");
include("session.php");

?>

<html>
<head>
<title>Monitoring Page</title>
   <link rel="stylesheet" href="style.css" type="text/css"/>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<h1 align = "center">Lecturer Instance Report</h1>
<br>
<div align = "center">
<button onClick="window.print()">Print this page</button>
</div>
<br>
<br>
<h2 align = "center">Personnel Details</h2>
<div class = "table 1", align = "center">
<table class="table table-bordered">
  <tbody>
    <?php
//select data from database and sisplay table lecturer details
$sql = "SELECT * FROM persondetails ORDER BY IDNumber ASC";
$result = mysqli_query($db,$sql);      
      $row = mysqli_num_rows($result);      
      $count = mysqli_num_rows($result);
      $myrow = $result->fetch_assoc();
	  
	  if ($result->num_rows > 0) {
		echo "<table><tr><th>ID Number</th><th>Name</th><th>Skills</th></tr>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
		  echo "<tr><td>".$row["IDNumber"]."</td><td>".$row["LecturerName"]."</td><td>".$row["LectureSkills"]."</td></tr>";
		}
		echo "</table>";
	  } else {
		echo "0 results";
	  }
?>
  </tbody>
</table>
</div>
<br>
<h2 align = "center">List by Start Date</h2>
<div class = "table 2", align = "center">
<table class="table table-bordered">
  <tbody>
    <?php
//select data from database
$sql = "SELECT * FROM courseinstant ORDER BY StartDate ASC";
$result = mysqli_query($db,$sql);      
      $row = mysqli_num_rows($result);      
      $count = mysqli_num_rows($result);
      $myrow = $result->fetch_assoc();
	  
	  if ($result->num_rows > 0) {
		echo "<table><tr><th>Lecturer ID</th><th>Course ID</th><th>Start Date</th></tr>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
		  echo "<tr><td>".$row["LecturerID"]."</td><td>".$row["CourseID"]."</td><td>".$row["StartDate"]."</td></tr>";
		}
		echo "</table>";
	  } else {
		echo "0 results";
	  }
?>
  </tbody>
</table>
</div>
<br>
<h2 align = "center">List by Lecturer</h2>
<div class = "table 3", align = "center">
<table class="table table-bordered">
  <tbody>
    <?php
//select data from database
$sql = "SELECT * FROM courseinstant ORDER BY LecturerID, StartDate ASC";
$result = mysqli_query($db,$sql);      
      $row = mysqli_num_rows($result);      
      $count = mysqli_num_rows($result);
      $myrow = $result->fetch_assoc();
	  
	  if ($result->num_rows > 0) {
		echo "<table><tr><th>Lecturer ID</th><th>Course ID</th><th>Start Date</th></tr>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
		  echo "<tr><td>".$row["LecturerID"]."</td><td>".$row["CourseID"]."</td><td>".$row["StartDate"]."</td></tr>";
		}
		echo "</table>";
	  } else {
		echo "0 results";
	  }
?>
  </tbody>
</table>
</div>
</body>
</html>
