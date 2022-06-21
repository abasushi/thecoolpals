<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styles.css">
    <title>Baclaran</title>
</head>

<body>
    <div class="dropdown">
        <button class="dropbtn">Stations</button>
        <div class="dropdown-content">
            <a href="<?php echo base_url() . "stations/baclaran" ?>">Baclaran</a>
            <a href="<?php echo base_url() . "stations/edsa" ?>">EDSA</a>
            <a href="<?php echo base_url() . "stations/libertad" ?>">Libertad</a>
        </div>
    </div>
    <br>
  
    <?php
  $i=1;
  foreach($data as $row)
  {
  ?>
	<form method="post">
  <!--palagay nito sa another php file tas pag kasubmit redirect ulet dito-->
  <br>
    <br>
    <br>
     <div class="box">
     You are at <?php echo $row->stationName;?>
    <p>Next Northbound train will be arriving in --time--</p>
    <label>Next trailn will arrive at 
     <div class="countdown">00 : 00 : 00</div>
     <br>
     </label>
     <label>Current time: <p id="currentTime"></p></label>
     <label>Set time: <p id="setTime"></p></label>
     <label>Set time - Current time: <p id="newTime"></p></label>
     </div>
    

     <script>
 // Setup End Date for Countdown (getTime == Time in Milleseconds)
let launchDate = new Date("June 15, 2022 12:05:00").getTime();

// Setup Timer to tick every 1 second
let timer = setInterval(tick, 1000);

function tick () {
  // Get current time
  let now = new Date();
  // get current hours in seconds
  nowHours=now.getHours()*3600;
//get current minutes in seconds
  nowMinutes=now.getMinutes()*60;
  //get total seconds
  let nowSeconds=now.getSeconds()+nowHours+nowMinutes;
  //get set hours in seconds
  let setHours=<?php echo $row->stationHours; ?>*3600
  //get set minutes in secods
  let setMinutes=<?php echo $row->stationMinutes; ?>*60
  //get total set seconds
  let setSeconds=<?php echo $row->stationSeconds; ?> + setMinutes + setHours
  //display of total current seconds
document.getElementById("currentTime").innerText=nowSeconds;
//display of total set seconds
document.getElementById("setTime").innerText=setSeconds;
//if set seconds is already finished auto add mins up until its still not finished
if(setSeconds<nowSeconds){
do{
  setSeconds=setSeconds+300;//add 5 mins; mins*60
}while(setSeconds<nowSeconds)
}

let t=setSeconds-nowSeconds
document.getElementById("newTime").innerText=t;
  // Check if time is above 0
  if (t > 0) {
    // Setup hours, seconds and minutes
    // Algorithm to calculate hours
    let hours = Math.floor(t /( 60 * 60));
  
    // Algorithm to calculate minutes
    let mins = Math.floor((t % ( 60 * 60)) / ( 60));
  

    // Algorithm to calc seconds
    let secs = Math.floor((t % (60) ));

    // Create Time String
    let time = `${hours} : ${mins} : ${secs}`;

    // Set time on document
    document.querySelector('.countdown').innerText = time;
  }
}
</script>

	<?php } ?>

</body>

</html>