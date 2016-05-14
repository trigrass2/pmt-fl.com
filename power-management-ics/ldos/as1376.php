<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Power Management ICS: Precision Measurement Technologies</title>
  <?php include("../../includes/head.php"); ?>
</head>
<body>

<!-- BEGIN containerOut -->
<div id="containerOut">

  <!-- BEGIN containerIN -->
  <div id="containerIn">
    <?php include("../../includes/header-nav.php"); ?>



    <section role="main" class="product-detail">
      <article class="product-details">
        <h1 class="primary-heading">AS1376 Linear Regulator</h1>
        <h2 class="secondary-heading">1A, Low Input Voltage, Ultra low drop out voltage with Low Quiescent Current LDO</h2>

        <p class="intro">
        The AS1376 is a dual supply rail linear regulator designed to deliver 1A of load current while consuming only 67&mu;A (typ) of ground current. In the typical post regulation application VBIAS is directly connected to the main input supply, (range 2.5V - 5.5V) and VIN is supplied by the output voltage of a host DC-DC Converter (range 0.7V - 4.5V).
        <img src="../../images/power-management-ics/AS1376-block-diagram_f380greyscale.jpg" alt="Block diagram of the AS1376 Linear Regulator"/>
        </p>
        <a href="../../downloads/power-management-ics/AS1376_datasheet_[2-04].pdf"><button>Download Datasheet</button></a>
        <dl class="product-features">
          <dt>Key Features</dt>
          <dd>Less internal voltage losses and minimized self-heating</dd>
          <dd>Supports a variety of low voltage end applications</dd>
          <dd>Ideal as follower of a buck converter</dd>
          <dd>Independent bias supply ensures more robustness due to heavy load changes</dd>
          <dd>Supports a variety of high load applications</dd>

          <dt>Key Benefits</dt>
          <dd>Ultra-low dropout voltage: &lt;120mV @ 1A load</dd>
          <dd>Output voltage from 0.5V to 3.3V</dd>
          <dd>Input voltage from 0.7V to 3.6V</dd>
          <dd>Bias supply voltage from 2.5V to 5.5V</dd>
          <dd>Maximum output current up to 1A</dd>
        </dl>

        <table class="product-facts">
          <tr>
            <th colspan="2">Product Facts</th>
          </tr>
          <tr>
            <td>Output [#]</td>
            <td>1</td>
          </tr>
          <tr>
            <td>Accuracy [%]</td>
            <td>&plusmn;1.5</td>
          </tr>
          <tr>
            <td>Output current [mA]</td>
            <td>1000</td>
          </tr>
          <tr>
            <td>Feature</td>
            <td>  ultra low dropout,<br />
            very low input/output voltage range</td>
          </tr>
          <tr>
            <td>Output voltage [V]</td>
            <td>0.5 to 3.3</td>
          </tr>
          <tr>
            <td>Dropout voltage @ max current [mV]</td>
            <td>105</td>
          </tr>
          <tr>
            <td>Supply current [&mu;A]</td>
            <td>6.5 (Vin)<br />
            60 (Vbias)</td>
          </tr>
          <tr>
            <td>Supply voltage [V]</td>
            <td>0.7 to 3.6 (Vin)<br />
            2.5 to 5.5 (Vbias)</td>
          </tr>
          <tr>
            <td>Package</td>
            <td>WL-CSP-6<br />
            TDFN-8 (2x2)</td>
          </tr>
        </table>

      </article>

      <aside role="complimentary" class="sidebar">
        <ul class="vertical-nav">
          <?php include("../../includes/subnav-power-management-ics.php"); ?>    
        </ul>
      </aside>
    </section>
    
      
    
    
    <?php include("../../includes/footer.php"); ?>
  </div>
  <!-- END containerIN -->
</div>
<!-- END containerOut -->
</body>
</html>
