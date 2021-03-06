
<?php
/*
-----------------------------------------------------------------------------------------------------------------------
Script Name: register.php
Author: <type your name>
Description: The page to sign in or to register record in the database
-----------------------------------------------------------------------------------------------------------------------
*/
?>

<style>
.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.User {
  float: left;
  overflow: hidden;
}

.User .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .User:hover .dropbtn {
  background-color: red;
}

.User-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.User-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.User-content a:hover {
  background-color: #ddd;
}

.User:hover .User-content {
  display: block;
}
body {
	background-color: #d2f6c5;
	height:100%;
}

.header {
  text-align: left;
  background: #d2f6c5;
  font-size: 25px;
  width: 100%;
}

table {
	border: 1px solid black;
	width: 580px;
	line-height: 20px;
	border-collapse: collapse;
	margin-top:50px;
	margin-bottom:200px;
	background-color: #99f3bd;
	margin-left:450px;
	margin-right:200px;
	position: absolute;

	
}
th {
	height: 5px;
	border: 1px solid black;
	margin-top:3px;
	margin-bottom:10px;
	border-align: center;
	
}
tr {
	align: center;
	border: 1px solid black;
	pading: 0 5px;
}
td {
	align: center;
	border: 1px solid black;
	padding: 0 5px;
}
.logo img {
      float: left;
      max-width: 50px;
    }
</style>


<div class="header"> 
<div class="logo">
      <img src="logo.png" alt="">
 </div>
<h2 Style= "color:black">D'NEXTGEN TEAM PORTFOLIO</h2>
<hr>
<div class="navbar">
  <a href="homepageadmin.php">Home</a>
   <div class="User">
    <button class="dropbtn">Admin
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="User-content">
    <a href="projectview.php">View Users</a>
	<a href="projectupdate.php">Update Users</a>
<a href="projectdelete.php">Delete Users</a>
<a href="viewfeedback.php">View Users Feedback</a>
    </div>
  </div> 
<div class="User">
    <button class="dropbtn">Project
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="User-content">
	 <a href="createprojectadmin.php">Register New Project</a>
    <a href="viewprojectadmin.php">View Register Project</a>
    <a href="deleteprojectadmin.php">Delete Project</a>
	<a href="updateprojectadmin.php">Update Project</a>
    </div>
  </div> 
	  <a href="Aboutusadmin.php">About Us</a>
  <a href="projectlogin.php">Logout</a>
 </div>
</div>
</div>
<?php
include('mysql_connect.php');
//$query= "SELECT * FROM newProject";
$query= "SELECT * from newProject";
$result = @mysqli_query($conn, $query);
?>

<html>
<table class="center">
	<tr>
		<th colspan="12"><h1>REGISTER PROJECTS</h1></th>
	</tr>
	
	<tr>
		<th>Client Name</th>
		<th>Proejct Name</th>
		<th>Project Goal </th>
		<th>Project Deliverables</th>
		<th>Initial Start Date </th>
		<th>Initial End Date</th>
	</tr>
	
<?php
	$i=0;
	while($row = mysqli_fetch_array($result))
	{
?>
	<tr>
		<td><?php echo $row[0]. "<br>"; ?></td>
		<td><?php echo $row[1]. "<br>"; ?></td>
		<td><?php echo $row[2]. "<br>"; ?></td>
		<td><?php echo $row[3]. "<br>"; ?></td>
		<td><?php echo $row[4]. "<br>"; ?></td>
		<td><?php echo $row[5]. "<br>"; 
		
		++$i; 		
}

mysqli_free_result($result);	
mysqli_close($conn);
?></td></tr>

</table>
</html>



