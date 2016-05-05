<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>AS5247 Rotary Position Sensor - Magnetic Position Sensors | PMT</title>
  <meta name="description" content="The AS5247 is a high-resolution redundant rotary position sensor for fast absolute angle measurement over a full 360-degree range.">
  
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
        <h1 class="primary-heading">AS5247 Rotary Position Sensor</h1>
        <h2 class="secondary-heading">Redundant 14-bit on-axis magnetic rotary position sensor with 11-bit binary incremental pulse count</h2>

        <p class="intro">
        The AS5247 is a high-resolution redundant rotary position sensor for fast absolute angle measurement over a full 360-degree range. This new position sensor is equipped with a revolutionary integrated dynamic angle error compensation (DAEC&#0153;) with almost 0 latency. The robust design of the device suppresses the influence of any homogenous external stray magnetic field. A standard 4-wire SPI serial interface allows a host microcontroller to read 14-bit absolute angle position data from the AS5247 and to program non-volatile settings without a dedicated programmer. Incremental movements are indicated on a set of ABI signals with a maximum resolution of 2048 steps / 512 pulses per revolution. The resolution of the ABI signal is programmable to 1024 steps / 256 pulses per revolution. Brushless DC (BLDC) motors are controlled through a standard UVW commutation interface with a programmable number of pole pairs from 1 to 7. The absolute angle position is also provided as PWM-encoded output signal. The AS5247 supports embedded self-diagnostics including magnetic field strength too high, magnetic field strength too low or lost magnet, and other related diagnostic features. The AS5247 is available as a dual die in a compact MLF-40 7x7 package.
          <img src="../../images/magnetic-position-sensors/AS5245-automotive-magnetic-angle-position-sensor-Block-Diagram_f380greyscale.jpg" alt="AS5247 magnetic rotary position sensor block diagram"/>
        </p>
        <a href="../../downloads/magnetic-position-sensors/AS5247_Datasheet_EN_v3.pdf"><button>Download Datasheet</button></a>
        <dl class="product-features">
          <dt>Key Features</dt>
          <dd>DAEC&#1053; Dynamic angle error compensation</dd>
          <dd>14-bit core resolution</dd>
          <dd>Independent output interfaces: SPI, ABI, UVW, PWM</dd>
          <dd>Zero position, configuration programmable</dd>
          <dd>Self-Diagnostics and Redundancy</dd>
          <dd>Immune to external stray field</dd>

          <dt>Key Benefits</dt>
          <dd>Easy to use – saving costs on DSP</dd>
          <dd>Good resolution for motor & position control</dd>
          <dd>Versatile choice of the interface</dd>
          <dd>No programmer needed (via SPI command)</dd>
          <dd>Supports safety challenging applications</dd>
          <dd>Lower system costs (no shielding)</dd>
        </dl>

        <table class="product-facts">
          <tr>
            <th colspan="2"><h2 class="sub">AS5247 Product Facts</h2></th>
          </tr>
          <tr>
            <td>Resolution</td>
            <td>14-bit / 11-bit</td>
          </tr>
          <tr>
            <td>Interfaces</td>
            <td>SPI</td>
          </tr>
          <tr>
            <td>Output</td>
            <td>ABI, UVW, PWM</td>
          </tr>
          <tr>
            <td>Max speed [rpm]</td>
            <td>14500</td>
          </tr>
          <tr>
            <td>Overvoltage protection [ ]</td>
            <td></td>
          </tr>
          <tr>
            <td>Redundant</td>
            <td>Yes</td>
          </tr>
          <tr>
            <td>Supply voltage [V]</td>
            <td>3.3 or 5.0</td>
          </tr>
          <tr>
            <td>Temperature range [&deg;C]</td>
            <td>-40 to +150</td>
          </tr>
          <tr>
            <td>Package</td>
            <td>MLF-40 7x7</td>
          </tr>
          <tr>
            <td>Automotive qualified</td>
            <td>Yes</td>
          </tr>
        </table>
        <h2 class="sub">Applications</h2>
        <p>The AS5247 was designed to support BLDC motor commutation for the most challenging and safety-critical automotive applications (AEC-Q100 grade 0 automotive qualified) such as:
        <ul class="sub">
          <li>Electric power steering (EPS)</li>
          <li>Transmission (gearbox, actuator)</li>
          <li>Brake (actuator)</li>
          <li>Alternator & Starter</li>
        </ul>


      </article>

      <aside role="complimentary" class="sidebar">
        <ul class="vertical-nav">
          <?php include("../../includes/subnav-magnetic-position-sensors.php"); ?>    
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
