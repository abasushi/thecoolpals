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
    You are at baclaran.

    <p>Next Northbound train will be arriving in --time--</p>

</body>

</html>