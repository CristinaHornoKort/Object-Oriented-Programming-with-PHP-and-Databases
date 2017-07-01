<!DOCTYPE html>
<html>
	<head>
		<title>Geology of The Maltese Islands</title>
		<link rel="stylesheet" href="styles.css" />
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/jquery.validate.js" type="text/javascript"></script>
			<script type="text/javascript">
			$(document).ready(function() {
				// validate the comment form when it is submitted
				$("#commentForm").validate();
			});
		</script>
		<style type="text/css">
			.error {
		
				padding: 1px;
				color: red;
			}
		</style>
		
		
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
					<img src="images/Blue grotto.jpg" alt="Blue grotto" width="210" />
				</div>
				<div id="logo_text">
					<h1>Geology of The Maltese Islands</h1>
					<h3>(Malta, Gozo & Comino)</h3>
				</div>
			</div>
			<div class="clear"></div>
			
			<div id="menu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="index.php?page=about">About</a></li>
					<li><a href="index.php?page=guestbook">Guestbook</a></li>
				</ul>
			</div>
			<div class="clear"></div>
			
			<?php
				if (isset($_GET['page'])) {
					//store value of page into $page
					$page = $_GET['page'];
					
					//alter the index.php page to read a query string 'page'(using $_GET)
					if (file_exists($page.".php")) {	
						include($page.".php");	
					}
					//otherwise, include notfound.php
					else {
						include('notfound.php');
					}
				}
				else {
					include("home.php");
				}
			?>
			
			<div id="footer">
				<div class="left">
				<?php
					echo date("l dS F Y H:i");
				?>
				</div>
				<div class="right">
					Copyright &copy; 2016. All Rights Reserved.
				</div>
			</div>
		</div>		
	</body>
</html>