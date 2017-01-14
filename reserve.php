<?php

	$var1=$_POST["u"];
	$var2=$_POST["b"];

			$host="localhost";
			$username="root";
			$password="";
			$database="library";
			
			mysql_connect($host,$username,$password);
			@mysql_select_db($database) or die( "Unable to select database");

			$query="select * from users where (id = '".$var1."')";
			$run1=mysql_query($query);
			
			$query="select * from book where (id = '".$var2."')";
			$run2=mysql_query($query);
			
			if((mysql_num_rows($run1)>0)&&(mysql_num_rows($run2)>0))
			{
				$res="UPDATE `users` SET book1 = '".$var2."' WHERE id = '".$var1."'";
				mysql_query($res);
				
				
				
				
				?>
				
<!DOCTYPE html> 
<html>

<head>
  <title>HOME</title>
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
            <li class="current"><a href="index.html">Home</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="admin.html">Admin</a></li>
            <li><a href="signup.html">Membership</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div><!--close menubar-->	
      </nav>
    </header>
    
	<div id="site_content">		
	  
	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Library</h2>
            <p>Welcome to our new website. Please have a look around, any feedback is much appreciated.</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Latest Update</h2>
            <h3>August 2015</h3>
            <p>Most Recommended website of the year award.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
		<div class="sidebar">
          <div class="sidebar_item">
            <h3>September 2015</h3>
            <p>100 new books available.Membership required to view the list.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  		
        <div class="sidebar">
          <div class="sidebar_item">
            <h2>Contact</h2>
            <p>Phone: +44 (0)1234 567891</p>
            <p>Email: <a href="mailto:info@youremail.co.uk">info@youremail.co.uk</a></p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	

      <div class="slideshow">
	    <ul class="slideshow">
          <li class="show"><img width="680" height="250" src="images/lib1.jpg" alt="one"/></li>
          <li><img width="680" height="250" src="images/library.jpg" alt="two" /></li>
        </ul> 
	  </div>
	   
	  <div id="content">
        <div class="content_item">
		  <h1>Book Reserved</h1> 
         
		  
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
				echo "<center><h1>Invalid Data</h1>"; 
				echo "</center>";
				echo "</body>";
				echo "</html>";
					
					
			}
				
			
?>
