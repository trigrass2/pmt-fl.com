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
        <h1 class="primary-heading">AS3709 Power Management Unit</h1>
        <h2 class="secondary-heading">5 buck DCDCs, 2 LDOs, programmable startup</h2>

        <p class="intro">
        The AS3709 features 5 high-efficiency, constant-frequency synchronous buck converters and two universal LDOs. The input voltage range (2.7V to 5.5V), automatic power-save mode and minimal external component requirements make the AS3709 perfect for any single Li-Ion battery-powered or fixed 3.3V/5V supply application.
        <img src="../../images/power-management-ics/AS3709_PowerManagementUnit_block-diagram_f380greyscale.jpg" alt="Block diagram of the AS3709 Power Management Unit"/>
        </p>
        <a href="../../downloads/power-management-ics/AS3709_Datasheet_1v02.pdf"><button>Download Datasheet</button></a>
        <dl class="product-features">
          <dt>Key Features</dt>
          <dd>5 DCDC step down regulators (2-4MHz)</dd>
          <dd>2 universal IO LDOs</dd>
          <dd>OTP programmable Boot and Power-down sequence</dd>
          <dd>Stand-by function with programmable sequence and voltages</dd>
          <dd>Control Interface, I2C/SPI control lines, ON key with 4/8s emergency shut-down, POR with RESET I/O</dd>

          <dt>Key Benefits</dt>
          <dd>Compact design due to small coils for IO and memory voltage generation</dd>
          <dd>Independent voltage rails for general purpose IO supplies</dd>
          <dd>Flexible and fast adaptation to different processors/applications</dd>
          <dd>Power saving control according to the processor's needs</dd>
          <dd>Self-contained start-up and control for single-cell battery applications; safety shutdown feature</dd>
        </dl>

        <table class="product-facts">
          <tr>
            <th colspan="2">Product Facts</th>
          </tr>
          <tr>
            <td>DC-DC step up converters [ ]</td>
            <td></td>
          </tr>
          <tr>
            <td>DC-DC step down converters</td>
            <td>5x1A or 3x1A+1x2A or 2x1A+1x3A or 1x1A+2x2A or 1x2A+1x3A</td>
          </tr>
          <tr>
            <td>Special LDOs [mA]</td>
            <td></td>
          </tr>
          <tr>
            <td>Universal LDOs [mA]</td>
            <td>2x300</td>
          </tr>
          <tr>
            <td>Current sinks [mA]</td>
            <td></td>
          </tr>
          <tr>
            <td>Charge pump [V/mA]</td>
            <td></td>
          </tr>
          <tr>
            <td>Audio DAC</td>
            <td></td>
          </tr>
          <tr>
            <td>Audio features</td>
            <td></td>
          </tr>
          <tr>
            <td>General purpose ADC</td>
            <td></td>
          </tr>
          <tr>
            <td>Charger</td>
            <td></td>
          </tr>
          <tr>
            <td>Customizable startup sequences</td>
            <td>programmable</td>
          </tr>
          <tr>
            <td>Package</td>
            <td>QFN-32 (4x4)</td>
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
