<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>TDC-GP2 Measurement Range 2 | Precision Measurement Technologies</title>

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
				<h1 class="sub">TDC-GP2 Measurement Range 2</h1>
				<img class="main" src="/images/tdc/gp2-main.jpg" alt="" />

				<p>Digital TDCs use internal propagation delays of signals through gates to measure time intervals with very high precision (see also measurement range 1).</p>
				
			</div>
			<div id="subSecond">
			
				<div id="sub2full">
				
				<ul class="sub">
					<li>2 stop channels referring to one start channel</li>
					<li>Each of typ. 50 ps resolution, 65 ps BIN size</li>
					<li>15 ns pulse pair resolution</li>
					<li>4-fold multihit capability for each stop channel</li>
					<li>Measurement range 3.5 ns to 1,8 &micro;s</li>
					<li>Selectable rising/falling edge sensitivity for each channel</li>
					<li>Enable pins for powerful windowing functionality</li>
					<li>The possibility to arbitrarily measure all events against each other</li>
				</ul>
				
				<p>In measurement range 2 the maximum time interval is extended using a pre-divider. The resolution in LSB remains unchanged by that. In this mode the high-speed unit of the TDC does not measure the whole time interval but only time intervals from START and STOP to the next rising edge of the reference clock (fine-counts). In between the fine-counts the TDC counts the number of periods of the reference clock (coarse-count).</p>
				
				<p>The BIN size (LSB) is typically 65 ps at 3.6 V and 25 &deg;C ambient temperature. The gate propagation delay times strongly depend on temperature and voltage. In measuring range 2 the result is the sum of different fine and coarse-count results. Therefore it is necessary in measuring range 2 to make a calibration. During a calibration the TDC measures 1 and 2 periods of the reference clock.</p>
				<p>The measuring unit is actuated by a START signal and stopped by a STOP signal. Based on the position of the ring oscillator and the coarse counter the time interval between START and STOP is calculated with a 26 Bit measurement range.</p>
				<p>The measurement range is limited by size of the coarse counter:<br />
				tyy = Tref x 16384 ~ 4 ms</p>
				
				<table class="orno">
				<tr><th></th><th>Time (Condition)</th><th>Description</th></tr>
				<tr><td>tph</td><td>2.5 ns</td><td>Minimum pulse width</td></tr>
				<tr><td>tpl</td><td>2.5 ns</td><td>Minimum pulse width</td></tr>
				<tr><td>tss</td><td>500 ns min.</td><td>Start to Stop</td></tr>
				<tr><td>trr</td><td>ns</td><td>Rising edge to rising edge</td></tr>
				<tr><td>tff</td><td>ns</td><td>Falling edge to falling edge</td></tr>
				<tr><td>tva</td><td>4.6 &micro;s calibrated</td><td>Last hit to data valid</td></tr>
				<tr><td>tyy</td><td>4 ms</td><td>Measurement range</td></tr>
				</table>

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
