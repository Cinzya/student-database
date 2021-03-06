<html lang="de">
<?php 
        include("student-data.php");
        $data = mysqli_fetch_object($result)
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="icon" type="image/ico" href="img/favicon.ico">

    <title><?= $data->first_name ?> <?= $data->last_name ?></title>
</head>
<body>


    <div class="container student">
        <a href="index.php">Zurück</a><h1><?= $data->first_name ?> <?= $data->last_name ?></h1>
<div class=".col-md-4 foto">
        <img src=<?= "data:image/jpeg;base64,'.base64_encode($data->photo)'"?> alt="">
        </div>
        <div class=".col-md-8">
        <table class="table">
        <thead>
        </thead>
            <tbody>
                <tr>
                    <td>Studiengang:</td>
                    <td><?= $data->major ?></td>
                </tr>
                <tr>
                    <td>Semester:</td>
                    <td><?= $data->semester ?></td>
                </tr>
                <tr>
                    <td>Martrikelnummer:</td>
                    <td><?= $data->studentnr ?></td>
                </tr>
                <tr>
                    <td>E-Mail:</td>
                    <td><?= $data->email ?></td>
                </tr>
                <tr>
                    <td>Adresse:</td>
                    <td><?= $data->street ?> <?= $data->streetnr ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td><?= $data->city ?></td>
                </tr>
                <tr>
                    <td>Telefon:</td>
                    <td><?= $data->tel ?></td>
                </tr>
                <tr>
                    <td>Geburtsdatum:</td>
                    <td><?= $data->birthday ?></td>
                </tr>
                <tr>
                    <td><a href="edit-student.php?id=<?= $data->id ?>" class="btn btn-primary">Bearbeiten</a></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>