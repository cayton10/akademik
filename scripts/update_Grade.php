<?php   
    session_start();
    //From print_Classes.php 
    //Require_once to call GPA calculation function
    require_once('gpa_Calc.php'); 
    $grades = ($_POST['courseGrade']);
    //Foreach to access $grades array
    foreach ($grades as $key => $value) {
        //Explode each value 
        $value = explode(" ", $value);
        //Reassign grade with selected grade value
        $grade = $value[0];
        //Store course name and number
        $name = $value[1];
            //Nested foreach to access SESSION array
        foreach ($_SESSION['classes'] as $key => $class) 
            {
                //If class name I.E. CIT313 matches...
                if ($class['Class'] == $name)
                {
                    //Update 'grade' session array value with grade from <select>
                    $_SESSION['classes'][$key]['Grade'] = $grade;
                }
            }
    }

    //Call calculate gpa function to do so and set cookie
    calculate_GPA($_SESSION['classes']);
    //After calling function, redirect to index
    header('location:../index.php#view');


    ?>