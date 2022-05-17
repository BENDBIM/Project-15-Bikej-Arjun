<?php
//include auth.php file on all secure pages
include("sess.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="style.css" />
</head>

		<header>
           
       	 <div class="intro">
  			<h2 >BIKERJ</h2>
 				 <p >ONLINE BIKE RENT PORTAL..</p> <br/>
			</div>
           
        </header>
        
        
<body>
 <nav id="main-navigation">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="logout.php">Logout</a></li>

            </nav>
    



<div >
  <img src="first.jpg" style="width:100% height:50%">
 
</div>
	

<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
    <div class="desc">
      <h2>Find the Best <span>Bike For You</span></h2>
      <p>You will be able to fully enjoy your holiday and your ride! Any problems? Our passionate team will be happy to help you!! No waste of time during your holidays to find a rental point on the spot! No language barrier, thanks to our multilingual team! At the same price you would pay on the spot! We have best bikes with best deals</p>
    </div>

<div>
	<table >
		
		<tr><img src="third.jpg" ></tr>
		 <tr><img src="fourth.jpg" ></tr>
		 <tr><img src="first.jpg" ></tr>
	</table>
</div>
</div >
        <footer class="footer">
            Contact us at arjun@gmail.com
        </footer>
</body>
</html>

