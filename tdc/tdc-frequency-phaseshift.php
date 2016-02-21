<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Frequency and Phaseshift: Precision Measurement Technologies</title>

	<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
	<meta name="keywords" content="precision measurement technologies, time to digital tech" />
	<meta name="description" content="Frequency and Phaseshift, high resolution measurement systems for time-of-flight (TOF), laser applications, from  Precision Measurement Technologies." />	

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
				<h1 class="sub">Frequency &amp; Phaseshift</h1>
				<img class="main" src="/images/tdc/gp1-main.jpg" alt="" />

				<p>In many sensoric applications the value of interest (capacity, resistance, weight, density, pressure ...) is converted to a frequency change or phase shift. Typical examples are capacitive or inductive proximity sensors or piezoelectric weighing cells.</p>
				
			</div>
			<div id="subSecond">
			
			<p>Take as an example the frequency measurement with the help of the TDC-GP1: connect the frequency signal (should be TTL) simultaneously to the start and stop inputs of the GP1 - that's all! You directly measure the period. Depending on the accuracy requested, this can be realized with lowest current consumption - ideal for battery driven equipment. The table shows some typical values for accuracy and current consumption in the two measuring ranges.</p>
			
			<h2 class="sub">Accuracy &amp; Current in Two Measurement Ranges</h2>
				<div id="sub2full">
				
				<table class="orno">
				<tr><th></th><th></th><th>Periods</th><th>Freq</th><th>Resolution (1 measure-ment per second)</th><th>current*</th><th>Accuracy (sampling1000 measurements per sec)</th><th>current*</th></tr>
				<tr><td class="bold">mes. range2</td><td>min</td><td>60ns</td><td>16.7MHz</td><td>0.5%</td><td>400nA</td><td>0.015%</td><td>550uA</td></tr>
				<tr><td></td><td>max</td><td>100ms</td><td>10Hz</td><td>10<sup>-7</sup>%</td><td>5uA</td><td></td><td></td></tr>
				<tr><td class="bold">mes. range1</td><td>min</td><td>3ns</td><td>333MHz</td><td>4%</td><td>400nA</td><td>0.11%</td><td>550uA</td></tr>
				<tr><td></td><td>max</td><td>6.7us</td><td>150KHz</td><td>0.05%</td><td>400nA</td><td></td><td></td></tr>
				</table>


				<p>1 LSB = 120ps<br />
				*calibration clock active only during measurement<br />
				In the same way it's possible to measure the jitter of a frequency signal or the phase shift between two signals - with up to 2.5 million measurements per second</p>
				
				</div>
				
			</div>
			<div id="subThird">
				<div id="sub3left">

				
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
