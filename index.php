<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StayHere.com. | Book the Best Hotels with StayHere.com.</title>

    <?php
    session_start();
    require_once "./data/DatabaseConnector.php";
    $conn = new DatabaseConnector();
    $conn = $conn->getConnection();
    ?>

</head>

<body>

    <!-- App Home page -->
    <?php header("location: pages/hotel.php") ?>

</body>

</html>