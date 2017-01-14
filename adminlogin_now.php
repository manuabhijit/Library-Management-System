<?php

	$var1=$_POST["id"];
	$var2=md5($_POST["pass"]);

			$host="localhost";
			$username="root";
			$password="";
			$database="library";
			
			mysql_connect($host,$username,$password);
			@mysql_select_db($database) or die( "Unable to select database");

			$query="select * from admin where (id = '".$var1."' && password = '".$var2."')";
			$run=mysql_query($query);
			
			if(mysql_num_rows($run)>0)
			{
				?>
				
<!DOCTYPE html> 
<html>

<head>
  <title>Admin</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">		

    <header>
	  <div id="strapline">
	    <div id="welcome_slogan">
	      <h3>Online Library Management System </h3>
	    </div><!--close welcome_slogan-->
      </div><!--close strapline-->	  
	  <nav>
	    <div id="menubar">
          <ul id="nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="login.html">Login</a></li>
            <li class="current"><a href="admin.html">Admin</a></li>
            <li><a href="signup.html">Membership</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div><!--close menubar-->	
      </nav>
    </header>
    
	<div id="site_content">		
	   
	  <div id="content">
        <div class="content_item">
		 <center> <h1>Access Granted</h1> 
		  
		  
			<h1><a href="addbook.html">ADD Book</a></h1>
				
			<h1><a href="removebook.html">Remove Book</a></h1>
				
        </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
		  </center>  
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content-->  	

    <footer>
	  <a href="#">Hima Bhatia</a> | <a href="#">131317</a> | <a href="#">9816928095</a> | <a href="#">himabhatia54@gmail.com</a> | <a href="#">E-9</a><br/><br/>
	  <a href="#">Akhil Sharma</a> |  <a href="#">131313</a>  | 8894865323 <a href="#">sharma.akhil@gmail.com</a>
    </footer>
	
  </div><!--close main-->
  
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  
</body>
</html>


		
				<?php
				
				
				
				
				
			}
			else
			{
				echo "<html>";
				echo "<body>";
				echo "<center><h1>Access Denied</h1>"; 
				echo "</center>";
				echo "</body>";
				echo "</html>";
			
			
			}




?>