<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Studen Database</title>
</head>
<body>
    <div class="container">
        <h1>Student Database</h1>

            <div class="row">
            <?php 
                include("student-data.php");
            ?>

                <form action="" method="POST">
                    <div class="col-md-6"><input type="text" name="search" class="form-control"></div>
                    <div class="col-md-3"><button class="btn btn-primary" name="search">Suchen</button> </div>
                </form>
                <div class="col-md-3"><button class="btn btn-primary" name="add">Student hinzufügen</button></div>  
            </div>

        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Vorname</th>
            <th scope="col">Nachname</th>
            <th scope="col">Studiengang</th>
            <th scope="col">Geburtsdatum</th>
            </tr>
        </thead>
        
        <tbody>
        <?php while($row = mysqli_fetch_object($result)) { ?>
            <tr>
            <th scope="row"><?php echo $row->nachname ?></th>
            <td><?php echo $row->vorname ?></td>
            <td><?php echo $row->studiengang ?></td>
            <td><?php echo $row->geburtsdatum ?></td>
            </tr>
        <?php } ?>
        </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>