<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Downloads &amp; Documentation | Precision Measurement Technologies</title>

	<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
	<meta name="keywords" content="precision measurement technologies, time to digital tech" />
	<meta name="description" content="Precision Measurement Technologies specializes in high resolution time-to-digital converters and all-in-one build solutions." />	

	<link rel="stylesheet" type="text/css" href="/css/control.css" />
	<link rel="shortcut icon" type="image/x-icon" href="http://www.pmt-fl.com/favicon.ico" />
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

	<script src="/js/javascript.js" type="text/javascript"></script>
	<script src="/js/javascript-menu.js" type="text/javascript"></script>
	<script src="/js/subnav.js" type="text/javascript"></script>
	
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
		
		//var qstr = 
		//var query = window.location.search.slice(3);
		//var hash = document.location.hash.slice(1);
		var query = window.location.search;
		var hash = document.location.hash;		
		//alert(query);
		
		//alert(document.location.hash.slice(1));
		
		var cookies = document.cookie;
		//alert (cookies.toLowerCase().indexOf("acam"));
		
		if (cookies.toLowerCase().indexOf("pmtdl") == -1) {
			
			//$('.various').href = 'pop/download-pop.php' + query + hash;
			$('.various').attr("href", ("pop/download-pop.php" + query + hash));
			$('.various').click();
		}
		
	});
	</script>


</head>

<body onload="cssdropdown.startchrome('chromemenu');">

<div id="containerOut">
	<div id="containerIn">
	
<?php include("includes/header-nav.php"); ?>
		
<?php include("includes/subnav-gen.php"); ?>
		
		<div id="subBody">
			<div id="subTop">
				<h1 class="sub">Downloads &amp; Documentation</h1>
				<img class="main" src="/images/tdc/gp21-main.jpg" alt="" />
				
				<p>On this page you will find Datasheets, Application Notes, White Papers, Screencasts, and Software for all available products. We will request your information one time only. If you disable cookies, you will be asked each visit. Use navigation on the left to avoid scrolling.</p>
				
				<p>For all files, you can right click and "Save as..." to save the files. For PDFs, clicking directly will open the PDF in a new browser window.
				
			</div>
			<div id="subSecond">
			
				<div id="sub2full">
				<a name="tdc">&nbsp;</a>
				<h2 class="sub">Time-to-Digital Converters (TDCs)</h2>
				
				<a name="tdc_ds">&nbsp;</a>
				<table class="orno">
				<tr><td colspan="3"><h3 class="down">Datasheets</h3></h3></td></tr>
				<tr><th>Description</th><th>Size</th><th>Download</th></tr>
				<tr><td><strong>Datasheet TDC-GP22 Eval System:</strong><br />Preliminary datasheet for TDC-GP22 evaluation system</td><td>5.3MB</td><td><a href="/downloads/tdc/DB_GP22-EVA_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'TDC']);">DB_GP22-EVA_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet TDC-GP22:</strong><br />Datasheet for TDC-GP22 Time-to-Digital Converter</td><td>4MB</td><td><a href="/downloads/tdc/DB_GP22_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'TDC']);">DB_GP22_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet TDC-GP21 Eval System:</strong><br />Preliminary datasheet for TDC-GP21 evaluation system</td><td>5.3MB</td><td><a href="/downloads/tdc/DB_GP21-EVA_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'TDC']);">DB_GP21-EVA_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet TDC-GP21:</strong><br />Datasheet for TDC-GP21 Time-to-Digital Converter</td><td>4MB</td><td><a href="/downloads/tdc/DB_GP21_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'TDC']);">DB_GP21_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet TDC-GPX:</strong><br />ATMD evaluation system for TDC-GPX (<a href="/downloads/misc/ATMD-GPX-PDN.pdf" target="_blank" title="DISCONTINUED">DISCONTINUED</a>)</td><td>1.3MB</td><td><a href="/downloads/tdc/DB_AMGPX_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'TDC']);">DB_AMGPX_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet TDC-GP1:</strong><br />2-channel TDC, 250 ps/125 ps</td><td>1MB</td><td><a href="/downloads/tdc/DB_GP1_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'TDC']);">DB_GP1_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet TDC-GP2:</strong><br />2-channel TDC 65 ps</td><td>2.6MB</td><td><a href="/downloads/tdc/DB_GP2_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'TDC']);">DB_GP2_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet TDC-GPX:</strong><br />8-channel TDC 81 ps, 2-channel TDC 41 ps/27 ps/10 ps</td><td>800kB</td><td><a href="/downloads/tdc/DB_GPX_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'TDC']);">DB_GPX_en.pdf</a></td></tr>
				</table>

				<a name="tdc_app">&nbsp;</a>
				<table class="orno">
				<tr><td colspan="3"><h3 class="down">Application Notes</h3></td></tr>
				<tr><th>Description</th><th>Size</th><th>Download</th></tr>
				<tr><td><strong>Application Note 034:</strong><br />Laser Range Finder with the TDC-GP22</td><td>837kB</td><td><a href="/downloads/tdc/AN034_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'TDC']);">AN034_en.pdf</a></td></tr>
				<tr><td><strong>Application Note 027:</strong><br />TDC-GP2 to TDC-GP21 Migration and Compatibility Guideline</td><td>400kB</td><td><a href="/downloads/tdc/AN027_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'TDC']);">AN027_en.pdf</a></td></tr>
				<tr><td><strong>Application Note 024:</strong><br />Metrological Investigations of TDC-GP2 Temperature Measurement Unit</td><td>1.2MB</td><td><a href="/downloads/tdc/AN024_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'TDC']);">AN024_en.pdf</a></td></tr>
				<tr><td><strong>Application Note 016:</strong><br />TDC-GPX Reduced Decoupling</td><td>73kB</td><td><a href="/downloads/tdc/AN016_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'TDC']);">AN016_en.pdf</a></td></tr>
				<tr><td><strong>Application Note 013:</strong><br />TDC-GPX - PLL Regulation Circuit</td><td>100kB</td><td><a href="/downloads/tdc/AN013_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'TDC']);">AN013_en.pdf</a></td></tr>
				</table>

				<a name="tdc_soft">&nbsp;</a>
				<table class="orno">
				<tr><td colspan="3"><h3 class="down">Software</h3></td></tr>
				<tr><th>Description</th><th>Size</th><th>Download</th></tr>
				<tr><td><strong>Software TDC-GP22:</strong><br />STM32 &micro;C Sample code of Application Note 034</td><td>42kB</td><td><a href="/downloads/tdc/GP22_main_AN034.c" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'TDC']);">GP22_main_AN034.c</a></td></tr>
				<tr><td><strong>Software TDC-GP21</strong><br />Software package for GP21-EVA-KIT</td><td>104MB</td><td><a href="/downloads/tdc/CD-GP21-EVA-SW-W7-XP.zip" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'TDC']);">CD-GP21-EVA-SW-W7-XP.zip</a></td></tr>
				<tr><td><strong>Software TDC-GPX:</strong><br />Evaluation software for ATMD-GPX</td><td>18MB</td><td><a href="/downloads/tdc/ATMD-GPX.zip" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'TDC']);">ATMD-GPX.zip</a></td></tr>
				<tr><td><strong>Software TDC-GPX:</strong><br />Visual-C++ sample code for ATMD-GPX</td><td>214kB</td><td><a href="/downloads/tdc/ATMD-GPX-C-samples.zip" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'TDC']);">ATMD-GPX-C-samples.zip</a></td></tr>
				<tr><td><strong>Software ATMD-PCI:</strong><br />Driver files for ATMD-PCI interface card</td><td>2kB</td><td><a href="/downloads/tdc/AcamAtmdPCI.zip" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'TDC']);">AcamAtmdPCI.zip</a></td></tr>
				<tr><td><strong>Software National Instruments:</strong><br />NI VISA instrument drivers</td><td>12MB</td><td><a href="/downloads/tdc/ni-visa.zip" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'TDC']);">ni-visa.zip</a></td></tr>
				<tr><td><strong>Software National Instruments:</strong><br />NI VISA runtime engine for Windows 7</td><td>53MB</td><td><a href="/downloads/tdc/visa462runtime.exe" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'TDC']);">visa462runtime.exe</a></td></tr>
				<tr><td><strong>Software National Instruments:</strong><br />NI VISA runtime engine for Windows Vista</td><td>41MB</td><td><a href="/downloads/tdc/visa410full.exe" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'TDC']);">visa410full.exe</a></td></tr>
				<tr><td><strong>Software National Instruments:</strong><br />NI VISA runtime engine for Windows XP</td><td>14MB</td><td><a href="/downloads/tdc/visa320runtime.exe" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'TDC']);">visa320runtime.exe</a></td></tr>
				<tr><td><strong>Software National Instruments:</strong><br />NI VISA runtime engine for Windows 98</td><td>8MB</td><td><a href="/downloads/tdc/visa260runtime.exe" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'TDC']);">visa260runtime.exe</a></td></tr>
				</table>


				<a name="tdc_pcn">&nbsp;</a>
				<table class="orno">
				<tr><td colspan="3"><h3 class="down">PCN/PDN  (Product Change / Discontinuation Notes)</h3></td></tr>
				<tr><th>Description</th><th>Size</th><th>Download</th></tr>
				<tr><td><strong>PCN/PDN TDC-GP1</strong><br />Pd-free package</td><td>67kB</td><td><a href="/downloads/tdc/PCN0104.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'ChangeDisc', 'TDC']);">PCN0104.pdf</a></td></tr>
				<tr><td><strong>PCN/PDN TDC-F1</strong><br />Pb-free package</td><td>49kB</td><td><a href="/downloads/tdc/PCN0204.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'ChangeDisc', 'TDC']);">PCN0204.pdf</a></td></tr>
				<tr><td><strong>PCN/PDN TDC-F1</strong><br />Discontinuation of production</td><td>68kB</td><td><a href="/downloads/tdc/PDN0711-01.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'ChangeDisc', 'TDC']);">PDN0711-01.pdf</a></td></tr>
				<tr><td><strong>PCN/PDN ATMD-GP1</strong><br />Discontinuation of production</td><td>34kB</td><td><a href="/downloads/tdc/PDN1009-01.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'ChangeDisc', 'TDC']);">PDN1009-01.pdf</a></td></tr>
				</table>

				
				<a name="picostrain">&nbsp;</a>
				<h2 class="sub">PICOSTRAIN</h2>
				
				<a name="pst_ds">&nbsp;</a>
				<table class="orno">
				<tr><td colspan="3"><h3 class="down">Datasheets</h3></td></tr>
				<tr><th>Description</th><th>Size</th><th>Download</th></tr>
				<tr><td><strong>Datasheet PS09:</strong><br />Single-chip solution for strain gauges</td><td>8.9MB</td><td><a href="/downloads/picostrain/DB_PS09_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picostrain']);">DB_PS09_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet PS09 Eval System:</strong><br />Evaluation Kit for PS09</td><td>7.2MB</td><td><a href="/downloads/picostrain/DB_PS09-EVA_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picostrain']);">DB_PS09-EVA_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet PS09:</strong><br />DLC Evaluation Kit for PS09</td><td>4.8MB</td><td><a href="/downloads/picostrain/DB_PS09-DLC-EVA_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picostrain']);">DB_PS09-DLC-EVA_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet PS081:</strong><br />Enhanced Single-chip solution for weigh scales</td><td>7.5MB</td><td><a href="/downloads/picostrain/DB_PS081_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picostrain']);">DB_PS081_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet PS081 Eval System:</strong><br />Evaluation kit for PS081</td><td>5.4MB</td><td><a href="/downloads/picostrain/DB_PS081-EVA_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picostrain']);">DB_PS081-EVA_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet PS021:</strong><br />PICOSTRAIN front-end for strain gauge sensors</td><td>870kB</td><td><a href="/downloads/picostrain/DB_PS021_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picostrain']);">DB_PS021_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet PS021 Eval System:</strong><br />Evaluation system for PS021</td><td>6.6MB</td><td><a href="/downloads/picostrain/DB_PSA21_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picostrain']);">DB_PSA21_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet ALCS350-V2:</strong><br />Load cell simulator</td><td>1.6MB</td><td><a href="/downloads/picostrain/DB_ALCS350-V2_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picostrain']);">DB_ALCS350-V2_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet PicoProg081:</strong><br />Production Programmer for PS081</td><td>1.8MB</td><td><a href="/downloads/picostrain/DB_PicoProg081_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picostrain']);">DB_PicoProg081_en.pdf</a></td></tr>
				</table>	


				<a name="pst_app">&nbsp;</a>
				<table class="orno">
				<tr><td colspan="3"><h3 class="down">Application Notes</h3></td></tr>
				<tr><th>Description</th><th>Size</th><th>Download</th></tr>
				<tr><td><strong>Application Note 030:</strong><br />PS09: Using PICOSTRAIN with piezoresistive sensors</td><td>657k</td><td><a href="/downloads/picostrain/AN030_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Picostrain']);">AN030_en.pdf</a></td></tr>
				<tr><td><strong>Application Note 025:</strong><br />PS081: EMI Countermeasures for a Digital Load Cell</td><td>1.9MB</td><td><a href="/downloads/picostrain/AN025_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Picostrain']);">AN025_en.pdf</a></td></tr>
				<tr><td><strong>Application Note 023:</strong><br />PS081: Design Guideline for Building a Solar Body Scale</td><td>4MB</td><td><a href="/downloads/picostrain/AN023_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Picostrain']);">AN023_en.pdf</a></td></tr>
				<tr><td><strong>Application Note 022:</strong><br />PS081: Design Guideline for Building a Solar Kitchen Scale</td><td>4MB</td><td><a href="/downloads/picostrain/AN022_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Picostrain']);">AN022_en.pdf</a></td></tr>
				<tr><td><strong>Application Note 021:</strong><br />General: Compensation of gain error for uncompensated load cells</td><td>658kB</td><td><a href="/downloads/picostrain/AN021_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Picostrain']);">AN021_en.pdf</a></td></tr>
				<tr><td><strong>Application Note 018:</strong><br />PS08: Metrological investigations of PS08, Determining Zero Drift and Gain Drift</td><td>2.8MB</td><td><a href="/downloads/picostrain/AN018_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Picostrain']);">AN018_en.pdf</a></td></tr>
				<tr><td><strong>Application Note 012:</strong><br />General: Strain gage wiring with PICOSTRAIN</td><td>97kB</td><td><a href="/downloads/picostrain/AN012_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Picostrain']);">AN012_en.pdf</a></td></tr>
				<tr><td><strong>Product Report 0909:</strong><br />PS081: ESD reliability report</td><td>240kB</td><td><a href="/downloads/picostrain/PR0909_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Picostrain']);">PR0909_en.pdf</a></td></tr>
				</table>	

				
				<a name="pst_whp">&nbsp;</a>
				<table class="orno">
				<tr><td colspan="3"><h3 class="down">White Papers</h3></td></tr>
				<tr><th>Description</th><th>Size</th><th>Download</th></tr>
				<tr><td><strong>White Paper 004:</strong><br />PS081: How to build Digital Load Cells with PICOSTRAIN conveniently</td><td>5.2MB</td><td><a href="/downloads/picostrain/WP004_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'WhitePaper', 'Picostrain']);">WP004_en.pdf</a></td></tr>
				<tr><td><strong>White Paper 003:</strong><br />PS08: Millikelvin Resolution with only a few Microampere</td><td>1.1MB</td><td><a href="/downloads/picostrain/WP003_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'WhitePaper', 'Picostrain']);">WP003_en.pdf</a></td></tr>
				<tr><td><strong>White Paper 002:</strong><br />PS08 / PS081: How to lower gain and offset drift of a load cell</td><td>2.8MB</td><td><a href="/downloads/picostrain/"WP002_en.pdf target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'WhitePaper', 'Picostrain']);">WP002_en.pdf</a></td></tr>
				<tr><td><strong>White Paper 001:</strong><br />PS08: Construction guideline for solar driven scales</td><td>6MB</td><td><a href="/downloads/picostrain/WP001_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'WhitePaper', 'Picostrain']);">WP001_en.pdf</a></td></tr>
				</table>	
				

				<a name="pst_scrn">&nbsp;</a>
				<table class="orno">
				<tr><td colspan="3"><h3 class="down">Screencasts</h3></td></tr>
				<tr><th>Description</th><th>Size</th><th>Download</th></tr>
				<tr><td><strong>Screencasts PS09:</strong><br />38:11 min. webcast introduction into the PS09 evaluation kit</td><td>27MB</td><td><a href="/downloads/picostrain/PS09-Evaluation-Software_x.zip" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Screencast', 'Picostrain']);">PS09-Evaluation-Software_x.zip</a></td></tr>
				<tr><td><strong>Screencasts PS09:</strong><br />19:01 min. webcast shows how to do a correct temperature compensation of a load cell using PS09 using the load cell's Rspan</td><td>17MB</td><td><a href="/downloads/picostrain/PS09_Temp-Compensation-ext-Rspan_x.zip" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Screencast', 'Picostrain']);">PS09_Temp-Compensation-ext-Rspan_x.zip</a></td></tr>
				<tr><td><strong>Screencasts PS09:</strong><br />17:54 min. webcast shows how to do a correct temperature compensation of a load cell using PS09 using the PS09 internal temperature sensor</td><td>17MB</td><td><a href="/downloads/picostrain/PS09_Temp-Compensation_x.zip" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Screencast', 'Picostrain']);">PS09_Temp-Compensation_x.zip</a></td></tr>
				<tr><td><strong>Screencasts PS081/PS09:</strong><br />20:28 / 40:30 min. webcast introducing a new concept for digital load cells</td><td>11MB</td><td><a href="/downloads/picostrain/PS081_DLC-Interweighing_x.zip" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Screencast', 'Picostrain']);">PS081_DLC-Interweighing_x.zip</a></td></tr>
				<tr><td><strong>Screencasts PS08/PS081:</strong><br />13:36 min. webcast shows how to do a correct scaling of the HB0 measurement result</td><td>105MB</td><td><a href="/downloads/picostrain/PS081_Scaling-of-Result_x.zip" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Screencast', 'Picostrain']);">PS081_Scaling-of-Result_x.zip</a></td></tr>
				<tr><td><strong>Screencasts PS08-EVA-KIT:</strong><br />23:23 min. movie introducing the PS08 assembler software</td><td>78MB</td><td><a href="/downloads/picostrain/ASM-Screencast_x.zip" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Screencast', 'Picostrain']);">ASM-Screencast_x.zip</a></td></tr>
				</table>	


				<a name="pst_soft">&nbsp;</a>
				<table class="orno">
				<tr><td colspan="3"><h3 class="down">Software</h3></td></tr>
				<tr><th>Description</th><th>Size</th><th>Download</th></tr>
				<tr><td><strong>Software PS09:</strong><br />PS09-EVA-KIT, PICOPROG v2.0</td><td>281MB</td><td><a href="/downloads/picostrain/CD-PS09-EVA-KIT-PICOV20-XP-WIN7.zip" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'Picostrain']);">CD-PS09-EVA-KIT-PICOV20-XP-WIN7.zip</a></td></tr>
				<tr><td><strong>Software PS081:</strong><br />PS081-EVA-KIT, PICOPROG v2.0</td><td>296MB</td><td><a href="/downloads/picostrain/CD-PS081-EVA-KIT-PICOV20-XP-WIN7.zip" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'Picostrain']);">CD-PS081-EVA-KIT-PICOV20-XP-WIN7.zip</a></td></tr>
				<tr><td><strong>Software PS081:</strong><br />PS081-DLC-KIT, PICOPROG v2.0</td><td>296MB</td><td><a href="/downloads/picostrain/CD-PS081-DLC-KIT-PICOV20-XP-WIN7.zip" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'Picostrain']);">CD-PS081-DLC-KIT-PICOV20-XP-WIN7.zip</a></td></tr>
				<tr><td><strong>Software PSA021/PS021:</strong><br />PSA021 / PS021-EVA-KIT, COM Port</td><td>99MB</td><td><a href="/downloads/picostrain/CD-PSA21-EVA-KIT-COM-XP.zip" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'Picostrain']);">CD-PSA21-EVA-KIT-COM-XP.zip</a></td></tr>
				<tr><td><strong>Software National Instruments:</strong><br />NI VISA runtime engine for Windows 7</td><td>53MB</td><td><a href="/downloads/picostrain/visa462runtime.exe" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'Picostrain']);">visa462runtime.exe</a></td></tr>
				<tr><td><strong>Software National Instruments:</strong><br />NI VISA runtime engine for Windows Vista</td><td>41MB</td><td><a href="/downloads/picostrain/visa410full.exe" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'Picostrain']);">visa410full.exe</a></td></tr>
				<tr><td><strong>Software National Instruments:</strong><br />NI VISA runtime engine for Windows XP</td><td>14MB</td><td><a href="/downloads/picostrain/visa320runtime.exe" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'Picostrain']);">visa320runtime.exe</a></td></tr>
				</table>	

				
				<a name="picocap">&nbsp;</a>
				<h2 class="sub">PICOCAP</h2>
				
				<a name="pca_ds">&nbsp;</a>
				<table class="orno">
				<tr><td colspan="3"><h3 class="down">Datasheets</h3></td></tr>
				<tr><th>Description</th><th>Size</th><th>Download</th></tr>
				<tr><td><strong>Datasheet PCap02, Vol. 1:</strong><br />General Data and Front-End</td><td>2.6MB</td><td><a href="/downloads/picocap/DB_PCap02A_Vol1_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picocap']);">DB_PCap02A_Vol1_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet PCap02, Vol. 2:</strong><br />Digital Signal Processor</td><td>1.6MB</td><td><a href="/downloads/picocap/DB_PCap02A_Vol2_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picocap']);">DB_PCap02A_Vol2_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet PCap02 Eval System:</strong><br />Evaluation System for PCap02</td><td>990kB</td><td><a href="/downloads/picocap/DB_PCap02-EVA-Kit_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picocap']);">DB_PCap02-EVA-Kit_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet PCap02 Eval System:</strong><br />Evaluation Software for PICOCAP Devices</td><td>2MB</td><td><a href="/downloads/picocap/DB_PCap02plus_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picocap']);">DB_PCap02plus_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet PICOCAP DEVICES:</strong><br />Assembler Software PICOCAP Devices</td><td>750kB</td><td><a href="/downloads/picocap/DB_PCap-Assembler_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picocap']);">DB_PCap-Assembler_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet PCap02, Linearize:</strong><br />Description of Linearization Firmware</td><td>1.2MB</td><td><a href="/downloads/picocap/DB_PCap02_Linearize_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picocap']);">DB_PCap02_Linearize_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet PCap01:</strong><br />Single-chip solution with standard firmware</td><td>5MB</td><td><a href="/downloads/picocap/DB_PCap01Ax_0301_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picocap']);">DB_PCap01Ax_0301_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet PCap01:</strong><br />Single-chip solution for humidity measurement</td><td>4MB</td><td><a href="/downloads/picocap/DB_PCap01AK-0101xx_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picocap']);">DB_PCap01AK-0101xx_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet PCap01:</strong><br />Description of PCap01 DSP and Assembler</td><td>3MB</td><td><a href="/downloads/picocap/DB_PCap01_DSP_e.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picocap']);">DB_PCap01_DSP_e.pdf</a></td></tr>
				<tr><td><strong>Datasheet PCap01:</strong><br />General evaluation kit for PCap01</td><td>2.6MB</td><td><a href="/downloads/picocap/DB_PCap01-EVA-KIT_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picocap']);">DB_PCap01-EVA-KIT_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet PCap01:</strong><br />Description of humidity measurement demonstrator</td><td>3MB</td><td><a href="/downloads/picocap/DB_PCap01_HUM_DEMO_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picocap']);">DB_PCap01_HUM_DEMO_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet PCap01-Touch:</strong><br />Very-Low-Power IC for Capacitive Touch Sensor Solutions</td><td>1.3MB</td><td><a href="/downloads/picocap/DB_PCap01_Touch_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picocap']);">DB_PCap01_Touch_en.pdf</a></td></tr>
				</table>


				<a name="pca_scrn">&nbsp;</a>
				<table class="orno">
				<tr><td colspan="3"><h3 class="down">Screencasts</h3></td></tr>
				<tr><th>Description</th><th>Size</th><th>Download</th></tr>
				<tr><td><strong>Screencasts PCap01:</strong><br />2:44 min. webcast introduction into PCap01 Evaluation Kit</td><td>117MB</td><td><a href="/downloads/picocap/PCap01-Evaluation-Software_x.zip" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Screencast', 'Picocap']);">PCap01-Evaluation-Software_x.zip</a></td></tr>
				</table>


				<a name="pca_soft">&nbsp;</a>
				<table class="orno">
				<tr><td colspan="3"><h3 class="down">Software</h3></td></tr>
				<tr><th>Description</th><th>Size</th><th>Download</th></tr>
				<tr><td><strong>Software PCap02:</strong><br />Evaluation software for PICOCAP Devices</strong><br />Full installer package incl. drivers</td><td>168MB</td><td><a href="/downloads/picocap/PCap02plus.zip" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'Picocap']);">PCap02plus.zip</a></td></tr>
				<tr><td><strong>Software PCap01:</strong><br />Evaluation software for PCap01-EVA-KIT and PCap01-HUM-EVA</strong><br />Full installer package incl. drivers</td><td>150MB</td><td><a href="/downloads/picocap/PCap01-EVA-SW_W7_XP.zip" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'Picocap']);">PCap01-EVA-SW_W7_XP.zip</a></td></tr>
				<tr><td><strong>Software PCap01:</strong><br />Assembler software for PCap01, installer package</td><td>160MB</td><td><a href="/downloads/picocap/PCap01_Assembler.zip" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'Picocap']);">PCap01_Assembler.zip</a></td></tr>
				<tr><td><strong>Software PCap01:</strong><br />Standard firmware for PCap01A</td><td>25k</td><td><a href="/downloads/picocap/PCap01_standard.hex" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'Picocap']);">PCap01_standard.hex</a></td></tr>
				<tr><td><strong>Software PCap01:</strong><br />Firmware for humidity+temperature measurement</td><td>25k</td><td><a href="/downloads/picocap/PCap01_humidity.hex" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'Picocap']);">PCap01_humidity.hex</a></td></tr>
				<tr><td><strong>Software PICOPROG V2.0:</strong><br />Driver Installer Stand-Alone</td><td>5MB</td><td><a href="/downloads/picocap/PicoProg_v2_Driver_Installer_Stand-Alone.zip" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'Picocap']);">PicoProg_v2_Driver_Installer_Stand-Alone.zip</a></td></tr>
				</table>
	
	
	
				<a name="ufc">&nbsp;</a>
				<h2 class="sub">Ultrasonic Flow Converters (UFCs)</h2>
				
				<a name="ufc_ds">&nbsp;</a>
				<table class="orno">
				<tr><td colspan="3"><h3 class="down">Datasheets</h3></td></tr>
				<tr><th>Description</th><th>Size</th><th>Download</th></tr>
				
				<tr><td><strong>Datasheet TDC-GP30 Vol. 1:</strong><br />System-Integrated Solution for Ultrasonic Flow Meters General Data and Frontend Description</td><td>1.2MB</td><td><a href="/downloads/ufc/DB_GP30_Vol1.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'UFC']);">DB_GP30_Vol1.pdf</a></td></tr>
				<tr><td><strong>Datasheet TDC-GP30 Vol. 2:</strong><br />System-Integrated Solution for Ultrasonic Flow Meters CPU, Memory and Firmware</td><td>1.3MB</td><td><a href="/downloads/ufc/DB_GP30_Vol2.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'UFC']);">DB_GP30_Vol2.pdf</a></td></tr>
				
				<tr><td><strong>Datasheet TDC-GP22 Eval System:</strong><br />Evaluation System for TDC-GP22</td><td>5.3MB</td><td><a href="/downloads/ufc/DB_GP22-EVA_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'UFC']);">DB_GP22-EVA_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet TDC-GP22:</strong><br />Universal 2-Channel TDC-GP22 dedicated to Ultrasonic Heat &amp; Water Meters</td><td>4MB</td><td><a href="/downloads/ufc/DB_GP22_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'UFC']);">DB_GP22_en.pdf</a></td></tr>
				<tr><td><strong>Development Support TDC-GP22:</strong><br />Evaluation System for TDC-GP22 DEMO KIT</td><td>2.4MB</td><td><a href="/downloads/ufc/DB_GP22-DEMO_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'UFC']);">DB_GP22-DEMO_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet TDC-GP21 Eval System:</strong><br />Evaluation System for TDC-GP21</td><td>5.3MB</td><td><a href="/downloads/ufc/DB_GP21-EVA_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'UFC']);">DB_GP21-EVA_en.pdf</a></td></tr>
				<tr><td><strong>Datasheet TDC-GP21:</strong><br />Universal 2-Channel TDC-GP21</td><td>4MB</td><td><a href="/downloads/ufc/DB_GP21_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'UFC']);">DB_GP21_en.pdf</a></td></tr>
				</table>


				<a name="ufc_app">&nbsp;</a>
				<table class="orno">
				<tr><td colspan="3"><h3 class="down">Application Notes</h3></td></tr>
				<tr><th>Description</th><th>Size</th><th>Download</th></tr>
				<tr><td><strong>Application Note 032:</strong><br />Ultrasonic Water & Heat Metering with the TDC-GP22</td><td>1.5MB</td><td><a href="/downloads/ufc/AN032_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'UFC']);">AN032_en.pdf</a></td></tr>
				<tr><td><strong>Application Note 029:</strong><br />Ultrasonic Heat Metering with the TDC-GP21</td><td>3.6MB</td><td><a href="/downloads/ufc/AN029_en.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'UFC']);">AN029_en.pdf</a></td></tr>
				</table>


				<a name="ufc_soft">&nbsp;</a>
				<table class="orno">
				<tr><td colspan="3"><h3 class="down">Software</h3></td></tr>
				<tr><th>Description</th><th>Size</th><th>Download</th></tr>
				<tr><td><strong>Software TDC-GP22:</strong><br />Software package for GP22-EVA-KIT</td><td>111MB</td><td><a href="/downloads/ufc/CD-GP22-EVA-XP-WIN7.zip" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'UFC']);">CD-GP22-EVA-XP-WIN7.zip</a></td></tr>
				<tr><td><strong>Software TDC-GP22:</strong><br />STM32 &micro;C Sample code</td><td>34k</td><td><a href="/downloads/ufc/GP22_main_AN032.c" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'UFC']);">GP22_main_AN032.c</a></td></tr>
				<tr><td><strong>Software TDC-GP21:</strong><br />Software package for GP21-EVA-KIT</td><td>104MB</td><td><a href="/downloads/ufc/CD-GP21-EVA-XP-WIN7.zip" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'UFC']);">CD-GP21-EVA-XP-WIN7.zip</a></td></tr>
				</table>

				
				
				<a name="picoturn">&nbsp;</a>
				<h2 class="sub">PICOTURN</h2>
				
				<a name="ptu_ds">&nbsp;</a>
				<table class="orno">
				<tr><td colspan="3"><h3 class="down">Datasheets</h3></td></tr>
				<tr><th>Description</th><th>Size</th><th>Download</th></tr>
				<tr><td><strong>Datasheet PICOTURN-BM:</strong><br />PICOTURN rotational speed sensor for turbochargers</td><td>586kB</td><td><a href="/downloads/picoturn/DB_PicoTurnBM_e.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picoturn']);">DB_PicoTurnBM_e.pdf</a></td></tr>
				<tr><td><strong>Datasheet PICOTURN-CT:</strong><br />Calibration device for PICOTURN-BM</td><td>173kB</td><td><a href="/downloads/picoturn/DB_PicoTurnCT_e.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picoturn']);">DB_PicoTurnCT_e.pdf</a></td></tr>
				<tr><td><strong>Datasheet PICOTURN-2G:</strong><br />Smart sensor for turbochargers</td><td>652kB</td><td><a href="/downloads/picoturn/DB_PT2G_e.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Datasheet', 'Picoturn']);">DB_PT2G_e.pdf</a></td></tr>
				</table>


				<a name="ptu_app">&nbsp;</a>
				<table class="orno">
				<tr><td colspan="3"><h3 class="down">Application notes</h3></td></tr>
				<tr><th>Description</th><th>Size</th><th>Download</th></tr>
				<tr><td><strong>Application Note 094:</strong><br />Using PuTTY.EXE as a Port Monitor for the PICOTURN-2G System</td><td>800k</td><td><a href="/downloads/picoturn/AN094_e.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Picoturn']);">AN094_e.pdf</a></td></tr>
				</table>


				<a name="ptu_pcn">&nbsp;</a>
				<table class="orno">
				<tr><td colspan="3"><h3 class="down">PCN/PDN  (Product Change / Discontinuation Notes)</h3></td></tr>
				<tr><th>Description</th><th>Size</th><th>Download</th></tr>
				<tr><td><strong>PDN PICOTURN-DY:</strong><br />Discontinuation of Production</td><td>60K</td><td><a href="/downloads/picoturn/PDN0910-01.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'ChangeDisc', 'Picoturn']);">PDN0910-01.pdf</a></td></tr>
				</table>

				
				<a name="surface">&nbsp;</a>
				<h2 class="sub">Surface Concept</h2>
				
				<a name="sur_man">&nbsp;</a>
				<table class="orno">
				<tr><td colspan="3"><h3 class="down">Manuals</h3></td></tr>
				<tr><th>Description</th><th>Size</th><th>Download</th></tr>
				<tr><td><strong>DLDGUI Software v7.4</strong></td><td></td><td><a href="downloads/surface-concept/Manual_GUI_Software_Vers.7.4.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Manual', 'Surface']);">Manual_GUI_Software_Vers.7.4.pdf</a></td></tr>
				<tr><td><strong>DLD3030</strong><br />Manual of a Delayline Detector DLD3030 adapted to a Scienta analyzer. Customer specific layout with integrated micro electrostatic lens system for parallel operation of the DLD together with a SPLEED.</td><td></td><td><a href="downloads/surface-concept/Manual_DLD3030.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Manual', 'Surface']);">Manual_DLD3030.pdf</a></td></tr>
				<tr><td><strong>DLD4444</strong><br />Manual of a Delayline Detector DLD4444 in a customer specific layout for a direct readout of MCP pulses in addition to the normal DLD operation.</td><td></td><td><a href="downloads/surface-concept/Manual_DLD4444_Vers2.1.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Manual', 'Surface']);">Manual_DLD4444_Vers2.1.pdf</a></td></tr>
				<tr><td><strong>DLD4040-4Q</strong><br /> Manual of a 4 Quadrant Delayline Detector DLD4040-4Q with advanced readout system. The customer specific layout includes a translation and rotation stage with integrated position readback sensor.</td><td></td><td><a href="downloads/surface-concept/Manual_4-Quadrant DLD4040-4Q_Ver1.2.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Manual', 'Surface']);">Manual_4-Quadrant DLD4040-4Q_Ver1.2.pdf</a></td></tr>
				<tr><td><strong>SPLEED-DLD Combination</strong><br />Manual of a High Voltage SPLEED-DLD Combination adapted to a High Voltage Scienta analyzer.</td><td></td><td><a href="downloads/surface-concept/Manual_SPLEED-DLD Combination_V1.4.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Manual', 'Surface']);">Manual_SPLEED-DLD Combination_V1.4.pdf</a></td></tr>
				<tr><td><strong>DLD8080</strong><br />Manual of the standard DLD8080 for X-ray, ion, and  electron detection</td><td></td><td><a href="downloads/surface-concept/Manual_DLD8080_V1.2.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Manual', 'Surface']);">Manual_DLD8080_V1.2.pdf</a></td></tr>
				<tr><td><strong>DLD120120</strong><br />Manual of the standard DLD120120 for X-ray, ion, and  electron detection</td><td></td><td><a href="downloads/surface-concept/Manual_DLD120120_Ver1.3.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Manual', 'Surface']);">Manual_DLD120120_Ver1.3.pdf</a></td></tr>
				</table>
		
				
				<a name="sur_soft">&nbsp;</a>
				<table class="orno">
				<tr><td colspan="3"><h3 class="down">Software</h3></td></tr>
				<tr><td colspan="3"><strong><u>Attention:</u></strong> Unless using the demo, <strong>all software packages must be completed by the user specific initialization files</strong> belonging to the appropriate delay line detector. The specific files are <strong>DLD_GPX3.INI</strong> and the TDC firmware file, which is named &quot;<strong>*.RBT</strong>&quot;. These files have been provided as part of your detector package at delivery. You may either copy the initially delivered files into the updated software folder or alter an existing INI for the needs of your individual hardware. Be aware, that any INI alteration may come with the risk of wrong configurations and may lead to uncertainties in the behavior of your detector system.</p></td></tr>
				<tr><th>Description</th><th>Size</th><th>Download</th></tr>
				<tr><td><strong>DLDGui Demo</strong><br />DLD software demo of DLD-Monitor and LabView&trade; example with data measured with a Surface Concept DLD4444</td><td></td><td><a href="downloads/surface-concept/DldGui_DemoDLD4444.zip" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'Surface']);">DldGui_DemoDLD4444.zip</a></td></tr>
				<tr><td><strong>DldGui Core (2010_04_19)</strong><br />All you need to update your Surface Concept DLDGUI program. Note: The package <strong>does not include</strong> your individual DLD <strong>files for initialization (INI) and firmware (RBT)</td><td></td><td><a href="downloads/surface-concept/DldGui_Core_2010_04_19.zip" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'Surface']);">DldGui_Core_2010_04_19.zip</a></td></tr>
				<tr><td><strong>DLD LabVIEW&trade; Core</strong><br />Base package for the LabView&trade; read-out of Surface Concept DLDs.  Includes sources for the LVWRAPPER.DLL.</td><td></td><td><a href="downloads/surface-concept/DLD_LabView_Core.zip" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'Surface']);">DLD_LabView_Core.zip</a></td></tr>
				<tr><td><strong>DLD Addon for the VG Scienta SES 1.2.6 Software</strong><br />Makes your VG-Scienta analyzer interface compatible with the Surface Concept delay line detectors. Use this package as extention for the VG Scienta SES 1.2.6 software (Surface Concept does not provide any VG Scienta software components, all files included in this package require  an existing SES software).</td><td></td><td><a href="downloads/surface-concept/DLD_Scienta_SES1.2.6.zip" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'Surface']);">DLD_Scienta_SES1.2.6.zip</a></td></tr>
				<tr><td><strong>Example Configuration Files</strong><br />Example files for initialization (INI) and firmware (RBT) for the most common DLDs. Note, that the individual detector setup varies significantly even within the the same product series. Always tune your final initialization for your individual detector system by comparing against the INI files that have been delivered with your delay line detector package.</td><td></td><td><a href="downloads/surface-concept/ConfigFilesDLD4040_Example.zip" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'Surface']);">ConfigFilesDLD4040_Example.zip</a></td></tr>
				<tr><td><strong>USB Drivers</strong><br />USB drivers for all newer Surface Concept TDCs on Windows<span class="trademarkNotice">&reg;</span> operating systems.</td><td></td><td><a href="downloads/surface-concept/DLD_DriversUSB.zip" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'Surface']);">DLD_DriversUSB.zip</a></td></tr>
				<tr><td><strong>Developer's Package</strong><br />Programming ressources package for connecting any software to the Surface Concept DLD user interface.</td><td></td><td><a href="downloads/surface-concept/DLD_ProgInterface2010_04_19.zip" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Software', 'Surface']);">DLD_ProgInterface2010_04_19.zip</a></td></tr>
				</table>
				
				
				<a name="sur_app">&nbsp;</a>
				<table class="orno">
				<tr><td colspan="3"><h3 class="down">Product Info / Application Notes</h3></td></tr>
				<tr><th>Description</th><th>Size</th><th>Download</th></tr>
				<tr><td>Full Product Catalog</td><td></td><td><a href="downloads/surface-concept/Catalog-2014.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">Catalog-2014.pdf</a></td></tr>
				<tr><td>Applicationsheet_DLD4040-IG</td><td></td><td><a href="downloads/surface-concept/Applicationsheet_DLD4040-IG.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">Applicationsheet_DLD4040-IG.pdf</a></td></tr>
				<tr><td>Hannover_Technologie_Exponat</td><td></td><td><a href="downloads/surface-concept/Hannover_Technologie_Exponat.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">Hannover_Technologie_Exponat.pdf</a></td></tr>
				<tr><td>Datasheet_TDC</td><td></td><td><a href="downloads/surface-concept/Datasheet_TDC.pdf" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">Datasheet_TDC.pdf</a></td></tr>
				<tr><td>Infoblatt Small DLDs</td><td></td><td><a href="downloads/surface-concept/Infoblatt Small DLDs.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">Infoblatt Small DLDs.pdf</a></td></tr>
				<tr><td>InfoblattDLD3636</td><td></td><td><a href="downloads/surface-concept/InfoblattDLD3636.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">InfoblattDLD3636.pdf</a></td></tr>
				<tr><td>InfoblattDLD3636XR</td><td></td><td><a href="downloads/surface-concept/InfoblattDLD3636XR.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">InfoblattDLD3636XR.pdf</a></td></tr>
				<tr><td>InfoblattDLD4030H9HVMM</td><td></td><td><a href="downloads/surface-concept/InfoblattDLD4030H9HVMM.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">InfoblattDLD4030H9HVMM.pdf</a></td></tr>
				<tr><td>InfoblattDLD4040IG</td><td></td><td><a href="downloads/surface-concept/InfoblattDLD4040IG.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">InfoblattDLD4040IG.pdf</a></td></tr>
				<tr><td>InfoblattDLD4242H9</td><td></td><td><a href="downloads/surface-concept/InfoblattDLD4242H9.pdf" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">InfoblattDLD4242H9.pdf</a></td></tr>
				<tr><td>InfoblattDLD4242H9HV</td><td></td><td><a href="downloads/surface-concept/InfoblattDLD4242H9HV.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">InfoblattDLD4242H9HV.pdf</a></td></tr>
				<tr><td>InfoblattDLD8080</td><td></td><td><a href="downloads/surface-concept/InfoblattDLD8080.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">InfoblattDLD8080.pdf</a></td></tr>
				<tr><td>NIM_AMP</td><td></td><td><a href="downloads/surface-concept/NIM_AMP.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">NIM_AMP.pdf</a></td></tr>
				<tr><td>NIM_CFD</td><td></td><td><a href="downloads/surface-concept/NIM_CFD.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">NIM_CFD.pdf</a></td></tr>
				<tr><td>Datasheet_NIM-Counter-Timer-Module</td><td></td><td><a href="downloads/surface-concept/Datasheet_NIM-Counter-Timer-Module.pdf" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">NIM_Counter_Timer.pdf</a></td></tr>
				<tr><td>Overview_TDCs</td><td></td><td><a href="downloads/surface-concept/Overview_TDCs.pdf" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">Overview TDCs.pdf</a></td></tr>
				<tr><td>Surface_Concept_DLDs_Catalogue</td><td></td><td><a href="downloads/surface-concept/Surface_Concept_DLDs_Catalogue.pdf" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">Surface_Concept_DLDs_Catalogue.pdf</a></td></tr>
				<tr><td>SurfaceConcecptDLDs</td><td></td><td><a href="downloads/surface-concept/SurfaceConcecptDLDs.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">SurfaceConceptDLDs.pdf</a></td></tr>
				<tr><td>SurfaceConcecptTDCs</td><td></td><td><a href="downloads/surface-concept/SurfaceConcecptTDCs.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">SurfaceConceptTDCs.pdf</a></td></tr>
				<tr><td>SC_HighPecision_HVPS</td><td></td><td><a href="downloads/surface-concept/SC_HighPecision_HVPS.pdf" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">Surface Concept High Precision High Voltage Supplies.pdf</a></td></tr>
				<tr><td>TNote-SlabImaging</td><td></td><td><a href="downloads/surface-concept/TNote-SlabImaging.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">TNote-SlabImaging.pdf</a></td></tr>
				<tr><td>TNotes-1D_Delayline_Detector_Performance</td><td></td><td><a href="downloads/surface-concept/TNotes-1D_Delayline_Detector_Performance.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">TNotes-1D_Delayline_Detector_Performance.pdf</a></td></tr>
				<tr><td>Toolbox_Product_Information</td><td></td><td><a href="downloads/surface-concept/Toolbox_Product_Information_2003-09-14.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">Toolbox_Product_Information_2003-09-14.pdf</a></td></tr>
				</table>
				
				
				<a name="sur_misc">&nbsp;</a>
				<table class="orno">
				<tr><td colspan="3"><h3 class="down">Miscellaneous</h3></td></tr>
				<tr><th>Description</th><th>Size</th><th>Download</th></tr>
				<tr><td>Delay Line Detectors - Principle of Operation</td><td></td><td><a href="downloads/surface-concept/DLD - Principle of Operation.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Manual', 'Surface']);">DLD - Principle of Operation.pdf</a></td></tr>
				<tr><td>Guidelines Surface Concept  Delay Line Detectors</td><td></td><td><a href="downloads/surface-concept/Guidelines_TimeResImg_DLD.ppt" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'AppNote', 'Surface']);">Guidelines_TimeResImg_DLD.ppt</a></td></tr>
				<tr><td>Survey of Particle MCP Detectors with Delay Line Anode</td><td></td><td><a href="downloads/surface-concept/DLD_Overview_Applications.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Manual', 'Surface']);">DLD_Overview_Applications.pdf</a></td></tr>
				<tr><td>Development Roadmap</td><td></td><td><a href="downloads/surface-concept/Roadmap_english.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Manual', 'Surface']);">Roadmap_english.pdf</a></td></tr>
				<tr><td>General Terms and Conditions (AGBs)</td><td></td><td><a href="downloads/surface-concept/AGBs Surface Concept english.pdf" target="_blank" title="" onClick="_gaq.push(['_trackEvent', 'Downloads', 'Manual', 'Surface']);">AGBs Surface Concept english.pdf</a></td></tr>
				</table>
	
                     			
				
				
				

				<a class="various" href="pop/download-pop.php"></a>
				
				
				</div>
				

			</div>
			<div id="subThird">
				<div id="sub3left">
					<!--<h2 class="sub">Picture!</h2>
					<a href="/images/tdc/db-gp2-block.gif" rel="lightbox[picoturn]"><img src="/images/tdc/db-gp2-block.jpg" alt="" /></a>
					<p class="click">(click to enlarge)</p>-->
				
				</div>
				<div id="sub3right">

				
				</div>
			</div>
		</div>
		<div class="clearboth"></div>
		
		
<?php include("includes/footer.php"); ?>

		<div class="clearboth"></div>
	</div>
	<div class="clearboth"></div>
</div>
</body>
</html>
