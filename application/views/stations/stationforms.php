<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Sr No</th>
    <th>First_name</th>
    <th>Last_name</th>
    <th>Email Id</th>
   <th>Update</th>
  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->stationName."</td>";
  echo "<td>".$row->stationArrive."</td>";
  echo "<td><a href='updatedata?id=".$row->stationId."'>Update</a></td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>

<!--palagay nito sa another php file tas pag kasubmit redirect ulet dito-->
    <br>
    <br>
    <br>
     <div class="box">
    <label>Next trail will arrive at 
     <div class="countdown">00: 00 : 00 : 00</div><br>
     </label>
     <input type="text" id="currentTime">
     </div>
    

     <script>
 // Setup End Date for Countdown (getTime == Time in Milleseconds)
let launchDate = new Date("June 15, 2022 12:05:00").getTime();

// Setup Timer to tick every 1 second
let timer = setInterval(tick, 1000);

function tick () {
  // Get current time
  let now = new Date().getTime();
  // Get the difference in time to get time left until reaches 0
  let t = launchDate - now;

  // Check if time is above 0
  if (t > 0) {
    // Setup Days, hours, seconds and minutes
    // Algorithm to calculate days...
    let days = Math.floor(t / (1000 * 60 * 60 * 24));
    // prefix any number below 10 with a "0" E.g. 1 = 01
    if (days < 10) { days = "0" + days; }
    
    // Algorithm to calculate hours
    let hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    if (hours < 10) { hours = "0" + hours; }

    // Algorithm to calculate minutes
    let mins = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
    if (mins < 10) { mins = "0" + mins; }

    // Algorithm to calc seconds
    let secs = Math.floor((t % (1000 * 60)) / 1000);
    if (secs < 10) { secs = "0" + secs; }

    // Create Time String
    let time = `${days} : ${hours} : ${mins} : ${secs}`;

    // Set time on document
    document.querySelector('.countdown').innerText = time;
  }
}
</script>

<script>
var today = $_GET['StationTime'];

  document.getElementById("currentTime").value = today;
</script>
</body>

</html>