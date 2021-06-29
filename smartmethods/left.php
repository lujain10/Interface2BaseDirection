<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Left</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
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
    <div style="margin: 10%">
        <?php
            require_once "config.php";
            
            $sql = "SELECT `LEFT` FROM `directions`";
            if($stmt = mysqli_prepare($link, $sql)){
                $stmt->execute();
                $result = mysqli_stmt_get_result($stmt);
                $row = mysqli_fetch_assoc($result);
                echo "الاتجاه الحالي للروبوت : ". $row['LEFT'];
            } 
        ?>
    </div>
    <script src="js/javaS.js"></script>
</body>
</html>