<?
    session_start();

    function print_Classes($array)
    {
        
        //Control flow for appropriate operation
        if($_SESSION['count'] < 1)
        {
            //If no submissions, remain w/in page
            return;
        } 
        else 
        {
            //Populate table headers
            $headers = array_keys($array[0]);
            $output = "<table class='table table-hover'><thead class='thead-dark'><tr class='row text-center'>";
            //oreach header output
            foreach ($headers as $key => $value) 
            {
                //Format header row column width
                if ($value != 'Description') 
                {
                    $output .= "<th class='col-2 text-left'>" . $value . "</th>";
                }  
                else 
                {
                $output .= "<th class='col-6 text-left'>" . $value . "</th>";
                }
            }
                //End table header and start table body
                $output .= "</tr></thead><tbody>";
                
            //Concat output variable with end of header markup
            $output .= "</tr></thead><tbody>";
            //Access SESSION variable array
            for ($i=0; $i < $array[$i]; $i++) 
            {
            //Check to see if grade isset() for table row formatting
            //If Grade key has a value
            if($array[$i]['Grade'] != '')
            {
                $output .= "<tr class='row text-center updated'>";
            }
            //Else use regular formatting
            else 
            {
                $output .= "<tr class='row text-center'>";
            }
                //Multidimensional array requires nested for loops 
                foreach($array[$i] as $key=>$value)
                {
                    //Control flow to format description field same as description header
                    if ($key == 'Description') 
                    {
                        $output .= "<td class='col-6 text-left'>" . $value . "</td>";
                        //Output select dropdown if key is 'grade'
                    } 
                    else if ($key == 'Grade' && $value == '')
                    {
                        //Select dropdown needs to be nested in <form> to resubmit grade info
                        $output .= "<td class='col-2 text-left'>
                                        <form action='scripts/update_Grade.php' method='POST'>
                                            <select name='courseGrade[]' class='grade_select'>
                                                <option value='' disabled selected>N/A</option>
                                                <option value='A " . $_SESSION['classes'][$i]['Class'] ."'>A</option>
                                                <option value='B " . $_SESSION['classes'][$i]['Class'] ."'>B</option>
                                                <option value='C " . $_SESSION['classes'][$i]['Class'] ."'>C</option>
                                                <option value='D " . $_SESSION['classes'][$i]['Class'] ."'>D</option>
                                                <option value='F " . $_SESSION['classes'][$i]['Class'] ."'>F</option>
                                        </form>
                                    </td>";           
                    } 
                    else 
                    {
                        //Format output for all other values in the array
                    $output .= "<td class='col-2 text-left'>" . $value . "</td>";
                    }
                }
                //End class information row
                $output .= "</tr>";
            }
            //End table
            $output .= "</tbody></table>";
            //Concat submit button to update grades
            $output .= "<input type='submit' class='btn btn-primary px-4 rounded-0 my-3 text-center' value='Update Classes' name='submit'>";
        }
    return $output;
    }
    
?>