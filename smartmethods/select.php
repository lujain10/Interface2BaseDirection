<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>الربط مع نظام ROS</title>
    <link rel="stylesheet" type="text/css" href="css/select.css">
</head>
<body>   
    <div class="cotainer-fluid">
        <nav class="navbar navbar-inverse">
            <ul class="navbar navbar-nav navbar-right">
              <img height="100px" src="images/logo.png">
            </ul>
            <ul class="navbar navbar-nav">
                <li>
                    <a href="index.html">Back</a>
                </li>
            </ul>
        </nav>
    </div>
    <div>
        <table>
            <th>المحرك1</th>
            <th>المحرك2</th>
            <th>المحرك3</th>
            <th>المحرك4</th>
            <th>المحرك5</th>
            <th>المحرك6</th>
            <?php
                require_once "config.php";

                $sql = "SELECT * FROM motors";
                if($stmt = mysqli_prepare($link, $sql)){
                    $stmt->execute();
                    $result = mysqli_stmt_get_result($stmt);
                    $row = mysqli_fetch_assoc($result);
                    echo "<tr><td>" . $row['motor1'] . "</td><td>" . $row['motor2'] . "</td><td>" .$row['motor3'] . "</td><td>" . $row['motor4'] . "</td><td>" . $row['motor5'] . "</td><td>" . $row['motor6'] . "</td></tr></table>"; 
                }
                $sql2 ="SELECT * FROM button ";
                if($stmt = mysqli_prepare($link, $sql2)){
                    $stmt->execute();
                    $result2 = mysqli_stmt_get_result($stmt);
                    $row2 = mysqli_fetch_assoc($result2);
                    echo "<p>مفتاح التشغيل : ".$row2['button']."</p";
                } 
            ?>
    </div>
    <script src="js/javaS.js"></script>
</body>
</html>