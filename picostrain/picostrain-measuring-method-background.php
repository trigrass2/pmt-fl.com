<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>PICOSTRAIN Background: Measurement Task | Precision Measurement Technologies</title>

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
				<h1 class="sub">PICOSTRAIN Background: Measurement Task</h1>
				<img class="main" src="/images/picostrain/ps09-main.jpg" alt="" />
				

				
			</div>
			<div id="subSecond">

				<div id="sub2full">
				<p class="bold">Metal strain gages (SG) change their value with mechanical deformation, especially a variation in length. The strain e designates the relative variation in length of the SG:</p>
 
				<p>Strain (e) = dL/L</p>
 
				<p>Common SG have a maximum strain of typical</p>
 
				<p>e(max) = 1000 &micro; (1000 x 10-6 or 0.1 %).</p>
 
				<p>The ratio of the resistance variation to the length variation is designated K-factor or strain gain.</p>
 
				<p>dR/R = K x dL/</p>
 
				<p>For metal SG the K-factor is typically of value 2. The maxim variation of the SG resistance is then given as:</p>
 
				<p>dR(max)/R = e(max) x K = 2000 ppm</p>
 
				<p>If the SG is connected in the manner of a Wheatstone bridge, this corresponds to a maximum signal output voltage of 2 mV/V. The resistance of common metal strain gauges is typically 350 Ohm or 1000 Ohm. The maximum variation in resistance and therefore the effective measurement range is within 0.7 Ohm to 2 Ohm. This small variation must be resolved according to the measurement task. The range of the resolution needed is very wide. It is between 10 ENOB (e.g. for pressure sensors) and 18 ENOB (e.g. calibrated scales). In the upper range the precision of the measurement has to be:</p>
 
				<p>Resolution : 2000 ppm/218 = 0.008 ppm eff.</p>
 
				<p>or 26.9 ENOB referenced to the full resistance.</p>
 
				<p>The typical measurement rates are in between</p>
 
				<p>2 - 8 Hz (e.g. scales) and</p>
 
				<p>4 - 10 kHz (e.g. fast pressure sensors).</p>

				
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
