<!DOCTYPE html>
<html>

<head>
  <title>Update Data</title>
</head>

<body>
  <?php
  $i = 1;
  foreach ($data as $row) {
  ?>
    <form method="post">
      <table width="600" border="1" cellspacing="5" cellpadding="5">
        <tr>
          <td width="230">Enter new station arrival Hour </td>
          <td width="329"><input type="number" name="stationHours" min="0" max="23" value="<?php echo $row->stationHours; ?>" /></td>
        </tr>
        <tr>
          <td width="230">Enter new station arrival minute </td>
          <td width="329"><input type="number" name="stationMinutes" min="0" max="59" value="<?php echo $row->stationMinutes; ?>" /></td>
        </tr>
        <tr?>
          <td width="230">Enter new station arrival seconds </td>
          <td width="329"><input type="number" name="stationSeconds" min="0" max="59" value="<?php echo $row->stationSeconds; ?>" /></td>
          </tr>
          <tr>
            <td width="230">Enter new station arrival Hour2 </td>
            <td width="329"><input type="number" name="stationHours2" min="0" max="23" value="<?php echo $row->stationHours2; ?>" /></td>
          </tr>
          <tr>
            <td width="230">Enter new station arrival minute2 </td>
            <td width="329"><input type="number" name="stationMinutes2" min="0" max="59" value="<?php echo $row->stationMinutes2; ?>" /></td>
          </tr>
          <tr>
            <td width="230">Enter new station arrival seconds2 </td>
            <td width="329"><input type="number" name="stationSeconds2" min="0" max="59" value="<?php echo $row->stationSeconds2; ?>" /></td>
          </tr>
          <td colspan="2" align="center">
            <input type="submit" name="update" value="Update_Records" />
          </td>
          </tr>
      </table>
    </form>
    <!--palagay nito sa another php file tas pag kasubmit redirect ulet dito-->
    <br>
    <br>
    <br>
    <div class="box">
      <label>Northbound
        <div class="countdown">00 : 00 : 00</div>
        <br>
      </label>Southbound
      <div class="countdown2">00 : 00 : 00</div>

    </div>


    <script>
      let timer = setInterval(tick, 1000);

      let timer2 = setInterval(tick, 1000);

      function tick() {
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
        if (setSeconds2 < nowSeconds) {
          do {
            setSeconds2 = setSeconds2 + 300;
          }
          while (setSeconds2 < nowSeconds)
        }
        let t = setSeconds - nowSeconds
        let t2 = setSeconds2 - nowSeconds
        if (t > 0) {
          let hours = Math.floor(t / (60 * 60));
          let mins = Math.floor((t % (60 * 60)) / (60));
          let secs = Math.floor((t % (60)));
          let time = `${hours} : ${mins} : ${secs}`;
          document.querySelector('.countdown').innerText = time;
        }
        if (t2 > 0) {
          let hours2 = Math.floor(t2 / (60 * 60));
          let mins2 = Math.floor((t2 % (60 * 60)) / (60));
          let secs2 = Math.floor((t2 % (60)));
          let time2 = `${hours2} : ${mins2} : ${secs2}`;
          document.querySelector('.countdown2').innerText = time2;
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