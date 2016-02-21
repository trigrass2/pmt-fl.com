<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Drift Chambers, TDCs: Precision Mesurement Technologies</title>

	<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
	<meta name="keywords" content="precision measurement technologies, time to digital tech" />
	<meta name="description" content="Drift Chambers, TDCs, high resolution measurement systems for time-of-flight (TOF), laser applications, from  Precision Measurement Technologies." />	

	<link rel="stylesheet" type="text/css" href="/css/control.css" />
	<link rel="shortcut icon" type="image/x-icon" href="http://www.pmt-fl.com/favicon.ico" />
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

	<script src="/js/javascript.js" type="text/javascript"></script>
	<script src="/js/javascript-menu.js" type="text/javascript"></script>
	<script src="/js/subnav.js" type="text/javascript"></script>
	
	<script src="/js/lightbox.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="/css/lightbox.css" />

	<script type="text/javascript">
$(document).ready(function(){
	//alert(location.pathname);
	var str = document.URL;
	var str_sub = str.substr(str.lastIndexOf("/")+1);
	//$("a[href$=str_sub]").parent("ul").next("ul").slideDown(350);
	//alert(str_sub);
	//alert(jQuery.type($("a[href$=str_sub]")));
	
	var link = $('a[href$=str_sub]');
	//alert(link.attr('href'));
	if(link.parent().has("ul")) {
	  //alert("has ul");
	  link.parent("ul > a").click();
      //link.prev("ul").slideDown(350);
    }
	
	
	//$('#nav > li > a[href$=str_sub]').next("ul").slideDown(350);
	//$('#nav > li > a[href$=str_sub]').addClass("open");
//$('#nav > li > a[href$=str_sub]').find('img').first().attr('src', '/images/all/more-down.png');
});
	
/*$(document).ready(function(){
  $("#nav > li > a").on("click", function(e){
    //if($(this).parent().has("ul")) {
      //e.preventDefault();
    //}
	
    if(!$(this).attr('href')) {
      e.preventDefault();
    }
    
    if(!$(this).hasClass("open")) {
      // hide any open menus and remove all other classes
      $("#nav li ul").slideUp(350);
      $("#nav li a").removeClass("open");
	  $("#nav li a img").attr('src', '/images/all/more-right.png');
      
      // open our new menu and add the open class
      $(this).next("ul").slideDown(350);
      $(this).addClass("open");
	  $(this).find('img').first().attr('src', '/images/all/more-down.png');
    }
    
    else if($(this).hasClass("open")) {
      $(this).removeClass("open");
      $(this).next("ul").slideUp(350);
	  $(this).find('img').first().attr('src', '/images/all/more-right.png');
    }
  });
});*/
	</script>

</head>

<body onload="cssdropdown.startchrome('chromemenu');">

<div id="containerOut">
	<div id="containerIn">
	
<?php include("../includes/header-nav.php"); ?>
		
<?php include("../includes/subnav-tdc.php"); ?>
		
		<div id="subBody">
			<div id="subTop">
				<h1 class="sub">Drift Chambers</h1>
				<img class="main" src="/images/tdc/gpx-main.jpg" alt="" />

				<p>The history of TDCs begins with experimental high energy physics. The search for elementary particles challenges the physicians to the biggest experimental setups. In the analysis of the experimental data, time-measurement takes an important part. Drift chambers are typical examples as they are used in the bid colliders like the one at CERN. To learn something about the inner structure of atoms, particles are accelerated to enormous energies and then shot onto a target, where they burst into many smaller parts. The properties of these parts can be derived from their path in a magnetic field. This path is detected by drift chambers (see animation below)</p>
				
			</div>
			<div id="subSecond">
				<p>The detectors are arranged circular around the collision point. These consist of gas filled tubes in which a live wire is strung. If a reaction particle hits a gas molecule in one of these tubes, a cloud current is generated which drifts along the wire due to the electrical field (that's why it is called drift chamber). If the cloud current reaches the wire, an electrical pulse is triggered. The time from the collision of the particles to the hitting of the wire by the current cloud is measured by the TDCs.</p>
 
				<p>Since some of these experiments require several hundred thousand of these gas filled tubes, reliable, precise, energy efficient and inexpensive TDCs are very important. The required resolution is around app. 500 ps - 1 ns and can be reached with todays multi-channel single chip TDCs without any problem.</p>
				
				<div id="sub2full">
				<h2 class="sub">TDC Advantages</h2>
				<ul class="sub">
					<li>Direct conversion from time to digital values. No need for time-to-analog converters with following analog-to-digital converters</li>
					<li>Multichannel - the TDC-GP1 and TDC-F1 offer 8 channels in one IC.</li>
					<li>Multihit-Capability - The TDC-GPX and TDC-F1 can measure from 32 to unlimited number of hits per start, depending on the data read speed</li>
					<li>High rates - TDC-GPX can measure with 200 MHz peak, 40 MHz continuous</li>
				</ul>
				<p>These properties make the TDC an ideal tool also for time-of-flight mass spectroscopy, fluorescence spectroscopy, analysis of photoelectrons and many more scientific applications.</p>
				
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
