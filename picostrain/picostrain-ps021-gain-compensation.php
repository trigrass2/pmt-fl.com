<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>PICOSTRAIN R<sub>dson</sub> &amp; Gain Compensation | Precision Measurement Technologies</title>

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
				<h1 class="sub">PICOSTRAIN R<sub>dson</sub> &amp; Gain Compensation</h1>
				<img class="main" src="/images/picostrain/ps021-main.jpg" alt="" />
				
				
			</div>
			<div id="subSecond">
			
				<div id="sub2left">
				<h2 class="sub">R<sub>dson</sub> Compensation</h2>
				<p>During the discharge of the capacitor the single resistors of the strain gage lie in series with the switching transistors of the PS021. The switch-on resistance (= R<sub>dson</sub>) of these transistors as well as their temperature dependence and supply voltage dependence are added as a failure to the measurement result. The R<sub>dson</sub> itself is in the range of 3 - 5 Ohm. The variation over temperature and voltage is in the range of 1 Ohm. It can be easily seen that this is bigger than the initial measurement signal of a 350 Ohm strain gage! The PICOSTRAIN measurement principle is enhanced only with the patented compensation method for the R<sub>dson</sub>.</p>
 
				<p>For compensation the switch is split into two transistors. For each SG resistor the capacitor is discharged 3 times, through transistor 1, through transistor 2 and finally through both transistors in parallel. The PS021 intrinsic DSP calculates the correction Rdson correction value from these three data.</p>
				
				</div>
				
				<div id="sub2right">
				<h2 class="sub">Gain Compensation</h2>
				<p>The comparator itself shows a significant propagation delay, which is added to the result. It introduces an additional, temperature dependent gain error. The absolute maximum of this error is in the range of 1% of the maximum measured value. PS021 is capable of measuring the comparator's propagation delay and therefore can compensate for the gain error.</p>
				
				<p>This compensation takes 1 measurement (= 1 cycle time) per half-bridge. The measurement is done at the end of a normal measurement. For noise reduction the correction data can be averaged.</p>

				<p>Using the PS021 gain compensation the gain drift over temperature is only about 1 ppm/K (0.0001 %/K) of full scale. Even for calibrated scales it is not necessary to do further compensation actions.</p>
				
				</div>
			</div>
			<div id="subThird">
				<div id="sub3left">
					<h2 class="sub">Schematic Diagram</h2>
					<a href="/images/picostrain/ps021-rdson-compensation.jpg" rel="lightbox[picostrain]"><img src="/images/picostrain/ps021-rdson-compensation-thumb.jpg" alt="" /></a>
					<p class="click">(Click to enlarge)</p>
				
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
