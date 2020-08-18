<?php


if(isset($_POST['submit'])){

    $student_name = $_POST['username'];
    $father_name = $_POST['father'];
    $mother_name = $_POST['mother'];
    $school_name = $_POST['school'];

    echo $student_name;
    echo $father_name;
    echo $mother_name;
    echo $school_name;

}



?>