<?php 
    $connection = mysqli_connect('localhost', 'root', '', 'student-database');
    if(isset($_POST['search'])) {
        $searchKey = $_POST['search'];
        $sql = "SELECT * FROM students WHERE vorname LIKE '%%searchKey%'";
    } else {
        $sql = "SELECT * FROM students"
    }
    $sql = "SELECT * FROM students";
    $result = mysqli_query($connection,$sql);
?>