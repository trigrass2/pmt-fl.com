<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Magnetostrictive Positioning: Precision Measurement Technologies</title>

	<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
	<meta name="keywords" content="precision measurement technologies, time to digital tech" />
	<meta name="description" content="Magnetostrictive Positioning, high resolution measurement systems for time-of-flight (TOF), laser applications, from  Precision Measurement Technologies." />	

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
				<h1 class="sub">Magnetostrictive Positioning</h1>
				<img class="main" src="/images/tdc/gp22-main.jpg" alt="" />

				<p>The contact-less registration of positions, driving movements etc. are a required method for procedure automation, so that re-registration can take place in the actual situation of the system. Often precision in the &micro;m range are needed. The systems need to be robust, with little required maintenance and (of course) inexpensive. Several years ago a method was established, where ultrasonic delay time on a wire was used to determine a position.</p>
				
			</div>
			<div id="subSecond">
			
				<div id="sub2full">
				<p>A wire is strung over the entire length of the positioning equipment. A strong permanent magnet is situated at a certain position.</p>
				<p>A current pulse is sent by wire at regular intervals (i.e. 1k/sec) with several ampere and a length of several microseconds. This high current pulse results in a magnetic field around the wire, which changes rapidly. The position where the magnetic field of the permanent magnet is situated, an energy is generated that winds around the wire and generates an ultrasonic wave, which extends into both directions of the wire (at app. 2,700 m/sec) with ultrasonic speed. In the ?dead" side the ultrasonic impulse is absorbed, whereas the "active" side detects the impulse via ultrasonic receiver, which also converts it into a digital receiver impulse. The time between the start of the pulse and receiving of the receiver impulse is measured via TDC so that the location of the permanent magnet can be determined. In cases where the permanent magnet moves with the positioned parts (i.e. a milling cutter) the equipment can be positioned precisely.</p>

				<p>This procedure permits positioning precision of 2-5 &micro;m, which equals an ultrasonic delay time of 800 ps ? 2 ns, which is exactly the range that a TDC has to offer. With a high resolution, which is located slightly above the requirements, TDCs are ideal for time difference measurements. In addition, these chips are extremely small in comparison to past solutions, are ten times as precise while using only 1/10 of the power. All of these features contribute to the increase in distribution of TDCs.</p>

				
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
