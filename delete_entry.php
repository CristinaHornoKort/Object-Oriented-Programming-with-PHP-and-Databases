<?php
    //read $_GET['id']
    //store value of id (id is used in the url into delete_entry.php?id= ) $id
    $id = $_GET['id'];

    if (is_numeric($id)) {

        //prepare SQL command
        require_once("connect.php");
        $sql_command = "DELETE FROM guestbook_entries WHERE id = ".$id;

        //send command
        mysqli_query($connection, $sql_command) or die (mysqli_error($connection));
    }

	//if 1 row is affected/deleted
    if(mysqli_affected_rows  ($connection) == 1){
        $answer_msg = "<h5>User deleted!</h5>";
		header("Location: index.php?page=guestbook&answer=$answer_msg");
    }
	//if no row has been deleted
    else{
        $error_msgs = "User not deleted!";
		header("Location: index.php?page=guestbook&errors=$error_msgs");
    }
	
?>
	