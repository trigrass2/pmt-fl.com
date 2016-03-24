
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>TDC-GP2 | Precision Measurement Technologies</title>

	<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
	<meta name="keywords" content="precision measurement technologies, time to digital tech" />
	<meta name="description" content="Precision Measurement Technologies specializes in high resolution time-to-digital converters and all-in-one build solutions." />	

	<link rel="stylesheet" type="text/css" href="/css/control.css" />
	<link rel="stylesheet" href="/css/contact.css" type="text/css" media="screen" />

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="/js/javascript.js" type="text/javascript"></script>
	<script src="/js/javascript-menu.js" type="text/javascript"></script>


	<link rel="stylesheet" href="/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
	<link rel="stylesheet" href="/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
	<script type="text/javascript" src="/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	<script type="text/javascript">
	function closebox() {
		$.fancybox.close();
	}
	
	$(document).ready(function() {
		//$(".various").fancybox({type: 'ajax'});
	
		$(".various").fancybox({
			type		: 'iframe',
			maxWidth	: 800,
			maxHeight	: 800,
			fitToView	: false,
			width		: 500,
			height		: 600,
			autoSize	: false,
			closeClick	: false,
			closeBtn	: false,
			openEffect	: 'none',
			closeEffect	: 'none',
			helpers : { 
				overlay : {closeClick: false}
			}
		});
		
		var cookies = document.cookie;
		//alert (cookies.toLowerCase().indexOf("acam"));
		
		if (cookies.toLowerCase().indexOf("pmtdl") == -1) {
			$('.various').click();
		}
		
	});
	</script>
	
</head>

<body>

<div id="containerOut">
	<div id="containerIn">
	
<?php include("includes/header-nav.php"); ?>
		
		<div id="subNav">
			<h2 class="subn">Acam TDC</h2>
			<ul>
				<li><a href="/" title="xxx">TDC Overview</a></li>
				<li><a href="/" title="xxx">TDC-GP22</a></li>
				<li><a href="/" title="xxx">TDC-GP21</a></li>
				<li><a href="/" title="xxx">TDC-GP2</a></li>
				<ul>
					<li><a href="/" title="xxx">Measurement Range 1</a></li>
					<li><a href="/" title="xxx">Measurement Range 2</a></li>
					<li><a href="/" title="xxx">Temperature Measurement</a></li>
					<li><a href="/" title="xxx">Fire-pulse Generator</a></li>
				</ul>
				<li><a href="/" title="xxx">TDC-GP1</a></li>
				<li><a href="/" title="xxx">TDC-GPX</a></li>
				<li><a href="/" title="xxx">Customer-spec. TDCs</a></li>
				<li><a href="/" title="xxx">Documentation</a></li>
				<li><a href="/" title="xxx">Measuring Method</a></li>
				<li><a href="/" title="xxx">Applications</a></li>
				<li><a href="/" title="xxx">Ordering Numbers</a></li>
			</ul>
		</div>
		
		<div id="subBody">
			<div id="subTop">
				<h1 class="sub">GP2 - The New General Purpose TDC</h1>
				<img class="main" src="/images/tdc/gp2-main.jpg" alt="" />
				<p style="font-weight:bold;">TDC with Special Features for Ultrasonic Flow Meters and Ultrasonic Heat Meters</p>
				<p>The TDC-GP2 is the next generation of acam general-purpose TDCs. Higher resolution and smaller package size make it ideal for cost-sensitive industrial applications. With special function blocks like a fire pulse generator, stop enable, temperature measurement, and clock control, it is perfectly suited for flowmeter and heat-meter applications.</p>
				
			</div>
			<div id="subSecond">
			<h2 class="sub">General Circuit Features</h2>
				<div id="sub2left">
				<p style="font-weight:bold;">Measurement range 1</p>
				<ul class="sub">
					<li>2 channels with typ. 50 ps rms resolution</li>
					<li>65 ps Bin size</li>
					<li>Measurement range 3.5 ns to 1.8 µs</li>
					<li>15 ns pulse-pair resolution with 4-fold multihit capability</li>
					<li>4 events can be measured arbitrarily against each other</li>
					<li>Windowing for precise stop enable</li>
				</ul>
				
				<p style="font-weight:bold;">Measurement range 2</p>
				<ul class="sub">
					<li>1 channel with typ. 50 ps rms resolution</li>
					<li>65 ps Bin size</li>
					<li>Measurement range 500 ns to 4 ms</li>
					<li>2 x CLKHS pulse-pair resolution with 3-fold multihit capability</li>
					<li>Each of the 3 events can be assigned to an adjust-able measuring window with 10ns resolution</li>
				</ul>
				</div>
				<div id="sub2right">
				<p style="font-weight:bold;">Special Features</p>
				<ul class="sub">
					<li>Fire pulse generator for up to 15 pulses with programmable phase</li>
					<li>4 temperature measurement ports for 16 Bit temperature measurement</li>
					<li>Clock calibration unit</li>
					<li>Typical current consumption 5 µA</li>
				</ul>
				
				<p style="font-weight:bold;">General Features</p>
				<ul class="sub">
					<li>Trigger to rising and/or falling edge</li>
					<li>I/O voltage 1.8 V to 5.5 V</li>
					<li>Core voltage 1.8 V to 3.6 V</li>
					<li>1 MHz continuous data rate max.</li>
					<li>Temperature range 40°C to 125°C</li>
					<li>4 wire SPI interface</li>
					<li>QFN 32 package</li>
				</ul>
				
				</div>
				<a class="various" href="pop/download-pop.php"></a>
			</div>

		</div>
		<div class="clearboth"></div>
		
		
<?php include("includes/footer.php"); ?>

		<div class="clearboth"></div>
	</div>
	<div class="clearboth"></div>
</div>
<div id="downloadform" style="visibility:hidden;">
				<h2 class="sub">User Information</h2>
				<div class="wrapper">
				<div id="contactWrapper" role="form">
				
					<?php if(isset($hasError)) { //If errors are found ?>
						<p class="error">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
					<?php } ?>

					<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
						<div class="success">
							<p><strong>Email Successfully Sent!</strong></p>
							<p>Thank you for using our contact form <strong><?php echo $name;?></strong>! Your email was successfully sent and we 'll be in touch with you soon.</p>
						</div>
					<?php } ?>

					<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
					
						<div class="stage clear">			
						<input type="radio" name="GlobalCheck" id="na" value="sales@acam-usa.com" /><label for="na">For: North American (USA, Canada, Mexico) Company or Clients </label>
						</div>
						<div class="stage clear">
						<input type="radio" name="GlobalCheck" id="auzb" value="sales@acam-usa.com" /><label for="auzb">For:  Australia, New Zealand, Brazil Company or Clients </label>
						</div>
						<div class="stage clear">
						<input type="radio" name="GlobalCheck" id="intl" value="International@acam-usa.com" />&nbsp;<label for="intl">For: All Other Global Locations and Clients</label>
						</div>
					
					
						<div class="stage clear">
							<label for="name"><strong>Name: <em>*</em></strong></label>
							<input type="text" name="contactname" id="contactname" value="" class="required" role="input" aria-required="true" />
						</div>
						
						<div class="stage clear">
							<label for="company"><strong>Company: <em>*</em></strong></label>
							<input type="text" name="company" id="company" value="" class="required" role="input" aria-required="true" />
						</div>

						<div class="stage clear">
							<label for="phone"><strong>Phone: <em>*</em></strong></label>
							<input type="text" name="phone" id="phone" value="" class="" role="input" aria-required="false" />
						</div>
						
						<div class="stage clear">
							<label for="email"><strong>Email: <em>*</em></strong></label>
							<input type="text" name="email" id="email" value="" class="required email" role="input" aria-required="true" />
						</div>
										
						<p class="requiredNote"><em>*</em> Denotes a required field.</p>
						
						<input type="submit" value="Send Message" name="submit" id="submitButton" title="Click here to submit your message!" />
					</form>
					</div>
					</div>

		
</div>

</body>
</html>
