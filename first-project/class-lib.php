<?php
class Course{
	var $coursename;
	var $coursefees;
	var $courseoutline;
	var $courseduration;
	
	function set_course_details($name,$fees, $outline, $duration){
		
		$this -> coursename=$name;
		$this -> coursefees=$fees;
		$this -> courseoutline=$outline;
		$this -> courseduration=$duration;
		// return "Your course name:".$name."Course Fees:".$fees."Outline:".$outline."Duration:".$duration;
		// return $name.$id;
	}

	function get_course_details(){
		return "Your course name:".$this->coursename."Course Fees:".$this->coursefees."Outline:".$this->courseoutline."Duration:".$this->courseduration;
	}  
 	
	
	}

