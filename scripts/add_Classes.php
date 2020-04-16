<?
//Find session ID for each time function is called
    session_start();

//Pull values from form and store in appropriate session variables
    $id = htmlspecialchars($_POST['courseAlpha']);
    $num = htmlspecialchars($_POST['courseNum']);
    $name = htmlspecialchars($_POST['courseName']);
    $hours = htmlspecialchars($_POST['courseHours']);
    
    //Fill single class array with POSTed form data
    $class = array("Class"=> $id . $num, "Description" => $name, "Hours" => $hours, "Grade" => $grade);
    //Populate multidimensional classes array with each input
    $_SESSION['classes'][] = $class;
    //Increment session variable every time the SESSION array is loaded
    $_SESSION['count']++;
    //Redirect back to index
    header('location:../index.php');
?>