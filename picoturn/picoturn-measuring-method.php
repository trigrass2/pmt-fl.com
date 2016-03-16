<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>PICOTURN Measuring Method | Acam | Precision Measurement Technologies</title>

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
		
<?php include("../includes/subnav-turn.php"); ?>
		
		<div id="subBody">
			<div id="subTop">
				<h1 class="sub">PICOTURN Measuring Principle</h1>
				<img class="main" src="/images/picoturn/overview-main.jpg" alt="" />
				
				<p class="bold">Rotational Speed Sensor for Turbochargers</p>
				<p>The sensor is made of a simple coil with a ferrite core. Together with a resistor this forms an R-L network, the time constant of which is measured by a TDC. Placing a vane of the compressor wheel in front of the coil will change the time constant of the R-L network by the appearance of eddy currents. A DSP-unit following the TDC measurement unit processes the time data and calculates the rotational speed.</p>
				
			</div>
			<div id="subSecond">

				<div id="sub2full">
				
				<p>The time measurement is done with very high precision. The resolution is about 125 ps. The time constant of the R-L network can be very small, allowing high sampling rates in the range of 1 to 3 million samples per second.</p>
 
				<p>The effect of eddy current damping is best for paramagnetic materials. This method therefore is very good for detecting aluminum wheels.</p>
 
				<p>The maximum distance of the sensor from the wheel depends on the shape of the vanes. It varies from 0.8 mm (32 mm wheels) to 1.6 mm than 1 mm (90 mm wheels). Thanks to the ratio measurement any trimming of the coils is not necessary. The length of the cable between sensor and circuit may be up to several meters. This allows to separate the electronics part from the sensing part, reducing thermal and vibrational influences on the electronics.</p>
 
				<p>The special kind of measurement reduces the influence of changes in the dielectric constant (e.g. by dirt) to a minimum.</p>
				</div>
				
			</div>
			<div id="subThird">
				<div id="sub3left">
					<!--<h2 class="sub">Picture!</h2>
					<a href="/images/tdc/db-gp2-block.gif" rel="lightbox[picoturn]"><img src="/images/tdc/db-gp2-block.jpg" alt="" /></a>
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
