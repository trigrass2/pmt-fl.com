<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>TDC-GP2 Temperature Measurement | Acam | Precision Measurement Technologies</title>

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
				<h1 class="sub">TDC-GP2 - Temperature Measurement</h1>
				<img class="main" src="/images/tdc/gp2-main.jpg" alt="" />
				<p>Especially for heatmeter applications the TDC-GP2 has a PICOSTRAIN based temperature measuring unit that offers high resolution and very low current consumption.</p>
				
				
			</div>
			<div id="subSecond">

				<div id="sub2full">
				<p>The unit has 4 resistor ports with the following function:<br /><br />
				PT1:    reference resistor lower temperature<br />
				PT2:    sense resistor lower temperature<br />
				PT3:    sense resistor lower temperature<br />
				PT4:    reference resistor higher temperature</p>
				<p>The temperature sensor should have a minimum resistance of 500 Ω (PT500/1000);. The TDC-GP2 measures the discharge times of the RC-networks made of each resistor and the capacitor.</p>
				<p>The precision of the temperature measurement is about 0.004&deg;C which is 5 times better than needed. When measuring every 30 seconds the current consumption is 0.08 &micro;A only.</p>
				<p>The temperature measurement is fully automated. It is triggered by the &micro;C sending the opcode "Start_Temp". The TDC-GP2 controls the 4 measurements by itself. After the 4 measurements have finished the interrupt flag is set. The four data are found in registers 0 to 3.</p>
				<p>From Res_2/RES_1 and RES_3/RES_4 the microcontroller can calculate the ratio Rtemp/Rref. By means of a look-up table it can calculate the temperature for the special type of sensor in use.</p>
				<p>It is not possible with TDC-GP2 to use 4-wire temperature sensors.</p>
				
				<h2 class="sub">Current Consumption</h2>
				
				<p>By means of the PICOSTRAIN technology the temperature measurement needs an extremely low current, much less than an A/D converter does.</p>
				<p>A full temperature measurement with 2 sensors, 2 references, including all calculations takes less than 2.5 &micro;As. With one temperature measurement in 30 seconds (typical for heatmeters) the average current consumption is 0.08 &micro;A only. This is about 50 times less than other solutions.</p>

				
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
