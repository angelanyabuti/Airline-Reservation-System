<?php
	session_start();
?>
<html>
	<head>
		<title>
			Welcome to Kenya Airways
		</title>
		<link rel="stylesheet" type="text/css" href="css/style2.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/shutterstock_2.jpg"/>
		<a href="home_page.php"><h1 id="title">
			Kenya Airways
		</h1></a>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
					?>
				</li>
				<li><a href="aboutus.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="contact_us.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
<li><a href="pnrall.php"><i class="fa fa-ticket" aria-hidden="true"></i> Check PNR </a></li>

				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
					?>
				</li>
			</ul>
		</div>
		<div class="container">
			<h2>About Us</h2>
			<h3>Kenya Airways, a member of the Sky Team Alliance, is a leading African airline flying to 41 destinations <br>worldwide, 34 of which are in Africa and carries over four million passengers annually. It continues to <br>modernize its fleet with its 32 aircraft being some of the youngest in Africa. This includes its flagship B787 <br>Dreamliner aircraft. The on-board service is renowned and the lie-flat business class seat on the wide-body<br> aircraft is consistently voted among the world’s top 10. Kenya Airways takes pride in being at the forefront <br>of connecting Africa to the World and the World to Africa through its hub at the new ultra-modern Terminal 1A<br> at the Jomo Kenyatta International Airport in Nairobi.<br>

Kenya Airways celebrated 43 years of operations in January 2020 and was named Africa Leading Airline 2019 by the World Travel Awards.</h3>
			<img src="images/kq.jpg">
			</div>
	</body>
</html>