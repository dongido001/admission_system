<?php

namespace App\Helpers;

class AdmissionHelper 
{
    //

    public static function getOlevelPassGrade(){

    	return ['A1', 'B2', 'B3', 'C4', 'C5', 'C6'];
    }

    public static function checkResult($data){
        
        $data = (array) $data;
        $pass_waec_grade =  self::getOlevelPassGrade();
         
         //check if subject added contains emglish and maths
         if ( !in_array('English Language', $data) OR !in_array('Mathematics', $data) ){

            return "English Language and Mathematics are compulsory subject";
         } 
         
        $english = str_replace('subject', 'grade', array_search('English Language', $data));
        $maths   = str_replace('subject', 'grade', array_search('Mathematics', $data));
        
        //check if applicant passed english and maths...
        if( !in_array($data[$english], $pass_waec_grade) OR !in_array($data[$maths], $pass_waec_grade) ){
          
          return "English Language and Mathematics should have a minimum of C6";
        }
      
        //conunts the number of credit the applicant has
        $applicant_waec_score = [$data['grade1'], $data['grade2'], $data['grade3'], $data['grade4'], $data['grade5'], $data['grade6'], $data['grade7']];

        $good_waec_score = array_filter($applicant_waec_score, function( $grade ) use($pass_waec_grade){
            
            return in_array($grade, $pass_waec_grade);
        });

	     if ( count( $good_waec_score ) < 5  ){
	        return "Number of credits should more than or equal to 5";
	     } 
         return 1;
    }
}
