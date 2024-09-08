<?php
class Course{
	// variables defined inside a class is called member variable
	// Class contains data/property and method/function 
	
	// Property set/get
	var $course_name="coursename from class file";
	var $course_fee;
	var $course_outline;
	var $course_duration;
	
	// functions /methods 
	
	function set_course_details($name,$fee,$outline,$duration){
		$this -> course_name=$name; // Like $course_name = "Math"; can access any property
		$this -> course_fee=$fee; 
		$this -> course_outline=$outline;
		$this -> course_duration=$duration;
				
	}
	/*
	function get_course_details(){
		
		return "Your course is".$this->course_name." Course fee is:".$this->course_fee." Course outline:".$this->course_outline." Course duration is:".$this->course_duration;
		
	}
	*/
	
	//$job_placement_course = new Course();
}
