<?
//Find session ID for each time function is called
    session_start();
    echo "We have session value of " . $_SESSION['session'] ." <br />";
//Pull values from form and store in appropriate session variables
    $_SESSION['id'] = htmlspecialchars($_POST['courseAlpha']);
    $_SESSION['num'] = htmlspecialchars($_POST['courseNum']);
    $_SESSION['name'] = htmlspecialchars($_POST['courseName']);
    $_SESSION['hours'] = htmlspecialchars($_POST['courseHours']);
    $_SESSION['grade'] = htmlspecialchars($_POST['courseGrade']);
    //Populate classes array from form data
    $id = $_SESSION['id']; 
    //Declare classes array
    $_SESSION['classes'] = array("Course" => $id . $num, "Description" => $name, "Credit Hours" => $hours, "Grade" => $grade);
    foreach($_SESSION['classes'] as $value){
        echo "$key: $value<br />";
    }
/* ------------------------ ADD GRADES FROM FORM POST ----------------------- */
    //Load classes into array with all relevant information
    function addClasses($id, $num, $name, $hours, $grade=NULL){
        
        $id = $_SESSION['id'];
        $num = $_SESSION['id']; 
        $name = $_SESSION['id']; 
        $hours = $_SESSION['id']; 
        $grade = $_SESSION['id'];  
        
        echo "Class: " . $id . $num ." Description: $name Course Hours: $hours Grade: $grade";
    }

    ?>