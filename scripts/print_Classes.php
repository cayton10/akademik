<?
    session_start();

    function print_Classes($array){
        
        //Control flow for appropriate operation
        if($_SESSION['count'] < 1){
            //If no submissions, tell user to add classes
            return;
        } else {
            //Populate table headers
            $headers = array_keys($array[0]);
            $output = "<table class='table'><thead class='thead-dark'><tr class='row text-center'>";
            //foreach header output
            foreach ($headers as $key => $value) {
                //format header row column width
                if ($value != 'Description') {
                    $output .= "<th class='col-2 text-left'>" . $value . "</th>";
                }  else {
                $output .= "<th class='col-6 text-left'>" . $value . "</th>";
                }
            }

            //Concat output variable with end of header markup
            $output .= "</tr></thead><tbody>";

            //Access SESSION variable array
            for ($i=0; $i < $array[$i]; $i++) {
            $output .= "<tr class='row text-center'>";
                //Multidimensional array requires nested for loops 
                foreach($array[$i] as $key=>$value){
                    //Control flow to format description field same as description header
                    if ($key == 'Description') {
                        $output .= "<td class='col-6 text-left'>" . $value . "</td>";
                        //Output select dropdown if key is 'grade'
                    } else if ($key == 'Grade' && $value == ''){
                        //Select dropdown needs to be nested in <form> to resubmit grade info
                        $output .= "<td class='col-2 text-left'>
                                        <form action='scripts/update_Grades.php' method='POST'>
                                            <select name='courseGrade' class='grade_select'>
                                                <option value='' disabled selected>N/A</option>
                                                <option value='A'>A</option>
                                                <option value='B'>B</option>
                                                <option value='C'>C</option>
                                                <option value='D'>D</option>
                                                <option value='F'>F</option>
                                        </form>
                                    </td>";
                    } else {
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