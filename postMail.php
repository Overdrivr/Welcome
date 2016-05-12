<?php
include('config.php');

session_start();

if(isset($_SESSION['token']) && isset($_POST['token']) && isset($_POST['mail'])) //The token is used to prevent repeat attack and avoid double submit
{
	if($_SESSION['token'] == $_POST['token'])
	{
		if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
			$mail = $db->escape_string($_POST['mail']);
			$sql = "SELECT * from mails WHERE mail='".$mail."' ";
			if(!$result = $db->query($sql)){
				die('There was an error running the query [' . $db->error . ']');
			}
			if($result->num_rows == 0) //Check the mail is not already present
			{
				echo "ok";
				$sql = "INSERT INTO mails  VALUES (NULL, '".$mail."', NOW())";
				if(!$result = $db->query($sql)){
					die('There was an error running the query [' . $db->error . ']');
				}
				unset($_SESSION['token']);
			}
		}
	}
}
else
	die('Bad Token');
?>
