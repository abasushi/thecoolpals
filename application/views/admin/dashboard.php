<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/adminstyle.css'); ?>">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
    <!-- Header Start -->
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
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($reservation)) {
                    ?>
                        <?php
                        foreach ($reservation as $data) {
                        ?>
                            <tr>
                                <td><?php echo $data['stationId']; ?></td>
                                <td><?php echo $data['stationName']; ?></td>
                                <td><?php echo $data['reserveDate']; ?></td>
                                <td><?php echo $data['reserveUser']; ?></td>
                                <td><?php echo $data['reservePark']; ?></td>
                                <td><?php echo $data['reserveVehicle']; ?></td>
                                <td><?php echo $data['reserveLocation']; ?></td>
                                <td>
                                    <a class="btn btn-danger" href="<?php echo base_url('admin/resgetdetails/' . $data['reserveId'] . ''); ?>">Close</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    <?php
                    } else {
                    ?>
                        <tr>
                            <td colspan="10">Empty Record</td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <table class="table table-striped table-responsive table-hover table-bordered">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>User Status</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                </thead>
                <tbody>
                    <?php if (!empty($users)) { ?>
                        <?php foreach ($users as $data) { ?>
                            <tr>
                                <td><?php echo $data['user_id']; ?></td>
                                <td><?php echo $data['username']; ?></td>
                                <td><?php echo $data['user_status']; ?></td>
                                <td><?php echo $data['user_firstname']; ?></td>
                                <td><?php echo $data['user_lastname']; ?></td>
                                <td><?php echo $data['user_cpnumber']; ?></td>
                                <td><?php echo $data['user_email']; ?></td>
                                <td>
                                    <a class="btn btn-info" href="<?php echo base_url('admin/getdetails/' . $data['user_id'] . ''); ?>">Edit</a>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } else { ?>
                        <tr>
                            <td colspan="10">Empty Record</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>