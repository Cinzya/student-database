<?php 
    $connection = mysqli_connect('localhost', 'root', '', 'student-database');
    if(isset($_POST['search'])) {
        $searchKey = $_POST['search'];
        $sql = "SELECT * FROM students WHERE vorname LIKE '%$searchKey%' OR nachname LIKE '%$searchKey%'";
    } elseif(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM students WHERE id = $id";
    }
    else {
        $sql = "SELECT * FROM students";
    }
    $result = mysqli_query($connection,$sql);
?>