<?php   
    session_start();
    //From print_Classes.php 
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

    //redirect user back to index
    header('location:../index.php');
    ?>