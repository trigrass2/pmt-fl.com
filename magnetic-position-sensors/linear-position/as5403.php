<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>AS5403 Linear Position Sensor - Magnetic Position Sensors - PMT</title>
  <meta name="description" content="The AS5403 can measure magnetic fields components in all three dimensions and converts the magnetic field information into absolute position information.">
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
        <h1 class="primary-heading">AS5403 Linear Position Sensor</h1>
        <h2 class="secondary-heading">Hall Position Sensor for Linear and Off-Axis Applications</h2>

        <p class="intro">
        The AS5403 is a Hall sensor which detect linear or rotary off-axis movement of a 2-pole magnet.<br /><br />
        Using two Hall cells allows absolute (single pixel) as well as differential (double pixel) magnetic field measurement. The differential measurement makes the AS5403 ideal for use in rough automotive position sensing applications that include not only dust, dirt or moisture but also unwanted magnetic stray fields.<br /><br />
        The IC has signal conditioning features, including compensation of temperature effects as well as linearization. The build in diagnostic functions makes the AS5403 suitable for safety critical applications.
          <img src="../../images/magnetic-position-sensors/AS5403-block-diagram_f380greyscale.jpg" alt="Block diagram of the AS5403 Hall Linear Position Sensor"/>
        </p>
        <a href="../../downloads/magnetic-position-sensors/AS5403_Datasheet_EN_v1.pdf"><button>Download Datasheet</button></a>
        <dl class="product-features">
          <dt>Key Features</dt>
          <dd>High magnetic input range</dd>
          <dd>Dual pixel principle</dd>
          <dd>Offset and sensitivity accuracy over temperature</dd>
          <dd>Integrated diagnostic functions</dd>
          <dd>Raw data assessment possible</dd>
          <dd>33 linearization points</dd>

          <dt>Key Benefits</dt>
          <dd>Highest flexibility in magnet selection and mechanical arrangement</dd>
          <dd>Suppression against magnetic stray fields</dd>
          <dd>Flexibility in choice of interface</dd>
          <dd>High linearity after teaching</dd>
          <dd>External calculations of raw data</dd>
          <dd>Best in class performance parameters</dd>
        </dl>
        
        <table class="product-facts">
          <tr>
            <td><b>IC</b></td>
            <td><b>application</b></td>
            <td><b>Magnetic range</b></td>
          </tr>
          <tr>
            <td>AS5403A</td>
            <td>Linear position sensing</td>
            <td>&plusmn; 50mT</td>
          </tr>
          <tr>
            <td>AS5403D</td>
            <td>Linear position sensing</td>
            <td>&plusmn; 100mT</td>
          </tr>
          <tr>
            <td>AS5403E</td>
            <td>Off-axis position sensing</td>
            <td>&plusmn; 100mT</td>
          </tr>
        </table>

        <table class="product-facts">
          <tr>
            <th colspan="2"><h2 class="sub">AS5403 Product Facts</h2></th>
          </tr>
          <tr>
            <td>Resolution</td>
            <td>16 bit</td>
          </tr>
          <tr>
            <td>Minimum pole pair length</td>
            <td></td>
          </tr>
          <tr>
            <td>Interfaces []</td>
            <td>SPI/ Single Wire UART</td>
          </tr>
          <tr>
            <td>Output []</td>
            <td>SPI/ Single Wire UART / PWM / analog</td>
          </tr>
          <tr>
            <td>Max speed [m/s]</td>
            <td></td>
          </tr>
          <tr>
            <td>Supply voltage [V]</td>
            <td>5.0</td>
          </tr>
          <tr>
            <td>Temperature range [&deg;C]</td>
            <td>-40 to +150</td>
          </tr>
          <tr>
            <td>Package</td>
            <td>TSSOP-14</td>
          </tr>
          <tr>
            <td>Automotive qualified</td>
            <td>AEC-Q100</td>
          </tr>
          <tr>
            <td>Remark</td>
            <td></td>
          </tr>
        </table>
        <h2 class="sub">Applications</h2>
        <ul class="sub">
          <li>Clutch/brake pedal</li>
          <li>Gearbox sensor</li>
          <li>Steering angle sensor</li>
          <li>Gearbox shift link</li>
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
