<?php
	if(isset($_POST)){
		$name=$_POST['name'];
		$from=$_POST['email'];
		$subject=$_POST['subject'];
                $message=$_POST['message'];
                $message=$name.", ".$message;
		$recipientEmail = "developer.ramesh1@gmail.com";
		$to = $recipientEmail;
		if(mail($to,$subject,$message,$from)){
                        echo "alert('Thank you for reaching out to me.')";
		} 
		else {
			echo 'E-mail delivery failure!';
		}
	}
	else{
		echo "alert('Error: Please contact later.')";
	}
        ?>
