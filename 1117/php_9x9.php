<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table align="center" border="1" style="border-collapse: collapse;">
    <?php
for ($x = 1; $x <= 9; $x++) {
    //9 row
    echo "<tr>";
    for ($y = 1; $y <= 9; $y++) {
        //9 td
        echo "<td> $x * $y =" . $x * $y . "</td>";
    }
    echo "</td>";
}

?>

  </table>

</body>

</html>
