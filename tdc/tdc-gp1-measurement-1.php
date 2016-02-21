<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>TDC-GP1 Measure Range 1 | Acam | Precision Measurement Technologies</title>

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
				<h1 class="sub">TDC-GP1 Measure Range 1</h1>
				<img class="main" src="/images/tdc/gp1-main.jpg" alt="" />

				<p>The GP1 offers 2 measuring channels with 250 ps resolution each and a basic measurement range of 15 bit.</p>
				
			</div>
			<div id="subSecond">
			<h2 class="sub">General Circuit Features</h2>
				<div id="sub2full">
				<p style="font-weight:bold;">Measurement range 1</p>
				<ul class="sub">
					<li>Both channels are absolutely identical with regard to resolution.</li>
					<li>Both channels have a common start input and measure up to four independent stops.</li>
					<li>The channels can optionally be queued behind one another, resulting in 1 channel with 8-fold multihit capability.</li>
				</ul>
				
				<p>The measuring unit is started with a signal at the START input and stopped as soon as the last hit is registered. The number of hits per channel to wait for is set in the configuration registers. Maximum 4 hits per channel are possible. The various stops pulses can not only be calculated against the start pulse, but also against each other. All time difference combinations between the 8 possible results can be calculated. If you compare events which arrive on different channels it is possible to measure time intervals down to zero.</p>
				<p>When comparing the events that arrive on one channel, the double pulse resolution of the specific channel limits the precision. The double pulse resolution is in the range of 15 ns typ. I.e. if two stops arrive on the same channel within less than 15 ns the second stop will be ignored since it arrived during the recovery time of the measurement unit.</p>
				
				</div>
				
			</div>
			<div id="subThird">
				<div id="sub3left">
					<h2 class="sub">Timing</h2>
					<a href="/images/tdc/gp1-measurement-1-timing.jpg" rel="lightbox[TDC]"><img src="/images/tdc/gp1-measurement-1-timing-thumb.jpg" alt="" /></a>
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
