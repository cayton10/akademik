<?
//Find session ID for each time function is called
    session_start();

//Pull values from form and store in appropriate session variables
    $id = htmlspecialchars($_POST['courseAlpha']);
    $num = htmlspecialchars($_POST['courseNum']);
    $name = htmlspecialchars($_POST['courseName']);
    $hours = htmlspecialchars($_POST['courseHours']);
    $grade = htmlspecialchars($_POST['courseGrade']);
    
    //Store each session variables into an array of session['classes']
    //Must be multidimensional array to prevent submission overwriting
    $_SESSION['classes'][] = array("Class"=> $id . $num, "Description" => $name, "Credit Hours" => $hours, "Grade" => $grade);
    //Access array
    foreach($_SESSION['classes'] as $value){
        echo "$key: $value<br />";
    }
    print_r($_SESSION['classes']);
    header('location:../index.php');
?>