<html>
 <head>
  <link rel="stylesheet" type="text/css" href="/../css/main.css">
 <?php 
  if (isset($_POST['StartALL']))
  {
  }
  if (isset($_POST['StartGPS']))
  {
   $command = 'sudo python /home/pi/python/gpsdemo/gps_demo.py > /dev/null 2>&1 &';
   exec($command, $output, $result);
   echo 'Started GPS';
  }
  if (isset($_POST['StartRange']))
  {
   $command = 'sudo python /home/pi/python/ultrasonic/maxbotix/I2CXL/range_demo.py > /dev/null 2>&1 &';
   exec($command, $output, $result);
   echo 'Started Rangefinder';
  }

  if (isset($_POST['StartRadar']))
  {
   $command = 'sudo python /home/pi/python/radar/stalker/speedsensor/radar_demo.py > /dev/null 2>&1 &';
   exec($command, $output, $result);
   echo 'Started Radar';
  }
  if (isset($_POST['StartCamera']))
  {
   $command = 'sudo python /home/pi/python/camera/vio/viostream/VioStreamTimelapse.py > /dev/null 2>&1 &';
   exec($command, $output, $result);
   echo 'Started Camera';
  }
  if (isset($_POST['StopALL']))
  {
  exec('sudo');
  echo 'Did nothing';
  }
  if (isset($_POST['KillALL']))
  {
  exec('sudo killall python');
  echo 'Killed all python process';
  }
  if (isset($_POST['DeleteALL']))
  {
  exec('sudo rm /var/www/logs/*.csv');
  echo 'Deleted all csv files';
  }
  if (isset($_POST['HALT']))
  {
  exec('sudo halt');
  echo 'System going down';
  }

  ?>

 <title>Opus Research 5-27804.00 </title>

 </head>
 <body>
  <h1>NZTA</h1>
  <h2>Instrumented Bicycle Control</h2>
  <h3>5-27804.00</h3>
   <table>
    <tbody>
     <tr>
      <td>
       <form method="get" action="../">
        <button type="submit">Home</button>
       </form>
      </td>
     </tr>
     <tr>
      <td>
  <form method="post">
       <button class="safebutton" name="StartGPS" formnovalidate>Start GPS Logging</button>
  </form>
      </td>
     </tr>
     <tr>
      <td>
  <form method="post">
       <button class="safebutton" name="StartRange">Start Range Logging</button>
  </form>
      </td>
     </tr>
     <tr>
      <td>
  <form method="post">
       <button class="safebutton" name="StartRadar">Start Radar Logging</button>
  </form>
      </td>
     </tr>
     <tr>
      <td>
  <form method="post">
       <button class="safebutton"  name="StartCamera">Start Video Logging</button>
  </form>
      </td>
     </tr>
     <tr>
      <td>
  <form method="post">
       <button class="unsafebutton" name="StopALL">Stop ALL Logging</button>
  </form>
      </td>
     </tr>
     <tr>
      <td>
  <form method="post">
       <button class="unsafebutton" name="KillALL">KILL ALL PYTHON PROCESSES</button>
  </form>
      </td>
     </tr>
     <tr>
      <td>
  <form method="post">
       <button class="unsafebutton" name="DeleteALL">DELETE ALL LOG FILES</button>
  </form>
      </td>
     <tr>
  <form method="post">
      <td style="text-align: center;">
       <button class="unsafebutton" name="HALT">Shutdown System</button>
  </form>
      </td>
     </tr>
    </tbody>
   </table>
 </body>
</html>
