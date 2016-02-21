<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Ultrasonic Density Meter: Precision Measurement Technologies</title>

	<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
	<meta name="keywords" content="precision measurement technologies, time to digital tech" />
	<meta name="description" content="Ultrasonic Density Meter, high resolution measurement systems for time-of-flight (TOF), laser applications, from  Precision Measurement Technologies." />	

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
		
<?php include("../includes/subnav-tdc.php"); ?>
		
		<div id="subBody">
			<div id="subTop">
				<h1 class="sub">Ultrasonic Density Meter</h1>
				<img class="main" src="/images/tdc/gp2-main.jpg" alt="" />

				<p>Process control is a very important part in the chemical and food industries. Especially the accurate measurement of the density of fluids challenges the engineers. With changes in concentration of the fluid the density varies and therefore the velocity of sound. A few steps to arrive at time measurement (see animation below)!</p>
				
			</div>
			<div id="subSecond">
			
			<p>The velocity of sound in water is 1483m/s (at 20&deg; C). Many solutions show a change of velocity of sound depending on concentration between 1200m/s and 1800m/s. For a distance between ultrasonic transceiver and receiver of 2 cm this gives delays between 10us and 20us. With small distances of the transducers and an upper limit for velocity of sound of 10.000m/s we find delay times of only a few microseconds. The typical resolution of current available devices is about 0,1m/s - this means a resolution in time of 500ps - no problem for the TDC !</p>
			
			<h2 class="sub">TDC Advantages</h2>
				<div id="sub2full">

				<ul class="sub">
					<li>Small size: Single Chip-solution in the small package (QFN32 for TDC-GP2)</li>
					<li>Highest resolution: by averaging - the TDC is well suited for this - the standard deviation can be reduced down to several picoseconds</li>
					<li>Industrial operating range: from -40&deg; C to 120&deg; C </li>
					<li>Battery applications: for handheld devices a low current consumption is essential. Discover the TDC - it's perfect for this! When you work in measuring range 2 with only one measurement plus calibration per second, the current consumption will be only 3 &micro;A for a 5 V supply (Remarkable: nearly the complete consumption is delivered to the calibration clock. If the active period of this clock can be fitted well, the current consumption can be reduced to nA!)</li>
					<li>Temperature measurement: The velocity of sound depends on the temperature. Therefore it is essential to permanently monitor the temperature of the fluid. As a temperature measurement can be reduced easily to a time measurement, we have already implemented the necessary functions into the TDC. The temperature-unit allows a resolution of 0.002 &deg;C.</li>
				</ul>
				
				</div>
			
			</div>
			<div id="subThird">
				<div id="sub3left">
					<!--<h2 class="sub">Picture!</h2>
					<img src="/images/tdc/db-gp2-block.jpg" alt="" />
					-->
				
				</div>
				<div id="sub3right">

				
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
