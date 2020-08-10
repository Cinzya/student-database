<?php 
    $connection = mysqli_connect('localhost', 'root', '', 'student-database');
    $order = "id";
    
    if(isset($_GET['order'])) {
        $order = $_GET['order'];
    } else {
        $oder = "id";
    }
    
    if(isset($_GET['sort'])) {
        $sort = $_GET['sort'];
    } else {
        $sort = "ASC";
    }

    if(isset($_GET['course'])) {
        $course = $_GET['course'];
    }

    if(isset($_POST['search'])) {
        $searchKey = $_POST['search'];
        $sql = "SELECT * FROM students WHERE first_name LIKE '%$searchKey%' OR last_name LIKE '%$searchKey%' ORDER BY $order $sort";
    } elseif(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM students WHERE id = $id";
    } else {
        $sql = "SELECT * FROM students ORDER BY $order $sort";
    }

    if(isset($_POST['edit'])) {
        $id = $_GET['id'];
        $new_first_name = $_POST['new_first_name'];
        $new_last_name = $_POST['new_last_name'];
        $new_major = $_POST['new_major'];
        $new_semester = $_POST['new_semester'];
        $new_studentnr = $_POST['new_studentnr'];
        $new_email = $_POST['new_email'];

        $sql = "UPDATE students SET first_name = $first_name WHERE id = $id";
    }

    if(isset($_POST['submit'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $major = $_POST['major'];
        $semester = $_POST['semester'];
        $studentnr = $_POST['studentnr'];
        $email = $_POST['email'];

        $sql = 
        
    }

    setlocale(LC_TIME, "de_DE.UTF-8");
    $course = "SELECT * FROM courses";

    $result = mysqli_query($connection,$sql);
    $courses = mysqli_query($connection,$course);

    
    function data_uri($file, $mime) 
    {  
    $contents = file_get_contents($file);
    $base64   = base64_encode($contents); 
    return ('data:' . $mime . ';base64,' . $base64);
    }

?>