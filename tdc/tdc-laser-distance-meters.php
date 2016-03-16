<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Laser Distance Meters: Precision Measurement Technologies</title>

	<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
	<meta name="keywords" content="precision measurement technologies, time to digital tech" />
	<meta name="description" content="Laser Distance Meters, high resolution measurement systems for time-of-flight (TOF), laser applications, from Precision Measurement Technologies." />	

	<link rel="stylesheet" type="text/css" href="/css/control.css" />
	<link rel="shortcut icon" type="image/x-icon" href="http://www.pmt-fl.com/favicon.ico" />
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

	<script src="/js/javascript.js" type="text/javascript"></script>
	<script src="/js/javascript-menu.js" type="text/javascript"></script>
	<script src="/js/subnav.js" type="text/javascript"></script>
	
	<script src="/js/lightbox.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="/css/lightbox.css" />


</head>

<body>

<div id="containerOut">
	<div id="containerIn">
	
<?php include("../includes/header-nav.php"); ?>
		
<?php include("../includes/subnav-tdc.php"); ?>
		
		<div id="subBody">
			<div id="subTop">
				<h1 class="sub">Laser Distance Meters</h1>
				<img class="main" src="/images/tdc/gp22-main.jpg" alt="" />

				<p>Wether in geodesics, in security systems, production controls or just on the golf corse - the measuring of distances with lasers or laserscanners is well established nowadays. The time - namely the time, the light needs to pass the needed distance - is the value to be determined. This sounds so simple, but it isn't - because the velocity of light is very, very high - it's 2.99792*10<sup>8</sup> m/s. In consequence one has to deal with very small times. In only one microsecond the passes 300 meters. A high resolution in place therefore demands highest resolution in time.</p>
			
			</div>
			<div id="subSecond">

				<div id="sub2full">
				<p>For pratical reasons the reflection mode is used. Tranceiver and receiver are placed in one device. For the distance to be measured we find d=c*t/2 with c=velocity of light. So if we take a distance of 1 kilometer, the time of flight will be 6.7&micro;s. If the resolution has to 1cm we already need a time resolution of 67ps. TDC-GPX driven in M-Mode shows a peak-to-peak resolution very close to this. The resolution can be further improved by averaging without seeing any systematic errors from the TDC.</p>
 
				<!--<p>Have a look at our Application Note <a href="/downloads/tdc/AN001_e.pdf" target="_blank">AN001</a> (PDF, 129 KB, Nov 2000).</p>-->

				<h2 class="sub">TDC Advantages</h2>
				<ul class="sub">
					<li>Direct conversion of time to digital values</li>
					<li>Highest resolution: down to 10ps (70ps peak-to-peak)</li>
					<li>Multichannel - TDC-GP1 and TDC-GP2 have two stop channels, TDC-GPX up to 8 channels</li>
					<li>Multihit-capability - TDC-GP1 and TDC-GP2 can handle 4 Stops, TDC-GPX up to 32 Hits</li>
					<li>High Update rates: TDC-GPX can measure with 200MHz peak rate</li>
					<li>Direct pulse width measurement: TDC-GPX can directly measure the pulse width down to 1.5ns</li>
					<li>Space savings: Single Chip-solution in a small QFN32, TQFP44 or TQFP100 package</li>
					<li>Industrial operating range: from -40&deg;C to +120&deg;C.</li>
					<li>Battery applications: for handheld devices a low current consumption is essential. Discover the TDC-GP2 - it's perfect for this! When you work in measuring range 2 with only one measurement plus calibration per second, the current consumption will be only 3uA for a 5V supply (Note: nearly the comlete consumption is delivered to the calibration clock)</li>
				</ul>
				
				</div>

			</div>
			<div id="subThird">
				<div id="sub3left">
					<!--<h2 class="sub">Picture!</h2>
					<a href="/images/tdc/db-gp2-block.gif" rel="lightbox[TDC]"><img src="/images/tdc/db-gp2-block.jpg" alt="" /></a>
					<p class="click">(click to enlarge)</p>-->
				
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
