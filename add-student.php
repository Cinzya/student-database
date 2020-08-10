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

    <title>Neuer Student</title>
</head>
<body>


    <div class="container student">
        <a href="index.php">Zurück</a>

        <h1>Neuer Student</h1>

        <form action="index.php" method="POST">
<div class=".col-md-4 foto">
        <img src="img\profile-dummy-250x250.png" alt="" width="250px" height="250px">
        <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
        <div class=".col-md-8">
        <table class="table">
        <thead>
        </thead>
            <tbody>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="first_name" value="Vorname"> <input type="text" name="last_name" id="" value="Nachname"></td>
                </tr>
                <tr>
                    <td>Studiengang:</td>
                    <td><input type="text" name="major"></td>
                </tr>
                <tr>
                    <td>Semester:</td>
                    <td><input type="number" name="semester"></td>
                </tr>
                <tr>
                    <td>Martrikelnummer:</td>
                    <td><input type="number" name="studentnr"></td>
                </tr>
                <tr>
                    <td>E-Mail:</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Adresse:</td>
                    <td><input type="text" name="street"> <input type="number" name="streetnr"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="text" name="city"></td>
                </tr>
                <tr>
                    <td>Telefon:</td>
                    <td><input type="text" name="tel" id=""></td>
                </tr>
                <tr>
                    <td>Geburtsdatum:</td>
                    <td><input type="date" name="birthday"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Speichern" name="submit" class="btn btn-primary"></td>
                </tr>
            </tbody>
        </table>
        </form>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>