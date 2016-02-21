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

	//Check to make sure that the company field is not empty
	if(trim($_POST['company']) == '') {
		$hasError = true;
	} else {
		$company = trim($_POST['company']);
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
	$comments = $_POST['file'] . " - " . $_POST['section'];
	
	//Check region and set emailto
	if(trim($_POST['globalcheck']) == '') {
		$hasError = true;
	} else {
		$reg = trim($_POST['globalcheck']);
		$emailTo = 'sales@pmt-fl.com';
		if($reg == "na"){$regtyp = 1;}
		else if($reg == "auzb"){$regtyp = 2;}
		else if($reg == "intl"){$regtyp = 3;}
	}


	//Database, cookie, let 'em pass
	if(!isset($hasError)) {
		
		//$emailTo = 'eric_marschall@transducersdirect.com'; //Put your own email address here
		$body = "Name: $name \n\nCompany: $company \n\nEmail: $email \n\nPhone: $phone \n\nRegion: $reg \n\nDetails:\n $comments";
		$headers = 'From: PMT Web Downloads <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
		$subject = 'Download ' . $comments;

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
			$company = mysql_real_escape_string($company);
			$email = mysql_real_escape_string($email);
			$submit_date = date('Y-m-d');
			$infotyp = 3;

			$sql = "INSERT INTO user_form_info ".
				   "(user_name,user_company,user_phone,user_email,user_msg,submit_date,region_type,info_type) ".
				   "VALUES ".
				   "('$name','$company','$phone','$email','$comments','$submit_date','$regtyp','$infotyp')";
			mysql_select_db( 'precitb3_pmtuserinfo' );
			$retval = mysql_query( $sql, $dbh );
			if(! $retval )
			{
			  die('Could not insert record: ' . mysql_error());
			}
			//echo "Table created successfully\n";
			mysql_close($dbh);
		
		//END DB Bit
		
		//Set a cookie
		$expire=time()+60*60*24*30*365;
		setcookie("pmtdl", "1", $expire, "/", ".pmt-fl.com");
		
		
		//Finish Him!
		
		$emailSent = true;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Download Interface | Precision Measurement Technologies</title>

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
				company: {
					required: true,
					minlength: 2
				},
				phone: {
					required: false,
					phone: true
				},
				email: {
					required: true,
					email: true
				},
				captcha: {
					required: true,
					equalTo: '#bank'
				}
			},
			messages: {
				contactname: {
					required: "Please enter your companyname",
					minlength: jQuery.format("Your company name needs to be at least {0} characters")
				},
				company: {
					required: "Please enter your name",
					minlength: jQuery.format("Your name needs to be at least {0} characters")
				},
				phone: {
					required: "Please enter a valid email address",
					minlength: "Please enter a valid email address"
				},
				email: {
					required: "Please enter a valid email address",
					minlength: "Please enter a valid email address"
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
		
		var query = window.location.search.slice(3);
		var hash = document.location.hash.slice(1);		
		//alert(query);
		//alert(hash);
		document.getElementById('file').value = query;
		document.getElementById('section').value = hash;
		
	});
	</script>

</head>

<body onload="cssdropdown.startchrome('chromemenu');">

<div id="downloadform">
				<h2 class="sub">User Information</h2>
				<div class="wrapper">
				<div id="contactWrapper" role="form">
				
					<?php if(isset($hasError)) { //If errors are found ?>
						<p class="error">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
					<?php } ?>

					<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
						<div class="success" style="color:#000">
							<p><strong>Success!</strong></p>
							<p>Thank you for submitting your information <strong><?php echo $name;?></strong>! Please proceed to the Download page <a onclick="parent.closebox();">by clicking this link</a>.</p>
						</div>
					<?php } ?>

					<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
						<p>This information will be collected only once and is keyed off by cookies. If you clear your cookies or have them disabled, you will have to revisit this form.</p>
						<table class="orno">
						<tr><td><input type="radio" name="globalcheck" id="na" value="na" style="width:15px;margin:0;" /></td><td><label for="na">For: North American (USA, Canada, Mexico) Company or Clients </label></td></tr>
						<tr><td><input type="radio" name="globalcheck" id="auzb" value="auzb" style="width:15px;margin:0;" /></td><td><label for="auzb">For:  Brazil Company or Clients </label></td></tr>
						<tr><td><input type="radio" name="globalcheck" id="intl" value="intl" style="width:15px;margin:0;" /></td><td><label for="intl">For: All Other Global Locations and Clients</label></td></tr>
						</table>					
					
						<div class="stage clear">
							<label for="name"><strong>Name: <em>*</em></strong></label>
							<input type="text" name="contactname" id="contactname" value="" class="required" role="input" aria-required="true" />
						</div>
						
						<div class="stage clear">
							<label for="company"><strong>Company: <em>*</em></strong></label>
							<input type="text" name="company" id="company" value="" class="required" role="input" aria-required="true" />
						</div>

						<div class="stage clear">
							<label for="phone"><strong>Phone: <em>*</em></strong></label>
							<input type="text" name="phone" id="phone" value="" class="" role="input" aria-required="true" />
						</div>
						
						<div class="stage clear">
							<label for="email"><strong>Email: <em>*</em></strong></label>
							<input type="text" name="email" id="email" value="" class="required email" role="input" aria-required="true" />
						</div>
						
						<div class="stage clear">
							<label for="captcha"><strong><img src="/images/all/contact-cap.png" alt="one plus two" style="border:0;margin-left:0;" /><em>*</em></strong></label>
							<input type="text" name="captcha" id="captcha" value="" class="required" role="input" aria-required="true" />
						</div>
										
						<p class="requiredNote"><em>*</em> Denotes a required field.</p>
						
						<input type="submit" value="Send Message" name="submit" id="submitButton" class="info" title="Click here to submit your message!" />
						<input type="hidden" name="bank" id="bank" value="3" />
						<input type="hidden" name="file" id="file" value="" />
						<input type="hidden" name="section" id="section" value="" />
					</form>
					</div>
					</div>

		
</div>
</body>
</html>
