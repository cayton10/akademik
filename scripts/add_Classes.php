<?
//Find session ID for each time function is called
    session_start();
    echo "We session value " . $_SESSION['session'];
//Pull values from form and store in appropriate variables
    $id = htmlspecialchars($_POST['courseAlpha']);
    $num = htmlspecialchars($_POST['courseNum']);
    $name = htmlspecialchars($_POST['courseName']);
    $hours = htmlspecialchars($_POST['courseHours']);
    $grade = htmlspecialchars($_POST['courseGrade']);

    //Populate classes array from form data

    //Declare classes array
    $_SESSION['classes'] = array("Course" => $id . $num, "Description" => $name, "Credit Hours" => $hours, "Grade" => $grade);
    print_r ($_SESSION['classes']);
/* ------------------------ ADD GRADES FROM FORM POST ----------------------- */
    //Load classes into array with all relevant information
    function addClasses($id, $num, $name, $hours, $grade=NULL){
        
        echo $classes;
    }

    ?>