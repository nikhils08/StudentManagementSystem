<?php 
    include_once("classes/Student.php");

    $student = new Student();

    $id = $student->insertStudent("Nikhil", "Shadija", "nikhil@gmail.com", "9090909090", "Ulhas", 1, "1998-08-20", "TSEC", "Male", 1);
    echo $id;
?>