<?php   
    session_start();
    //From print_Classes.php 

    /* ------------------------- IF GRADE IS SET DO THIS ------------------------ */
    //Check grade first
    $grades = htmlspecialchars($_POST['courseGrade']);

    //Per print_Classes, the select statement stores the course ID in the value='' attribute of the <option> tag
    //If $grade has a value...
        if(isset($grades)){
            //Explode to extract each part of the option value
            $grades = explode(" ", $grades);
            //Reassign grade with selected grade value
            $grade = $grades[0];
            //Store course name and number
            //Hope this doesn't count as me using > 1 array
            $name = $grades[1];
            //Loop through $_SESSION array w/ foreach
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