<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>PICOCAP Measuring Method | Precision Measurement Technologies</title>

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
		
<?php include("../includes/subnav-cap.php"); ?>
		
		<div id="subBody">
			<div id="subTop">
				<h1 class="sub">PICOCAP Measuring Method</h1>
				<img class="main" src="/images/picocap/picocap-main.jpg" alt="" />
				<p>The PICOCAP measuring principle shows a new approach to capacitance measurement. For this purpose the sense capacitor and a reference capacitor are connected to a resistor, forming a low-pass filter. Sense and reference capacitor should be in the same range to minimize gain drift. Practically there is no limit for the capacitor value. Sensors from nearly 0 fF up to tens of nF can be measured. The PICOCAP devices also support differential sensors with inside linearization.</p>
				
			</div>
			<div id="subSecond">
				<div id="sub2full">
				<p>The capacitors are charged to the supply voltage and then discharged through the resistor. The discharge time down to an arbitrary trigger level is measured with ultra-high precision using a TDC (Time-to-Digital Converter).</p>				<p>This measuring process is repeated in time-multiplex with both Capacitors, using the same resistor and the same comparator. Calculating the ratio of the results will turn out the absolute values and temperature dependencies of the resistor and the comparator.</p>									<a href="/images/picocap/ps021-measuring-method-main.jpg" rel="lightbox[picocap]"><img src="/images/picocap/ps021-measuring-method-main-thumb.jpg" alt="" /></a>					<p class="click">(Click to enlarge)</p>
				<p>The Compensated Mode offers the solution for highest resolution applications with low offset and extremly low gain drift. The capacitors are connected floating, not refernced to ground. They are switched alternately to the resistor by an integrated analog switch. Additional patented circuits and algorithms compensate for parasitic capacities. Parasitic capacities would have a negative effect on the gain drift over temperature. The compensation results in a very low gain drift over temperature down to 0.5 ppm / K. It is much better than the intrinsic gain drift of most sensors.</p>
				</div>
			</div>
			<div id="subThird">				<div id="sub3left">					<h2 class="sub">General Circuit</h2>					<a href="/images/picocap/ps021-measuring-method-gen-circuit.jpg" rel="lightbox[picocap]"><img src="/images/picocap/ps021-measuring-method-gen-circuit-thumb.jpg" alt="" /></a>					<p class="click">(Click to enlarge)</p>								</div>				<div id="sub3right">					<h2 class="sub">Cycle Time</h2>					<a href="/images/picocap/ps021-measuring-method-cycle-time.jpg" rel="lightbox[picocap]"><img src="/images/picocap/ps021-measuring-method-cycle-time-thumb.jpg" alt="" /></a>					<p class="click">(Click to enlarge)</p>								</div>

		</div>
		<div class="clearboth"></div>
		
		
<?php include("../includes/footer.php"); ?>

		<div class="clearboth"></div>
	</div>
	<div class="clearboth"></div>
</div>
</body>
</html>
