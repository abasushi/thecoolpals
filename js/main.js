<script>
    let launchDate = new Date("June 15, 2022 12:05:00").getTime();
    let timer = setInterval(tick, 1000);

    function tick()
    {
        let now = new Date();
    nowHours = now.getHours() * 3600;
    nowMinutes = now.getMinutes() * 60;
    let nowSeconds = now.getSeconds() + nowHours + nowMinutes;
    let setHours = <?php echo $row->stationHours; ?> * 3600
    let setMinutes = <?php echo $row->stationMinutes; ?> * 60
    let setSeconds = <?php echo $row->stationSeconds; ?> + setMinutes + setHours
    document.getElementById("currentTime").innerText = nowSeconds;
    document.getElementById("setTime").innerText = setSeconds;

    if (setSeconds < nowSeconds)
    {
    do
    {
        setSeconds = setSeconds + 300;
    }
    while (setSeconds < nowSeconds)
    }

    let t = setSeconds - nowSeconds
    document.getElementById("newTime").innerText = t;
          if (t > 0)
    {
    let hours = Math.floor(t / (60 * 60));
    let mins = Math.floor((t % (60 * 60)) / (60));
    let secs = Math.floor((t % (60)));
    let time = `${hours} : ${mins} : ${secs}`;
    document.querySelector('.countdown').innerText = time;
    }
    }
</script>