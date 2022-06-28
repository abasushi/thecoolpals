<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/adminstyle.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container-fluid">
                <h3>LRT Stations Admin Dashboard</h3>
            </div>
        </nav>
    </header>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-responsive table-hover table-bordered">

                <thead>
                    <tr>
                        <th>Station Number</th>
                        <th>Station Name</th>
                        <th>Time left till next North Bound train</th>
                        <th>Time left till next South Bound train</th>
                        <th>Change/Update</th>
                    </tr>
                </thead>

                <tbody width="600" border="1" cellspacing="5" cellpadding="5">
                    <?php
                    $i = 1;
                    $separator = ":";
                    foreach ($data as $row) {
                        echo "<td>" . $i . "</td>";
                        echo "<td>" . $row->stationName . "</td>";
                        echo "<td>" . $row->stationHours . $separator . $row->stationMinutes . $separator . $row->stationSeconds . "</td>";
                        echo "<td>" . $row->stationHours2 . $separator . $row->stationMinutes2 . $separator . $row->stationSeconds2 . "</td>";
                        echo "<td><a href='updatedata?id=" . $row->stationId . "'>Update</a></td>";
                        echo "</tr>";
                        $i++;
                    }
                    ?>

                </tbody>
            </table>

        </div>
    </div>

</body>