<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    ikaw ay nasa


    <select name="steyshon" id="steyshon">
        <option value="Baclaran">Baclaran</option>
        <option value="EDSA">EDSA</option>
        <option value="Libertad">Libertad</option>
    </select>

    <label for="cars">Station</label>

    <br>
    <br>

    <canvas id="myCanvas" width="400" height="100" style="border:1px solid #d3d3d3;">
        Your browser does not support the canvas element.
    </canvas>

    <script>
        var canvas = document.getElementById("myCanvas");
        var ctx = canvas.getContext("2d");
        ctx.font = "20px Arial";
        ctx.fillText("Next train will arrive at --Data--", 10, 50);
    </script>

</body>

</html>