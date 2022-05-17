<?php
require('db.php');
include("sess.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form">


<div class="profile_nav">
        
	<ul>
		<li> <h1>Dashboard</h1> </li> 	   
		<li><a href="index.php">Home</a></li>
              <li><a href="update-pass.php">Update Password</a></li>
            <li><a href="insert.php">Insert New Record</a></li>
			  <li><a href="view.php">View Records</a><li>
                 <li><a href="logout.php">Sign Out</a></li>
          </ul>
        </div>
      
</div>



</body>
</html>