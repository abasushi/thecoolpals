<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styles.css">
    <title>SoftEng</title>
</head>

<body>

<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Station</th>
  </tr>
  <?php
  $i=1;
  $separator=":";
  foreach($data as $row)
  {
  echo "<tr>";

  echo "<td><a href='stations/station?id=".$row->stationId."'>$row->stationName</a></td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>
</body>

</html>