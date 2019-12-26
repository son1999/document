<?php
require "connect.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Mã cầu thủ</th>
        <th>Tên cầu thủ</th>
        <th>Năm sinh</th>
        <th>Quê quán</th>
        <th>CLB</th>
    </tr>
    <?php
    $sql = "SELECT * FROM cauthu";
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)):
    ?>
    <tr>
        <td><?php echo $row['mact']; ?></td>
        <td><?php echo $row['tenct']; ?></td>
        <td><?php echo $row['namsinh']; ?></td>
        <td><?php echo $row['quequan']; ?></td>
        <td><?php echo $row['clb']; ?></td>
    </tr>
    <?php endwhile; ?>
</table>
</body>
</html>
