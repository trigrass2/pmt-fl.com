<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>PICOSTRAIN Oscillator | Precision Measurement Technologies</title>

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


</head>

<body onload="cssdropdown.startchrome('chromemenu');">

<div id="containerOut">
	<div id="containerIn">
	
<?php include("../includes/header-nav.php"); ?>
		
<?php include("../includes/subnav-strain.php"); ?>
		
		<div id="subBody">
			<div id="subTop">
				<h1 class="sub">PICOSTRAIN Oscillator</h1>
				<img class="main" src="/images/picostrain/ps021-main.jpg" alt="" />
				
				<p class="bold">Digital Amplifier for Strain Gages</p>
				
			</div>
			<div id="subSecond">
			<h2 class="sub">The Oscillator</h2>
				<div id="sub2full">
				<p class="bold">PS021 offers 3 possibilities to add a reference clock:</p>
				<ul class="sub">
					<li>Internal oscillator driver for 32 kHz Oscillator</li>
					<li>Internal oscillator driver for high-speed reference 2 - 5 MHz</li>
					<li>External reference input</li>
				</ul>
				
				<p class="bold">When working in measurement range 2 (recommended) the high-speed clock is preferred. It is used</p>
				<ul class="sub">
					<li>As predivider for the TDC measuring unit</li>
					<li>And for setting the cycle time</li>
				</ul>
				
				<p>Principally we recommend using the clock driver of the PS021 with an external resonator or quartz. The clock is used as predivider for the TDC measuring unit. Its quality has direct influence on the quality of the measurement result. Low jitter and short-time stability are the important properties. When using the microcontroller's clock additional noise making the measurement quality worse is propable.</p>
 
				<p>The quality needed for the resonant circuit is about 500 - 1000. From there it is sufficient to use a ceramic resonator. A quartz oscillator is not necessary, it produces no better results and has a longer settling time.</p>
				
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
