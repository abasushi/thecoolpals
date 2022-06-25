<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styles.css">
  <title>Name of Station Dapat but idk how to do</title>
</head>

<body>
  <?php
  $i = 1;
  foreach ($data as $row) {
  ?>
    <form method="post">
      <!--palagay nito sa another php file tas pag kasubmit redirect ulet dito-->
      <br>
      <br>
      <br>
      <div class="box">
        <p>You are at <?php echo $row->stationName; ?></p>
        Next Northbound train will be arriving in
        <div class="countdown">00 : 00 : 00</div>
        <br>
      </div>
      <script>
        let launchDate = new Date("June 15, 2022 12:05:00").getTime();
        let timer = setInterval(tick, 1000);

        function tick() {
          let now = new Date();
          nowHours = now.getHours() * 3600;
          nowMinutes = now.getMinutes() * 60;
          let nowSeconds = now.getSeconds() + nowHours + nowMinutes;
          let setHours = <?php echo $row->stationHours; ?> * 3600
          let setMinutes = <?php echo $row->stationMinutes; ?> * 60
          let setSeconds = <?php echo $row->stationSeconds; ?> + setMinutes + setHours
          document.getElementById("currentTime").innerText = nowSeconds;
          document.getElementById("setTime").innerText = setSeconds;

          if (setSeconds < nowSeconds) {
            do {
              setSeconds = setSeconds + 300;
            }
            while (setSeconds < nowSeconds)
          }

          let t = setSeconds - nowSeconds
          document.getElementById("newTime").innerText = t;
          if (t > 0) {
            let hours = Math.floor(t / (60 * 60));
            let mins = Math.floor((t % (60 * 60)) / (60));
            let secs = Math.floor((t % (60)));
            let time = `${hours} : ${mins} : ${secs}`;
            document.querySelector('.countdown').innerText = time;
          }
        }
      </script>
      <label>Current time: <p id="currentTime"></p></label>
      <label>Set time: <p id="setTime"></p></label>
      <label>Set time - Current time: <p id="newTime"></p></label>
      <script src="<?php echo base_url(); ?>/js/main.js"></script>

      <a href="<?php echo base_url(''); ?>"> Go Back </a>

    <?php
  }
    ?>

</body>

</html>