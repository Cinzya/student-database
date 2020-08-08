<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
</head>
<body>
    <?php 
        include("student-data.php");
        $data = mysqli_fetch_object($result)
    ?>

    <h1><?= $data->vorname ?></h1>
</body>
</html>