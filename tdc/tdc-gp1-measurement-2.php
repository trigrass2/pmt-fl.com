<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>TDC-GP1 Measure Range 2 | Acam | Precision Measurement Technologies</title>

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
		
<?php include("../includes/subnav-tdc.php"); ?>
		
		<div id="subBody">
			<div id="subTop">
				<h1 class="sub">TDC-GP1 Measure Range 2</h1>
				<img class="main" src="/images/tdc/gp1-main.jpg" alt="" />

				<p>It is possible to extend the maximum time interval by using a pre-divider. The resolution in LSB remains unchanged by that. In this mode the high-speed unit of the TDC does not measure the whole time interval but only time intervals from START and STOP to the next rising edge of the reference clock (finecounts). In between the finecounts the TDC counts the number of periods of the reference clock (coarsecount). The measurement range is extended to 2<sup>16</sup> x T<sub>ref</sub> and may reach 200 ms.</p>
				
			</div>
			<div id="subSecond">
			<h2 class="sub">General Circuit Features</h2>
				<div id="sub2full">
				<p>In measurement range 2 only 1 channel is available with 4 possible STOPs in normal resolution and 3 possible STOPs in high resolution.</p>
 
				<p>The active time of the high-speed unit as the main current drain is reduced remarkably.</p>
 
				<p>As opposed to measuring range 1, in measuring range 2 the result is the sum of different fine and coarse-count results. Therefore it is necessary in measuring range 2 to make a calibration. During a calibration the TDC measures 1 and 2 periods of the reference clock.</p>

				
				</div>
				

			</div>
			<div id="subThird">
				<div id="sub3left">
					<h2 class="sub">Timing</h2>
					<a href="/images/tdc/gp1-measurement-2-timing.jpg" rel="lightbox[TDC]"><img src="/images/tdc/gp1-measurement-2-timing-thumb.jpg" alt="" /></a>
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
