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
      <div class="box">
        <p>You are at <?php echo $row->stationName; ?></p>
        Next Northbound train will be arriving in
        <div class="countdown">00 : 00 : 00</div>
        <br>
        Next Southbound train will be arriving in
        <div class="countdown2">00 : 00 : 00</div>
      </div>
      <script>
        let timer = setInterval(tick, 1000);

        let timer2 = setInterval(tick, 1000);

        function tick() 
        {
          let now = new Date();
          nowHours = now.getHours() * 3600;
          nowMinutes = now.getMinutes() * 60;
          let nowSeconds = now.getSeconds() + nowHours + nowMinutes;
          
          let setHours = <?php echo $row->stationHours; ?> * 3600
          let setMinutes = <?php echo $row->stationMinutes; ?> * 60
          let setSeconds = <?php echo $row->stationSeconds; ?> + setMinutes + setHours

          let setHours2 = <?php echo $row->stationHours2; ?> * 3600
          let setMinutes2 = <?php echo $row->stationMinutes2; ?> * 60
          let setSeconds2 = <?php echo $row->stationSeconds2; ?> + setMinutes2 + setHours2

          if (setSeconds < nowSeconds) {
            do {
              setSeconds = setSeconds + 300;
            }
            while (setSeconds < nowSeconds)
          }

          if (setSeconds2 < nowSeconds2) {
            do {
              setSeconds2 = setSeconds2 + 300;
            }
            while (setSeconds2 < nowSeconds2)
          }

          let t = setSeconds - nowSeconds
          if (t > 0) {
            let hours = Math.floor(t / (60 * 60));
            let mins = Math.floor((t % (60 * 60)) / (60));
            let secs = Math.floor((t % (60)));
            let time = `${hours} : ${mins} : ${secs}`;
            document.querySelector('.countdown').innerText = time;
          }

          let t2 = setSeconds2 - nowSeconds2
          if (t2 > 0) {
            let hours2 = Math.floor(t2 / (60 * 60));
            let mins2 = Math.floor((t2 % (60 * 60)) / (60));
            let secs2 = Math.floor((t2 % (60)));
            let time2 = `${hours2} : ${mins2} : ${secs2}`;
            document.querySelector('.countdown2').innerText = time2;
          }
        }
      </script>

      <a href="<?php echo base_url(''); ?>"> Go Back </a>

    <?php
  }
    ?>

</body>

</html>