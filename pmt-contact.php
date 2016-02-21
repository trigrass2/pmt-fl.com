<?php
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the captcha field is not empty
	if((trim($_POST['captcha']) == '') || (trim($_POST['captcha']) != '3')){
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Check to make sure that the subject field is not empty
	if(trim($_POST['subject']) == '') {
		$hasError = true;
	} else {
		$subject = trim($_POST['subject']);
	}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}
	
	//Jam that phone number in there
	
	$phone = trim($_POST['phone']);

	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'sales@pmt-fl.com'; //Put your own email address here
		$body = "Name: $name \n\nEmail: $email \n\nPhone: $phone \n\nSubject: $subject \n\nComments:\n $comments";
		$headers = 'From: PMT Web Contact <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		
		//DB Bit
		
			$dbhost = 'localhost';
			$dbuser = 'precitb3_pmtdb1';
			$dbpass = 'zq7cTw*nevmy';

			$dbh = mysql_connect ($dbhost, $dbuser, $dbpass)
			or die ('I cannot connect to the database.');
			//mysql_select_db ("precitb3_pmtuserinfo");

			if(! $dbh )
			{
			  die('Could not connect: ' . mysql_error());
			}
			//echo 'Connected successfully<br />';

			$name = mysql_real_escape_string($name);
			$subject = mysql_real_escape_string($subject);
			$email = mysql_real_escape_string($email);
			$esccomments = mysql_real_escape_string($comments);
			$submit_date = date('Y-m-d');
			$infotyp = 1;

			$sql = "INSERT INTO user_form_info ".
				   "(user_name,user_phone,user_email,user_subject,user_msg,submit_date,info_type) ".
				   "VALUES ".
				   "('$name','$phone','$email','$subject','$esccomments','$submit_date','$infotyp')";
			mysql_select_db( 'precitb3_pmtuserinfo' );
			$retval = mysql_query( $sql, $dbh );
			if(! $retval )
			{
			  die('Could not insert record: ' . mysql_error());
			}
			
			mysql_close($dbh);
		
		//END DB Bit
		
		
		$emailSent = true;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Contact PMT | Precision Measurement Technologies</title>

	<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
	<meta name="keywords" content="precision measurement technologies, time to digital tech" />
	<meta name="description" content="Precision Measurement Technologies specializes in high resolution time-to-digital converters and all-in-one build solutions." />	

	<link rel="stylesheet" type="text/css" href="/css/control.css" />
	<link rel="shortcut icon" type="image/x-icon" href="http://www.pmt-fl.com/favicon.ico" />
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

	<script src="/js/javascript.js" type="text/javascript"></script>
	<script src="/js/javascript-menu.js" type="text/javascript"></script>
	<script src="/js/subnav.js" type="text/javascript"></script>
	
	<script src="/js/lightbox.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="/css/lightbox.css" />
	
	<link rel="stylesheet" href="/css/contact.css" type="text/css" media="screen" />
	
	<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		// validate signup form on keyup and submit
		var validator = $("#contactform").validate({
			rules: {
				contactname: {
					required: true,
					minlength: 2
				},
				email: {
					required: true,
					email: true
				},
				phone: {
					required: false,
					//email: true
				},
				subject: {
					required: true,
					minlength: 2
				},
				message: {
					required: true,
					minlength: 10
				},
				captcha: {
					required: true,
					equalTo: '#bank'
				}
			},
			messages: {
				contactname: {
					required: "Please enter your name",
					minlength: jQuery.format("Your name needs to be at least {0} characters")
				},
				email: {
					required: "Please enter a valid email address",
					minlength: "Please enter a valid email address"
				},
				phone: {
					required: "Please enter a valid email address",
					minlength: "Please enter a valid email address"
				},
				subject: {
					required: "You need to enter a subject!",
					minlength: jQuery.format("Enter at least {0} characters")
				},
				message: {
					required: "You need to enter a message!",
					minlength: jQuery.format("Enter at least {0} characters")
				},
				captcha: {
					required: "This is a required field.",
					equalTo: jQuery.format("Not a valid entry.")
				}
			},
			// set this class to error-labels to indicate valid fields
			success: function(label) {
				label.addClass("checked");
			}
		});
	});
	</script>


</head>

<body onload="cssdropdown.startchrome('chromemenu');">

<div id="containerOut">
	<div id="containerIn">
	
<?php include("includes/header-nav.php"); ?>
		
<?php include("includes/subnav-gen.php"); ?>
		
		<div id="subBody">
			<div id="subTop">
				<h1 class="sub">Contact PMT</h1>
				<img class="main" src="/images/gen/clearwater-fl.jpg" alt="" />
				
				<p class="bold">Precision Measurement Technologies<br />4400 140th Ave N<br />Ste 100<br />Clearwater, Florida 33762</p>
				<p class="bold">Ph: 727-532-6144<br />Fax: 727-532-6799</p>
				<p class="bold">Email: <a href="mailto:sales@pmt-fl.com">sales@pmt-fl.com</a></p>
				<p>Contact us with the information listed or fill out the form below to send a message directly.</p>
				
			</div>
			<div id="subSecond">
			
				<div id="sub2full">
				
				<h2 class="sub">Contact Us</h2>
				<div class="wrapper">
				<div id="contactWrapper" role="form">
				
					<?php if(isset($hasError)) { //If errors are found ?>
						<p class="error">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
					<?php } ?>

					<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
						<div class="success">
							<p><strong>Email Successfully Sent!</strong></p>
							<p>Thank you for using our contact form <strong><?php echo $name;?></strong>! Your email was successfully sent and we 'll be in touch with you soon.</p>
						</div>
					<?php } ?>

					<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
						<div class="stage clear">
							<label for="name"><strong>Name: <em>*</em></strong></label>
							<input type="text" name="contactname" id="contactname" value="" class="required" role="input" aria-required="true" />
						</div>

						<div class="stage clear">
							<label for="email"><strong>Email: <em>*</em></strong></label>
							<input type="text" name="email" id="email" value="" class="required email" role="input" aria-required="true" />
						</div>
						
						<div class="stage clear">
							<label for="phone"><strong>Phone:</strong></label>
							<input type="text" name="phone" id="phone" value="" class="" role="input" aria-required="false" />
						</div>

						<div class="stage clear">
							<label for="subject"><strong>Subject: <em>*</em></strong></label>
							<input type="text" name="subject" id="subject" value="" class="required" role="input" aria-required="true" />
						</div>

						<div class="stage clear">
							<label for="message"><strong>Message: <em>*</em></strong></label>
							<textarea rows="8" name="message" id="message" class="required" role="textbox" aria-required="true"></textarea>
						</div>
						
						<div class="stage clear">
							<label for="captcha"><strong><img src="/images/all/contact-cap.png" alt="one plus two" style="border:0;margin-left:0;" /><em>*</em></strong></label>
							<input type="text" name="captcha" id="captcha" value="" class="required" role="input" aria-required="true" />
						</div>
											
						<p class="requiredNote"><em>*</em> Denotes a required field.</p>
						
						<input type="submit" value="Send Message" name="submit" id="submitButton" title="Click here to submit your message!" />
						<input type="hidden" name="bank" id="bank" value="3" />
					</form>
					</div>
					</div>
				
				</div>
			</div>
			<div id="subThird">
				<div id="sub3left">
					<h2 class="sub">Our Offices</h2>
					<p><img src="/images/gen/clearwater-office.jpg" alt="" /></p>
				</div>

			</div>

		</div>
		<div class="clearboth"></div>
		
		
<?php include("includes/footer.php"); ?>

		<div class="clearboth"></div>
	</div>
	<div class="clearboth"></div>
</div>
</body>
</html>
