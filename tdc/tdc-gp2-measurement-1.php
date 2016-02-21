<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>TDC-GP2 Measurement Range 1 | Precision Measurement Technologies</title>

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
				<h1 class="sub">TDC-GP2 Measurement Range 1</h1>
				<img class="main" src="/images/tdc/gp2-main.jpg" alt="" />

				<p>Digital TDCs use internal propagation delays of signals through gates to measure time intervals with very high precision. </p>
				
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
				
				<p>Digital TDCs use internal propagation delays of signals through gates to measure time intervals with very high precision. The diagram on the right clarifies the principal structure of such an absolute-time TDC. Intelligent circuit structures, redundant circuitry and special methods of layout on the chip make it possible to reconstruct the exact number of gates passed by the signal. The maximum possible resolution strongly depends on the maximum possible gate propagation delay on the chip.</p>
				<p>The measuring unit is actuated by a START signal and stopped by a STOP signal. Based on the position of the ring oscillator and the coarse counter the time interval between START and STOP is calculated with a 20 Bit measurement range.</p>
				<p>The BIN size (LSB) is typically 65 ps at 3.6 V and 25 &deg;C ambient temperature. The gate propagation delay times strongly depend on temperature and voltage. Usually this is solved doing a calibration. During such a calibration the TDC measures 1 and 2 periods of the reference clock. </p>
				<p>The measurement range is limited by size of the counter:<br />
				tyy = BIN x 26224 ~ 1.8 &micro;s</p>
				
				<table class="orno">
				<tr><th></th><th>Time (Condition)</th><th>Description</th></tr>
				<tr><td>tph</td><td>2.5 ns</td><td>Minimum pulse width</td></tr>
				<tr><td>tpl</td><td>2.5 ns</td><td>Minimum pulse width</td></tr>
				<tr><td>tss</td><td>3.5 ns min.<br />1.8 &micro;s max.</td><td>Start to Stop</td></tr>
				<tr><td>trr</td><td>15 ns</td><td>Rising edge to rising edge</td></tr>
				<tr><td>tff</td><td>15 ns</td><td>Falling edge to falling edge</td></tr>
				<tr><td>tva</td><td>560 ns uncalibrated<br />4.6 &micro;s calibrated</td><td>Last hit to data valid</td></tr>
				<tr><td>txx</td><td>No limits</td><td>Time interval between the stop channels</td></tr>
				<tr><td>tyy</td><td>1.8 &micro;s</td><td>Measurement range</td></tr>
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
					<!--<h2 class="sub">Picture!</h2>
					<a href="/images/tdc/db-gp2-block.gif" rel="lightbox[TDC]"><img src="/images/tdc/db-gp2-block.jpg" alt="" /></a>
					<p class="click">(click to enlarge)</p>-->
				
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
