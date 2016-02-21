<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>PICOSTRAIN Bridge Connection | Precision Measurement Technologies</title>

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
				<h1 class="sub">PICOSTRAIN Bridge Connection</h1>
				<img class="main" src="/images/picostrain/ps021-main.jpg" alt="" />
				
				<p>PS021 does not need a full-bridge. Two resistors, below called half-bridge, are sufficient. Together with a capacitor these two resistors form a low-pass filter. The capacitor is loaded to Vio and then alternately discharged through the resistors.</p>
 
				<p>PS021 offers two sets of ports, one for each half-bridge. Each block is made of 6 pins, where each SG element is connected via 2 pins to PS021.</p>
				
			</div>
			<div id="subSecond">
			<h2 class="sub">More Information</h2>
				<div id="sub2full">
				<p>In order to work with a full-bridge, this full-bridge should be split into two half-bridges:</p>
 
				<p>Both half-bridges will be measured in an interleaved manner, called "Alternating mode". An advantage of the Alternating mode is the redundancy or tolerance against failures. If one half-bridge fails, the other half-bridge is still fully operating. By the measuring principle only one comparator is necessary. For those applications that do not need 2 comparators we recommend the use of only one. This mode is called "One-Sense" mode.</p>
 
				<p>The full-bridge mode is the one with intrinsically the lowest temperature drift of the electronics. Connecting the two half-bridges in a way the results will be subtracted reduces drastically the temperature drift down to the range of 5 nV/K. This value is up to 30 to 50 times lower than the one of a good strain gage. In the tem-perature drift mentioned the comparator circuit is already included.</p>
 
				<p>The Wheatstone mode allows connecting a classical Wheatstone bridge configuration to the PS021. It is also possible to combine this mode with doublebridge mode for two fullbridges. The configuration options are the same as for the normal modes.</p>
 
				<p>The comparator circuit has to be modified. The gain compensation can be used only in combination with separate gain compensation resistors.</p>
 
				<p>When calculating the discharge capacitor it has to be considered that the strain gage resistance is reduced by 25%.</p>
 
				<p>This mode shows technical advantages when the applications needs long cables between sensor and electronics. In this mode the cable capacities are self-compensated. So it is possible to work up to 10 m cable length.</p>
				
				</div>
				
			</div>
			<div id="subThird">
				<div id="sub3left">
					<h2 class="sub">Schematic Diagram</h2>
					<a href="/images/picostrain/ps021-bridge-halfbridge.jpg" rel="lightbox[picostrain]"><img src="/images/picostrain/ps021-bridge-halfbridge-thumb.jpg" alt="" /></a>
					<p class="click">(Click to enlarge)</p>
					<div class="clearboth"></div>
					
					<h2 class="sub">Schematic Diagram</h2>
					<a href="/images/picostrain/ps021-bridge-fullbridge.jpg" rel="lightbox[picostrain]"><img src="/images/picostrain/ps021-bridge-fullbridge-thumb.jpg" alt="" /></a>
					<p class="click">(Click to enlarge)</p>
				
				</div>
				<div id="sub3right">
					<h2 class="sub">Schematic Diagram</h2>
					<a href="/images/picostrain/ps021-bridge-wheatstone.jpg" rel="lightbox[picostrain]"><img src="/images/picostrain/ps021-bridge-wheatstone-thumb.jpg" alt="" /></a>
					<p class="click">(Click to enlarge)</p>
				
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
