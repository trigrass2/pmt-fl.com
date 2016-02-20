<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>PICOSTRAIN Measurement Principle | Precision Measurement Technologies</title>

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
				<h1 class="sub">PICOSTRAIN Measurement Principle</h1>
				<img class="main" src="/images/picostrain/ps09-main.jpg" alt="" />
				
				<p>The capacitor is charged to the supply voltage and then discharged through one of the SG resistors. The discharge time down to an arbitrary trigger level is measured with ultra-high precision using a TDC (Time-to-Digital Converter). The discharge time is in the range 100 &micro;s. The TDC unit used have a typical single-shot resolution of less than 20 ps.</p>
				
			</div>
			<div id="subSecond">

				<div id="sub2full">
				<p>This measuring process is repeated in time-multiplex with both resistors of a half-bridge, using the same capacitor and the same comparator. Calculating the ratio of the results will turn out the absolute values and temperature dependencies of the capacitor and the comparator.</p>
 
				<p>Additional patented circuits and algorithms inside the  products compensate for further error sources like the switch-on resistance of the output drivers (Rdson) and the propagation delay of the comparator. The result is very precise, nearly free of gain errors and very stable with temperature. In total each single measurement is made of 8 discharge/charge cycles to solve this compensation task.</p>
 
				<p>Due to the measuring principle,  does not need a full-bridge but a half-bridge is sufficient. The supply of the half-bridge is provided directly by the  circuits. There is no need for a separate supply of the SG. Also the reference voltage is not required.</p>
 
				<p>Thanks to the pulsed drive  easily controls the current through the whole system and, even more important, reduces the current consumption to re-markably less than comparable ADC systems.</p>
 
				<p>The  measuring principle is showing a new approach to strain gage (SG) measurement. Contrary to the Wheatstone bridge, where the variation of resistance is transformed into a variation of voltage,  solutions transfer it into a high-precision time interval measurement. For this purpose the SG resistors are connected to a capacitor, forming a low-pass filter.</p>
				
				</div>
				
			</div>
			<div id="subThird">
				<div id="sub3left">
					<h2 class="sub">Measurement Principle</h2>
					<a href="/images/picostrain/picostrain-measurement-principle.jpg" rel="lightbox[picostrain]"><img src="/images/picostrain/picostrain-measurement-principle-thumb.jpg" alt="" /></a>
					<p class="click">(click to enlarge)</p>
				
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
