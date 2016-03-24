<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>PICOSTRAIN Averaging | Precision Measurement Technologies</title>

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
	
	<script type="text/javascript">
	$(document).ready(function() {
		var refr = document.referrer;
		var cookies = document.cookie;
		alert (cookies.toLowerCase().indexOf("acam"));
		
		if (cookies.toLowerCase().indexOf("acam") == -1) {
			if ((refr.toLowerCase().indexOf("acam") >= 0) || (refr == "")) {
				$('.acampop').click();
				document.cookie="acam=1";
			}
		}
		//alert(refr);
		//if (refr.toLowerCase().indexOf("acam") >= 0) {
			//$.cookie("acam","1", { expires: 999, path: '/' });
			//$('.acampop').click();
		//}
	});
	</script>


</head>

<body>

<div id="containerOut">
	<div id="containerIn">
	
<?php include("../includes/header-nav.php"); ?>
		
<?php include("../includes/subnav-strain.php"); ?>
		
		<div id="subBody">
			<div id="subTop">
				<h1 class="sub">PICOSTRAIN Averaging</h1>
				<img class="main" src="/images/picostrain/ps021-main.jpg" alt="" />
				
				<p class="bold">Precision of a Single Measurement</p>
				
			</div>
			<div id="subSecond">
				
				<p class="bold">The precision of a single measurement (AVRate = 1) depends on 2 parameters:</p>
				<ul class="sub">
					<li>The measurement range</li>
					<li>The discharge time</li>
				</ul>
				<p>As long as the update rate is not higher than 5 kHz we recommend working with measurement range 2. Setting the discharge time to 50 -100 &micro;s, PS021 has the performance shown in the table on the right</p>
				
				<h2 class="sub">General Circuit Features</h2>
				<p>PS021 internally improves the precision of the measurement results by averaging. The measuring principle guarantees that no significant systematic errors affect the result. The standard deviation is improved by the square root of the averaging rate.</p>
				<div id="sub2left">
					<h2 class="sub">RMS Noise without averaging</h2>
					<p>(2 kHz update rate):</p>
					<table class="stats">
					<tr><th>Vcc</th><th>SINC3</th><th>Fast-settle</th></tr>
					<tr><td>5 V</td><td>0.66 &micro;V</td><td>1.15 &micro;V</td></tr>
					<tr><td>3 V</td><td>0.51 &micro;V</td><td>0.88 &micro;V</td></tr>
					<tr><td>2.5 V</td><td>0.57 &micro;V</td><td>0.98 &micro;V</td></tr>
					</table>
				</div>

				<div id="sub2right">
					<h2 class="sub">RMS Noise with 400-fold averaging</h2>
					<p(5 Hz update rate):p>
					<table class="stats">
					<tr><th>Vcc</th><th>SINC3</th><th>Fast-settle</th></tr>
					<tr><td>5 V</td><td>0.026 &micro;V</td><td>0.045 &micro;V</td></tr>
					<tr><td>3 V</td><td>0.024 &micro;V</td><td>0.041 &micro;V</td></tr>
					<tr><td>2.5 V</td><td>0.024 &micro;V</td><td>0.041 &micro;V</td></tr>
					</table>
				</div>

			</div>


		</div>
		<div class="clearboth"></div>
		
		
<?php include("../includes/footer.php"); ?>

		<div class="clearboth"></div>
	</div>
	<div class="clearboth"></div>
</div>
</body>
</html>
