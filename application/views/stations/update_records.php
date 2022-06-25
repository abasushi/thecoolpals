<!DOCTYPE html>
<html>
<head>
<title>Update Data</title>
</head>
 
<body>
 <?php
  $i=1;
  foreach($data as $row) 
  {
  ?>
	<form method="post">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">Enter new station arrival Hour </td>
    <td width="329"><input type="number" name="stationHours" min="0"max="23" value="<?php echo $row->stationHours; ?>"/></td>
  </tr>
  <tr>
    <td width="230">Enter new station arrival minute </td>
    <td width="329"><input type="number" name="stationMinutes" min="0"max="59"value="<?php echo $row->stationMinutes; ?>"/></td>
  </tr>
  <tr>
    <td width="230">Enter new station arrival seconds </td>
    <td width="329"><input type="number" name="stationSeconds" min="0"max="59" value="<?php echo $row->stationSeconds; ?>"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="update" value="Update_Records"/></td>
  

  </tr>
</table>
	</form>
  <!--palagay nito sa another php file tas pag kasubmit redirect ulet dito-->
  <br>
    <br>
    <br>
     <div class="box">
    <label>Next train will arrive at 
     <div class="countdown">00 : 00 : 00</div>
     <br>
     </label>
     <p id="currentTime"></p>
     <br>
     <p>Set Time:</p>
     <p id="setTime"></p>
     <p id="newTime"></p>
     
     </div>
    

     <script>
 // Setup End Date for Countdown (getTime == Time in Milleseconds)
let launchDate = new Date("June 15, 2022 12:05:00").getTime();

// Setup Timer to tick every 1 second
let timer = setInterval(tick, 1000);
let idnum=<?php echo $row->stationId;?>

function tick () {
  // Get current time
  let now = new Date();
  // get current hours in seconds
  nowHours=now.getHours()*3600;
//get current minutes in seconds
  nowMinutes=now.getMinutes()*60;
  //get total seconds
  let nowSeconds=now.getSeconds()+nowHours+nowMinutes;
  //get
  let setHours=<?php echo $row->stationHours; ?>*3600
  let setMinutes=<?php echo $row->stationMinutes; ?>*60
  let setSeconds=<?php echo $row->stationSeconds; ?> + setMinutes + setHours
document.getElementById("currentTime").innerText=nowSeconds;
document.getElementById("setTime").innerText=setSeconds;
//if idnum==baclaran
if(idnum==1){
if(setSeconds<nowSeconds)
{
  do
  {
  setSeconds=setSeconds+300;//add 5 mins; mins*60
    }while(setSeconds<nowSeconds)
  }
}
//if idnum==EDSA
if(idnum==2){
if(setSeconds<nowSeconds)
{
  do
  {
  setSeconds=setSeconds+180;//add 5 mins; mins*60
    }while(setSeconds<nowSeconds)
  }
}
//if idnum==Libertad
if(idnum==3){
if(setSeconds<nowSeconds)
{
  do
  {
  setSeconds=setSeconds+180;//add 5 mins; mins*60
    }while(setSeconds<nowSeconds)
  }
}

let t=setSeconds-nowSeconds
document.getElementById("newTime").innerText=t;
  // Check if time is above 0
  if (t > 0) {
    // Setup Days, hours, seconds and minutes
    // Algorithm to calculate days..
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

<script>
var today = $_GET['StationTime'];

  document.getElementById("currentTime").value = today;
</script>
	<?php } ?>
</body>
</html>