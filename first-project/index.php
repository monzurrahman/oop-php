<?php
include ('class-lib.php');


// Creating instance of the previous class ... Somethink like image/protibimbo/reflection/shadow of class
$job_placement_course = new Course();
// $poly_intern_course = new Course();

echo $job_placement_course -> course_name="English";
echo "<br/>";
// new object create 

$latest_course = new Course();
echo $latest_course -> course_name="New course Math";
//


//* Example to create new object to work with the previous class. Tested

include('class-lib.php');
$name1 = $_GET['name'];
$fees1 = $_GET['fee'];
$outline1 = $_GET['outline'];
$duration1 = $_GET['duration'];

$obj_course_output = new Course;
$obj_course_output -> set_course_details($name1,$fees1, $outline1, $duration1);
echo $obj_course_output-> get_course_details();
*//
?>
