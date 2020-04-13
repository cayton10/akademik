<?
//Find session ID for each time function is called
    session_start();

//Pull values from form and store in appropriate session variables
    $id = htmlspecialchars($_POST['courseAlpha']);
    $num = htmlspecialchars($_POST['courseNum']);
    $name = htmlspecialchars($_POST['courseName']);
    $hours = htmlspecialchars($_POST['courseHours']);
    $grade = htmlspecialchars($_POST['courseGrade']);
    //Fill single class array with POSTed form data
    $class = array("Class"=> $id . $num, "Description" => $name, "Hours" => $hours, "Grade" => $grade);
    
    //Populate multidimensional classes array with each input
    $_SESSION['classes'][] = $class;
    
    foreach($_SESSION['classes'] as $value){
        echo "$key: $value<br />";
    }
    print_r($_SESSION['classes']);
    //Redirect back to index
    header('location:../index.php');
    //Increment session variable every time the SESSION array is loaded
    $_SESSION['count']++;
?>