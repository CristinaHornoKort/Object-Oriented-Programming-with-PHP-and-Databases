<?php

	//isset function to verify if any POST data was sent to the page
	if (isset ($_POST['submit_button'])){
		//reading the data from the html form
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$country = $_POST['country'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$time = date("Y-m-d H:i:s");
		

		//validate input fields
		$one_or_more_fields_empty_or_incorrect_data = false;

		$error_msgs = '';

		if ($name == ""){ //if name is empty
			$one_or_more_fields_empty_or_incorrect_data = true;
			$error_msgs = "<h5>Please enter your name</h5>";
		}

		//surname is not required

		if ($email == ""){ //if email is empty
			$one_or_more_fields_empty_or_incorrect_data = true;
			$error_msgs .= "<h5>Please enter your email</h5>";
		}

		if (!filter_var($email,FILTER_VALIDATE_EMAIL)){ //if email is incorrect
			$one_or_more_fields_empty_or_incorrect_data = true;
			$error_msgs .= "<h5>Please enter a correct email</h5>";
		}

		if ($message == ""){ //if message is empty
			$one_or_more_fields_empty_or_incorrect_data = true;
			$error_msgs .= "<h5>Please enter your message</h5>";
		}

		//if all the fields are filled in
		if ($one_or_more_fields_empty_or_incorrect_data == false){
			require_once("connect.php");

			//save guestbook_entries to the table created
			$sql_command = "INSERT INTO guestbook_entries (name, surname, country_id, message, time, email) VALUES ('$name', '$surname', '$country', '$message', '$time', '$email')";

			//send query to $connection (MySQL link)
			mysqli_query($connection, $sql_command) or die (mysqli_error($connection));

			$answer_msg = "<br/><h4><b>User registered succesfully!</b></h4><br/><br/>";

			//check if row was inserted
			if(mysqli_affected_rows  ($connection) == 1){
				$answer_msg = "<br/><h4><b>User registered succesfully!</b></h4><br/><br/>";
			}
			else{
				echo "<h5>Registration failed!</h5>";
			}
		}

		//if $error_msgs is not empty
		if ($error_msgs != "") {
			//send the messages to the guestbook page
			header("Location: index.php?page=guestbook&errors=$error_msgs");
		}
		
		//if $answer_msg is not empty
		else if ($answer_msg != "") {
			//send the answer to the guestbook page
			header("Location: index.php?page=guestbook&answer=$answer_msg");
		}
	}
?>


