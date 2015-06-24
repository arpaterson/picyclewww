<html>
 <head>
  <link rel="stylesheet" type="text/css" href="css/main.css">
 <?php 
  if (isset($_POST['StartALL']))
  {
  exec('sudo python /home/pi/python/gps/gps_demo.py');
  exec('sudo python /home/pi/python/ultrasonic/maxbotix/I2CXL/range_demo.py');
  exec('sudo python /home/pi/python/camera/vio/viostream/VioStreamDemo.py');
  }
  if (isset($_POST['StartGPS']))
  {
  exec('sudo python /home/pi/python/gps/gps_demo.py &');
  }
  if (isset($_POST['StartRange']))
  {
   $command = 'sudo python /home/pi/python/ultrasonic/maxbotix/I2CXL/range_demo.py >> range.txt 2>&1 &';
   exec($command);
   echo 'hello';
  }
  if (isset($_POST['StartRadar']))
  {
  exec('sudo python /home/pi/python/radar/stalker/speedsensor/radar_demo.py &');
  }
  if (isset($_POST['StartCamera']))
  {
  exec('sudo python /home/pi/python/camera/vio/viostream/VioStreamDemo.py &');
  }
  if (isset($_POST['StopALL']))
  {
  exec('sudo');
  }
  if (isset($_POST['KillALL']))
  {
  exec('sudo killall python');
  }
  if (isset($_POST['DeleteALL']))
  {
  exec('sudo rm *.csv');
  }
  if (isset($_POST['HALT']))
  {
  exec('sudo halt');
  }
  ?>

 <title>Opus Research 5-27804.00 </title>

 </head>
 <body>
  <h1>NZTA</h1>
  <h2>Instrumented Bicycle Control</h2>
  <h3>5-27804.00</h3>
  <form method="post">
   <table>
    <tbody>
     <tr>
      <td>
       <button class="safebutton" name="StartALL">Start ALL Logging</button>
      </td>
     </tr>
     <tr>
      <td>
       <button class="safebutton" name="StartGPS">Start GPS Logging</button>
      </td>
     </tr>
     <tr>
      <td>
       <button class="safebutton" name="StartRange">Start Range Logging</button>
      </td>
     </tr>
     <tr>
      <td>
       <button class="safebutton" name="StartRadar">Start Radar Logging</button>
      </td>
     </tr>
     <tr>
      <td>
       <button class="safebutton"  name="StartCamera">Start Video Logging</button>
      </td>
     </tr>
     <tr>
      <td>
       <button class="unsafebutton" name="StopALL">Stop ALL Logging</button>
      </td>
     </tr>
     <tr>
      <td>
       <button class="unsafebutton" name="KillALL">KILL ALL PYTHON PROCESSES</button>
      </td>
     </tr>
     <tr>
      <td>
       <button class="unsafebutton" name="DeleteALL">DELETE ALL LOG FILES</button>
      </td>
     <tr>
      <td style="text-align: center;">
       <button class="unsafebutton" name="HALT">Shutdown System</button>
      </td>
     </tr>
    </tbody>
   </table>
  </form>
 </body>
</html>
