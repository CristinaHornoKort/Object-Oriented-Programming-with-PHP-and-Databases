<?php

	//php function used to connect to a MySQL Database
	//localhost - host
	//root - username of MySQL
	//blank - password of MySQL
	//guestbook_db - Database to connect to
	//we could also add the port used by default (3306), if we need to change it ex.3307 
	
	$connection = mysqli_connect("localhost", "root", "", "guestbook_db"); 

?>