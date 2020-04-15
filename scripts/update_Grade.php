<?php   
    session_start();
    //From print_Classes.php 

    /* ------------------------- IF GRADE IS SET DO THIS ------------------------ */
    //Check grade first
    $grades = ($_POST['courseGrade']);
    print_r($grades);
    //Foreach to access $grades array
    foreach ($grades as $key => $value) {
        //Explode each value 
        $value = explode(" ", $value);
        //Reassign grade with selected grade value
        $grade = $value[0];
        echo $grade;
        //Store course name and number
        $name = $value[1];
        echo $name;
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
        /*if(isset($grades)){
            //Explode to extract each part of the option value
            $grades = explode(" ", $grades);
            //Reassign grade with selected grade value
            $grade = $grades[0];
            echo $grade;
            //Store course name and number
            //Hope this doesn't count as me using > 1 array
            $name = $grades[1];
            //Loop through $_SESSION array w/ foreach
            echo $name;
            
        }*/

    //redirect user back to index
    header('location:../index.php');
    ?>