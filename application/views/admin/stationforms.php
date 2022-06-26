<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>

<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Sr No</th>
    <th>Station name</th>
    <th>Set Time</th>
   <th>Update</th>
  </tr>
  <?php
  $i=1;
  $separator=":";
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->stationName."</td>";
  echo "<td>".$row->stationHours.$separator.$row->stationMinutes.$separator.$row->stationSeconds."</td>";
  echo "<td><a href='updatedata?id=".$row->stationId."'>Update</a></td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>

</body>

</html>