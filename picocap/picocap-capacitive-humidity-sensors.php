<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>PICOCAP Humidity Measurement | Acam | Precision Measurement Technologies</title>

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
				<h1 class="sub">PICOCAP Capacitive relative Humidity Measurement</h1>
				<img class="main" src="/images/picocap/picocap-main.jpg" alt="" />
				<p style="font-weight:bold;">PICOCAP Humidity Measurement with PCap01</p>
				<p>Capacitive relative humidity sensors are widely used. Their applications range from the industrial- and commercial area over medical- and domestic applications to climate control or weather telemetry. Here, the PCap01 offers an unprecedent degree of flexibility in capacitance to digital conversion so it perfectly meets the different requirements of all instrumentation in that wide application area.</p>
				
			</div>
			<div id="subSecond">
				<div id="sub2full">
				<h2 class="sub">Description / Design Considerations</h2>
				<p>The above block diagram shows an example design of a relative humidity sensor with the PCap01 Capacitance-to-Digital Converter (CDC).The CDC measures the capacitance ratio between the sensor and a fixed reference capacitor Cref. Then the integrated DSP calculates the humidity as function of the measured capacitance ratio. Ideally, the sensor's base capacitance and Cref should have the same order of magnitude. The input capacitance can range between 1 to 1000 pF.</p>				<p>For temperature measurement the integrated resistance-to-digital converter (RDC) is used. It measures the resistance ratio between the RTD sensor (PT1000 or PT500) and a temperature stable reference resistor. Then the temperature value is calculated by the DSP according to the transfer function of the resistance temperature detector (RTD).</p>				<p>By means of two scaling factors, "Ccorr" for the capacitance ratio and "Rcorr" for the resistance ratio, the integrated DSP enables a firmware based scaling of the measured capacitance and resistance ratio in order to compensate for the sensor's deviation from the nominal value.</p>				<p>Then the DSP calculates humidity and temperature from the capacitance and resistance values, According to the sensor's transfer function. This is done by a firmware implemented polynomial approximation.</p>				<p>Finally an additional calculation compensates the results for the temperature influence, so the linearized and temperature compensated results are available on digital and analog outputs.</p>				<p>Details about the firmware linearization are described in the PCap01AK-0101xx datasheet.</p>
				
				</div>
			</div>
			<div id="subThird">
				<div id="sub3left">
					<h2 class="sub">Block Diagram of a Capacitive Humidity Sensor</h2>					<a href="/images/picocap/pcap01-app-hum.jpg" rel="lightbox[picocap]"><img src="/images/picocap/pcap01-app-hum-thumb.jpg" alt="" /></a>					<p class="click">(Click to enlarge)</p>
				
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
