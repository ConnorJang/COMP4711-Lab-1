<?php
/**
 * Created by PhpStorm.
 * User: Connor
 * Date: 9/7/2017
 * Time: 1:31 PM
 */ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php');

        $students = array();

        // Add first student
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        // Add second student
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        // Add third student (myself)
        $third = new Student();
        $third->surname = "Jang";
        $third->first_name = "Connor";
        $third->add_email('home','cjang21@my.bcit.ca');
        $third->add_email('work1','cjang21@my.bcit.ca');
        $third->add_grade(100);
        $third->add_grade(100);
        $third->add_grade(100);
        $students['c789'] = $third;

        ksort($students); // one of the many sort functions
        // Displays the students in alphabetical order, by first name
        foreach($students as $student)
            echo $student->toString();

        ?>

    </body>
</html>