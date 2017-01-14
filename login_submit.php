<?php

	$var1=$_POST["id"];
	$var2=$_POST["pass"];

			$host="localhost";
			$username="root";
			$password="";
			$database="library";
			
			mysql_connect($host,$username,$password);
			@mysql_select_db($database) or die( "Unable to select database");

			$query="select * from users where (id = '".$var1."' && password = '".$var2."')";
			$run=mysql_query($query);
			
			if(mysql_num_rows($run)>0)
			{
				while ($row=mysql_fetch_array($run))
				{
					for($i=0;$i<10;$i++)
					{
						$v[$i] = $row[$i];
					}	
				}
				
				?>
<html>

<head>
  <title>LOGIN</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
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
            <li class="current"><a href="login.html">Login</a></li>
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
				<h1>Welcome <?=$v[0]?></h1>
		<table border="0" align ="center" cellspacing="5" cellpadding="5" width="400" height="100">
			<tr><td align ="center">ID: </td><td align ="center"><?=$v[1]?></td></tr>
			<tr><td align ="center">Email Id: </td><td align ="center"><?=$v[2]?></td></tr>
			<tr><td align ="center">Gender: </td><td align ="center"><?=$v[3]?></td></tr>
			<tr><td align ="center">Contact no.: </td><td align ="center"><?=$v[5]?></td></tr>
			<tr><td align ="center">Reserved Books: </td><td align ="center"><?=$v[6]?></td></tr>
			<tr><td align ="center"><a href="reserve.html">Reserve</a> </td><td align ="center"><a href="search.html">Search</a></td></tr>
		</table>
		  
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