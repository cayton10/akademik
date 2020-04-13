<?
    session_start();

    function print_Classes($array){
        
        //Control flow for appropriate operation
        if($_SESSION['count'] < 1){
            //If no submissions, tell user to add classes
            echo "<h3>Please add class information to populate cirriculum table.</h3>";
        } else {
            //Populate table headers
            $headers = array_keys($_SESSION['classes'][0]);
            $output = "<table class='table'><thead class='thead-dark'><tr class='row text-center'>";
            //foreach header output
            foreach ($headers as $key => $value) {
                //format header row column width
                if ($value != 'Description') {
                    $output .= "<th class='col-2'>" . $value . "</th>";
                }  else {
                $output .= "<th class='col-4'>" . $value . "</th>";
                }
            }

            // finish our thead and start our tbody
            $output .= "</tr></thead></table>";

            echo $output;


            //Access SESSION variable array
            for ($i=0; $i < $_SESSION['classes'][$i]; $i++) {
                //Multidimensional array requires nested for loops 
                foreach($_SESSION['classes'][$i] as $key=>$value){
                    if ($value == '') {
                        echo "<p>{$key}: {$value}</p><br />";
                    } else {
                echo "<h2>{$key} => {$value}</h2> <br /> ";
                }
            }
        }
    }
}

session_destroy();
    
    ?>