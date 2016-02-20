<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Title | Precision Measurement Technologies</title>

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
		
<?php include("../includes/subnav-tdc.php"); ?>
		
		<div id="subBody">
			<div id="subTop">
				<h1 class="sub">TDC-GP1 Application: Ultrasonic Heatmeter</h1>
				<img class="main" src="/images/tdc/gp21-main.jpg" alt="" />
				<p class="bold">The TDC-GP21 is perfectly suited for low-cost ultrasonic heatmeter designs.</p>
				<p>Thanks to the implemented functionality, including analog section, precision temperature measurement, fire pulse generation, windowing and clock calibration it is sufficient to add a simple microprocessor (without A/D converter). The extremely low current consumption guarantees the necessary long battery lifetime in such applications.</p> 
				<p>The measurement is fairly automated by the TDC-GP21. The microprocessor just sends a start command. The TDC then fires the transducers and measures the time of flight. It calibrates the results and provides them to the microprocessor.</p>
				
			</div>
			<div id="subSecond">
			<h2 class="sub">Current Consumption</h2>
				<div id="sub2full">
				<p class="bold">a. Time measurement</p>
					<p>32.768kHz:     typ. 1.0 &micro;A<br />
					4 MHz:        < 1nA in power down, 130 &micro;A when active (@3.0V)<br />
					TDC:        4 mA during active time of the high-speed unit</p>

					<p>With 2 measurements per second (forth and back flow) the total consumption is < 2 &micro;A.</p>

					<p class="bold">b. Temperature measurement</p>
					<p>A full measurement over all four ports takes less than 2 &micro;As current. Typically the temperature is measured once in 30 seconds. The average current then is about 0.08 &micro;A. This is about 50 times less than with solutions without a TDC.</p>

					<p class="bold">c. Quiescent current</p>
					<p>Thanks to the current optimized technology the quiescent current is less than 100 nA.</p>

					<p class="bold">d. Total system current</p>
					<p>The complete current for the measuring unit ( incl. Transducer) can be reduced to 2.2 &micro;A.</p>

					<p>With a low-power &micro;P (e.g. MSP430 series from TI) the average current consumption of the total device might be in the range of 10 to 15 &micro;A.</p>
					<p>It is possible to operate the system from a lithium-thionylchloride &frac12; AA cell for 10 years without changing the battery. At 6 years runtime it maybe even possible to work with a low-cost 3V CR2450 coin cell battery.</p>

				
				</div>
			</div>
			<div id="subThird">
				<div id="sub3left">
					<h2 class="sub">Ultrasonic Heatmeter</h2>
					<a href="/images/tdc/gp21-app-ultrasonic-heatmeter.jpg" rel="lightbox[TDC]" title="TDC-GP21 Ultrasonic Heatmeter Diagram"><img src="/images/tdc/gp21-app-ultrasonic-heatmeter-thumb.jpg" alt="" /></a>
					<p class="click">(click to enlarge)</p>
				
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
