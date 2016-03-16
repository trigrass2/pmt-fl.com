<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Integrated Digital Time-to-Digital Converters: Precision Measurement</title>

	<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
	<meta name="keywords" content="precision measurement technologies, time to digital tech" />
	<meta name="description" content="Integrated Digital Time-to-Digital Converters, high resolution measurement systems for time-of-flight (TOF), laser applications, from Precision Measurement Technologies." />	

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
				<h1 class="sub">Integrated Digital Time-to-Digital Converters</h1>
				<img class="main" src="/images/tdc/gp22-main.jpg" alt="" />

				<p>Digital delay time TDCs are integrated circuits for high precision time interval measurement and do this without any analog components. They became real thanks the to innovations in semiconductor technology made over years. They use the propagation delays of simple logical gates (i.e. inverters) for fine quantization of time intervals. Due to the enormous achievements in signal speed, especially in the CMOS sector, it has become possible to implement such TDCs in standard CMOS technology with a resolution in the picosecond range. Nowadays we can integrate system solutions into a single chip that are efficient, power saving, space saving and none the less low price.</p>
				
			</div>
			<div id="subSecond">

				<div id="sub2full">
				<p style="font-weight:bold;">Digital TDCs can be split into two groups:</p>
				<ul class="sub">
					<li>Absolute delay time TDCs</li>
					<li>Relative delay time TDCs</li>
				</ul>
				
				<h2 class="sub">Absolute Delay Time TDC</h2>
				
				<p>This type of TDC uses the absolute propagation time of signals through simple logical elements for fine quantisation of time intervals. (see figure below)</p>
 
				<p>In other words, it determines how many inverter cycles the measured time interval consists of. The figure shows the principle of operation. Clever circuit set-ups, redundant elements and special layout methods on the chip enable the exact reconstruction of the number of basic time intervals. The resolution strictly dependends upon the basic delay time in the chip. Resolutions in the range of 14 -100 ps can be achieved by a simple set-up of the measuring core and the use of a state-of-the art CMOS process. The propagation delay itself depends on temperature and supply voltage. Therefore the measured value must be calibrated. This is done by measuring one and two periods of a reference oscillator. Ideally this measurement and the following calculation is done by the TDC itself.</p>
				
				<p style="font-weight:bold;">Absolute delay time TDCs have the following advantage:</p>
				
				<ul class="sub">
					<li>The delay time of the inverter can be precisely adjusted and stabilized by using a phase controlled loop (PLL). It is independent from supply voltage and temperature.</li>
					<li>Good pulse-pair resolution</li>
					<li>Multi-hit capability</li>
				</ul>
				
				</div>
				
			</div>
			<div id="subThird">
				<div id="sub3left">
					<h2 class="sub">Absolute Delay Time TDC</h2>
					<a href="/images/tdc/tdc-measuring-method-delay.jpg" rel="lightbox[TDC]" title="Absolute Delay Time TDC"><img src="/images/tdc/tdc-measuring-method-delay-thumb.jpg" alt="" /></a>
					<p class="click">(click to enlarge)</p>
				
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
