<?php

	$error = "";
	
	$successMessage = "";
		
	if($_POST) {
			
		if(!$_POST["emailAddress"]){
			
			$error .= "An email address is required.<br>";
			
		}
		
		if ($_POST["emailAddress"] && filter_var($_POST["emailAddress"], FILTER_VALIDATE_EMAIL) == false) {
			
			$error .= "Invalid email format.<br>";
			
		}
		
		if(!$_POST["emailSubject"]){
			
			$error .= "A subject is required.<br>";
			
		}
		
		if(!$_POST["emailText"]){
			
			$error .= "The ask us field is required.<br>";
			
		}
		
		if ($error != ""){
				
			$error = '<div class="alert alert-danger" role="alert"><strong>There were error(s) in your form: </strong><br>' . $error . '</div>';
					
		} else{
			
			$emailTo = "louis.30@buckeyemail.osu.edu";
			
			$subject = $_POST['emailSubject']." FROM PORTFOLIO SITE";
			
			$content = $_POST['emailText'];
			
			$headers = "From: ".$_POST['emailAddress'];
			
			if(mail($emailTo, $subject, $content, $headers)){
				
				$successMessage = '<div class="alert alert-success" role="alert">Your email has sent! I\'ll get back to you ASAP!</div>';
				
			} else {
				
				$error = '<div class="alert alert-danger" role="alert">Your email failed to send!</div>';
				
			}
			
		}
		
	}

?>

	
<div class="container center" id="contact-div">

	<h1>Get in touch!</h1>
	
	
	<div id="errorDiv">
		
		<? echo $error; ?>
		
	</div>
	
	<div id="successDiv">
		
		<? echo $successMessage; ?>
		
	</div>
	
	<form id="contactForm" method="post">
	
		<div class="form-group">
		
			<label for="emailAddress">Email address</label>
			<input type="email" class="form-control" id="emailAddress" name="emailAddress" placeholder="name@example.com">
			
		</div>
		
		<div class="form-group">
		
			<label for="emailSubject">Subject</label>
			<input type="text" class="form-control" id="emailSubject" name="emailSubject">
			
		</div>
		
		<div class="form-group">
		
			<label for="emailText">How can I help you?</label>
			<textarea class="form-control" id="emailText" name="emailText" rows="3"></textarea>
		
		</div>
		
		<button type="submit" id="submit" class="btn btn-primary">Submit</button>
		
	</form>

</div>
