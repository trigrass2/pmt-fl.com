<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>PICOSTRAIN | Precision Measurement Technologies</title>

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

<body>

<div id="containerOut">
	<div id="containerIn">
	
<?php include("../includes/header-nav.php"); ?>
		
<?php include("../includes/subnav-strain.php"); ?>
		
		<div id="subBody">
			<div id="subTop">
				<h1 class="sub">PICOSTRAIN</h1>
				<img class="main" src="/images/tdc/gp2-main.jpg" alt="" />
				
				<p>Measuring strain gages is one of the big challenges for sensor technology, especially the weighing industry. Due to the small excitation of the strain gages on a load cell of only 0.2 % (2000 ppm) full scale, and due to the high resolution of 16 Bit and more, the resistors must be measured with a precision deeply in the ppb range. Reasonably, this can only be done measuring the ratio of the resistors.</p>
				<p>Here the PICOSTRAIN measuring principle is breaking new grounds compared to A/D converters. The ratio of the resistors is ascribed to a time interval measurement, not to a voltage difference like in Wheatstone bridges. The sensor's resistors together with a capacitor act as low-pass filters. The capacitor, charged to Vcc, is discharged through the sensor's resistors. The discharge time to trigger level (selectable) is precisely measured by a TDC (Time-to-Digital Converter).</p>
				
			</div>
			<div id="subSecond">
			<h2 class="sub">General Circuit Features</h2>
				<div id="sub2full">
				<p style="font-weight:bold;">The PICOSTRAIN integrated circuits are realized without any analog component. Again, acam uses its TDC technology to set new standards in circuit design and takes the advantages of this principle like:</p>
				<ul class="sub">
					<li>2 channels with typ. 50 ps rms resolution</li>
					<li>65 ps Bin size</li>
					<li>Measurement range 3.5 ns to 1.8 µs</li>
					<li>15 ns pulse-pair resolution with 4-fold multihit capability</li>
					<li>4 events can be measured arbitrarily against each other</li>
					<li>Windowing for precise stop enable</li>
				</ul>
				
				</div>
				
			</div>
			<div id="subThird">
				<div id="sub3left">
					<h2 class="sub">Block Diagram</h2>
					<a href="/images/tdc/db-gp2-block.gif" rel="lightbox[TDC]"><img src="/images/tdc/db-gp2-block.jpg" alt="" /></a>
				
				</div>
				<div id="sub3right">
					<h2 class="sub">Package Outline</h2>
					<a href="/images/tdc/gp2-package.gif" rel="lightbox[TDC]"><img src="/images/tdc/gp2-package.jpg" alt="" /></a>
				
				</div>
			</div>
			<div id="subFourth">
				<h2 class="sub">Applications</h2>
					<ul class="sub">
					<li>Laser Distance Meters</li>
					<li>Ultrasonic Flowmeter</li>
					<li>Ultrasonic Density meter</li>
					<li>Ultrasonic Thickness Meter</li>
					<li>Magnetostrictive Positioning</li>
					<li>Drift Chambers</li>
					<li>Frequency &amp; Phaseshift</li>
					</ul>
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
