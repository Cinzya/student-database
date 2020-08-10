<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="icon" type="image/ico" href="img/favicon.ico">

    <title>Studentendatenbank</title>
</head>
<body>
    <div class="container">
     <?php 
        include("student-data.php");
        print_r($_POST);
        print_r($order);
            ?>

        <h1>Studentendatenbank</h1>

            <div class="row">
                <form action="" method="POST" class="col-md-6">
                    <div class="col-md-6"><input type="text" name="search" class="form-control"></div>
                    <div class="col-md-3"><button type="submit" class="btn btn-primary">Suchen</button></div>
                </form>
                <div class="col-md-3"><a href="add-student.php" class="btn btn-primary">Student hinzufügen</a></div>  
            </div>

            <div class="row">
                Studiengänge:
                <button class="btn btn-primary">Alle</button>
                <?php while($button = mysqli_fetch_object($courses)) { ?>
                    <button class="btn btn-primary"><a href="<?= "?course=$button->short" ?>"><?= $button->short ?></a></button>
                <?php } ?>
            </div>

        <table class="table">
        <thead>
            <tr>
            <th scope="col"></th>
            <?php $sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC'; ?>
            <th scope="col"><a href="<?= "?order=first_name&&sort=$sort"?>">Vorname</a></th>
            <th scope="col"><a href="<?= "?order=last_name&&sort=$sort"?>">Nachname</a></th>
            <th scope="col"><a href="<?= "?order=major&&sort=$sort"?>">Studiengang</a></th>
            <th scope="col"><a href="<?= "?order=birthday&&sort=$sort"?>">Geburtsdatum</a></th>
            </tr>
        </thead>
        
        <tbody>
        <?php while($row = mysqli_fetch_object($result)) { ?>
            <tr>
            <td><a href="student.php?id=<?= $row->id ?>"><img src="img/eye.svg" alt="" class="view"></a></td>
            <td><?= $row->first_name ?></td>
            <td><?= $row->last_name ?></td>
            <td><?= $row->major ?></td>
            <td><?= $row->birthday ?></td>
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