<?
//Find session ID for each time function is called
    session_start();
//Pull values from form and store in appropriate variables
    $id = htmlspecialchars($_POST['courseAlpha']);
    $num = htmlspecialchars($_POST['courseNum']);
    $name = htmlspecialchars($_POST['courseName']);
    $hours = htmlspecialchars($_POST['courseHours']);
    $grade = htmlspecialchars($_POST['courseGrade']);

    //Populate classes array from form data

    //Declare classes array
    $classes[] = array("Course" => $id . $num, "Description" => $name, "Credit Hours" => $hours, "Grade" => $grade);
/* ------------------------ ADD GRADES FROM FORM POST ----------------------- */
    //Load classes into array with all relevant information
    function addClasses($id, $num, $name, $hours, $grade=NULL){
        
        echo $classes;
    }

    ?>