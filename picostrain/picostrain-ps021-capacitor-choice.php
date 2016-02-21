<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>PICOSTRAIN Capacitor Choice | Precision Measurement Technologies</title>

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
				<h1 class="sub">PICOSTRAIN Capacitor Choice</h1>
				<img class="main" src="/images/picostrain/ps021-main.jpg" alt="" />
				
				<p>For correct operation it is necessary to select the right capacitor value and the right capacitor material. Following the recommendation for the comparator circuit, the discharge time is about<br />
				t = 0.7*R<sub>SG</sub>*C<sub>Load</sub></p>
				<p>In measurement range 2 the time interval measurement uses not only the high-speed unit of the TDC but also the reference clock (pre-divider). Doing this the measurement range of the TDC is extended to 100 &micro;s. This allows update rates up to 10 kHz. For higher update rates the discharge time must be reduced. At update rates higher than 10 kHz measurement range 1 is recommended.</p>
				
			</div>
			<div id="subSecond">
			
				<div id="sub2full">
				
				<p class="bold">The following values are recommended for measurement range 2:</p>
				<table class="specs">
				<tr><th>R<sub>SG</sub></th><th>C<sub>Load</sub></th></tr>
				<tr><td>1 kOhm</td><td>68 nF</td></tr>
				<tr><td>350 Ohm</td><td>220 nF</td></tr>
				
				<h2 class="sub">Capacitor material</h2>
				<p>The capacitor is an important part of the circuit and has direct influence on the quality of the measurement and the stability with temperature</p>

				
				<p class="bold">We recommend the following materials (group 1):</p>
				<ul class="sub">
					<li>CFCAP (Multilayer ceramic from Taiyo-Yuden)</li>
					<li>C0G or NP0 ceramics</li>
					<li>Polystyrene</li>
					<li>Polyvenylsulfid</li>
				</ul>
				
				<p class="bold">The PICOSTRAIN integrated circuits are realized without any analog component. Again, acam uses its TDC technology to set new standards in circuit design and takes the advantages of this principle like:</p>
				<ul class="sub">
					<li>2 channels with typ. 50 ps rms resolution</li>
					<li>65 ps Bin size</li>
					<li>Measurement range 3.5 ns to 1.8 &micro;s</li>
					<li>15 ns pulse-pair resolution with 4-fold multihit capability</li>
					<li>4 events can be measured arbitrarily against each other</li>
					<li>Windowing for precise stop enable</li>
				</ul>
				
				<p class="bold">Also these materials may be used but with some small losses in temperature stability (group 2):</p>
				<ul class="sub">
					<li>X7R</li>
					<li>Polyester</li>
				</ul>
				
				<p class="bold">The following materials must not be used (group 3):</p>
				<ul class="sub">
					<li>Z0G</li>
				</ul>
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
