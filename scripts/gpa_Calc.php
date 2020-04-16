<?
    
    
    function calculate_GPA($array)
    {
     
        session_start();
        

        //Declare appropriate variables for scope
        $hours = 0;
        $grades;
        $gradePoints = 0;
        $totalGradePoints = 0;
        $totalHours = 0;
        $GPA = 0.0;

        for ($i=0; $i < $array[$i]; $i++) 
        {
            foreach ($array as $key => $value) 
            {
                
                //If a grade has been assigned to the class array
                if($array[$i]['Grade'] != '')
                {
                    //'global' required for access to variables for update
                    //Declare appropriate variables for GPA calculation
                    
                    global $hours, $grades, $gradePoints, $totalGradePoints, $totalHours, $GPA, $cookie_value, $cookie_name;
                    //Pull hours from class with assigned grade
                    $hours = $array[$i]['Hours'];
                    //Read grade from class with assigend grade
                    $grades = $array[$i]['Grade'];
                    //If grade is 'A' etc, etc,
                    if($grades == 'A')
                    {
                        $gradePoints = 4 * $hours;
                    } 
                    else if($grades == 'B')
                    {
                        $gradePoints = 3 * $hours;
                    }
                    else if($grades == 'C')
                    {
                        $gradePoints = 2 * $hours;
                    }
                    else if($grades == 'D')
                    {
                        $gradePoints = 1 * $hours;
                    }
                    else
                    {
                        $gradePoints = 0;
                    }  
                }
                else
                {
                    return;
                    
                }           
            }

            //Update pertinent values for GPA calculation
            $totalGradePoints += $gradePoints;
            $_SESSION['totalGradePoints'] = $totalGradePoints;
            $totalHours += $hours;
            $_SESSION['totalHours'] = $totalHours;
            $GPA = $totalGradePoints / $totalHours;
            $GPA = number_format($GPA, 2);
            $_SESSION['gpa'] = $GPA;
            setcookie('gpa', $GPA, time() + 86400, '/');            
        }
    }