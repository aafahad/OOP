<?php

function __autoload($class_name)
{
    include_once("classes/".$class_name.".php");

}

$bkiict = new Bkiict();
//echo $bkiict-> fullName;

$student = new Student();
//var_dump($student);

$course = new Course();
echo $course -> title;
echo "<br />";
$course-> title = 'course Title';
echo $course -> title;
echo "<br />";

$course->getCredits('hello','hi');

$course->getLessons();


//var_dump($course);

$myarray = ['mim','tumpa','fahad'];
$srmyarray = serialize($myarray);

print_r(unserialize($srmyarray));



?>
