<?php
require_once('connect.php');
if (isset($_POST['btnAdd'])) {

    $name = $_POST['tenct'];
    $year = $_POST['namsinh'];
    $quequan = $_POST['quequan'];
    $clb = $_POST['clb'];

    if ($name == "") {
        echo "<script type='text/javascript'>alert('Hãy nhập tên cầu thủ')</script>";
    } else
    if ($year == "") {
        echo "<script type='text/javascript'>alert('Hãy nhập năm sinh')</script>";
    } else
    if ($quequan == "") {
        echo "<script type='text/javascript'>alert('Hãy nhập quê quán')</script>";
    }
    if ($clb == "") {
        echo "<script type='text/javascript'>alert('Hãy nhập câu lạc bộ')</script>";
    } else {
        $sql = "INSERT INTO `cauthu` (`tenct`,`namsinh`,`quequan`,`clb`) VALUES ('$name', '$year', '$quequan', '$clb')";
        $query = mysqli_query($conn, $sql);
        if (isset($query)) {
            
            header("Location: ./index.php");
        } else {
            echo "<script type='text/javascript'>alert('Thêm cầu thủ thất bại')</script>";
        }
    }
}
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
<form method="post">
    <label for="tenct">Ten cau thu</label>
    <input type="text" name="tenct" id="tenct">
    <label for="namsinh">Nam sinh</label>
    <input type="text" name="namsinh" id="namsinh">
    <label for="quequan">que quan</label>
    <input type="text" name="quequan" id="quequan">
    <label for="clb">CLB</label>
    <input type="text" name="clb" id="clb">
    <input type="submit" value="them" name="btnAdd">
</form>
</body>
</html>
