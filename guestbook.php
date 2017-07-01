<div id="content">

	
	<div id="left-col">
		
		<form action="guestbook_process.php" id="commentForm" method="post">
			<?php
				//connect to database to obtain the countries availables
				require_once("connect.php");
				$sql_command = "SELECT id, name FROM countries";
				$result = mysqli_query($connection, $sql_command);
				

				//php classes we need to create the form just below
				require_once ("classes/Control.class.php");
				require_once ("classes/Textbox.class.php");
				require_once ("classes/Select.class.php");
				require_once ("classes/Textarea.class.php");
				
				//building guestbook form with php classes
				$name = new Textbox("Name:", "name", "text", "Please enter your name", "required");
				$name->draw();
				echo "</br>";
				$surname = new Textbox("Surname:", "surname", "text", "Please enter your surname", "");
				$surname->draw();
				echo "</br>";
				$country = new Select("Country:", "country", $result, "");
				$country->draw();
				echo "</br>";
				$email = new Textbox("Email address:", "email", "email", "Please enter your email", "required email");
				$email->draw();
				echo "</br>";
				$message = new Textarea("Message:", "message", "10", "30", "Please write your comments", "required");
				$message->draw();
				echo "</br>";

			?>

			<input type="submit" name = "submit_button" value="Submit" /> <!-- when press submit, the program send in post format the data to index.php?page=guestbook_process page -->
		</form>
		
	</div>

	<div id="right-col">
		<?php
			//use of query strings to pass messages from guestbook_process.php page and delete_entry.php to guestbook.php page
			if (isset($_GET['answer'])) {
				echo $_GET['answer'];
			}

			if (isset($_GET['errors'])) {
				echo $_GET['errors'];
			}
	
			//retrieve guestbook entries from database
			require_once("connect.php");
			$sql_command = "SELECT guestbook_entries.id AS guestbook_entries_id, guestbook_entries.name AS name, guestbook_entries.surname, countries.name AS country, guestbook_entries.message, guestbook_entries.time, guestbook_entries.email
				FROM guestbook_entries, countries
				WHERE guestbook_entries.country_id = countries.id;";
			$result = mysqli_query($connection, $sql_command);
		?>
		
		<h3>GUESTBOOK ENTRIES</h3>
		<br/>

		<table border="1">
			<tr>
				<th><h6>ID</h6></th>
				<th><h6>Name</h6></th>
				<th><h6>Surname</h6></th>
				<th><h6>Country</h6></th>
				<th><h6>Message</h6></th>
				<th><h6>Time</h6></th>
				<th><h6>Email</h6></th>
				<th><h6>Delete</h6></th>
			</tr>

			<?php
				//loop for every row found in $result
				//function will convert $result into a PHP array ($row)
				//$row is an array
				while($row = mysqli_fetch_array ($result) ){
					echo "<tr>";
					echo "<td><h6>".$row['guestbook_entries_id']."</h6></td>";
					echo "<td><h6>".$row['name']."</h6></td>";
					echo "<td><h6>".$row['surname']."</h6></td>";
					echo "<td><h6>".$row['country']."</h6></td>";
					echo "<td><h6>".$row['message']."</h6></td>";
					echo "<td><h6>".$row['time']."</h6></td>";
					echo "<td><h6>".$row['email']."</h6></td>";
					//link to delete_entry (delete functionality)
					echo "<td><h6><a href='delete_entry.php?id=".$row['guestbook_entries_id']."'>Delete</a></h6></td>";
					echo "</tr>";
				}
			?>

		</table>
	</div>

<div class="clear"></div>