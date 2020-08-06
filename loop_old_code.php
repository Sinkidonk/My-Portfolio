<?php
// 8/6/2020 I relized I botch this script it only work well with the
// default setting.

function tagsloop($myarray)
{
    $output = '<div class="altcoloring">';
    
    $num = count($myarray);
    
    $colsNum = 3; // the number of cols I want
    
    $math = ceil($num/$colsNum);
    
    $count = 0;
    /*
    For this to work I need the inner loop to create 4 cols
    I also need a way to loop throught the array to input the
    array values while making sure there are no repeats.
    While also having it drop down to the next row
    once cols are created. To do this I will need
    a carry over a variable outside of the loop
    and to keep it from running if no more input I can
    use the AND logical operators.
    
    
    */
    
    $arrayCount = 0; // fixed an error from using $count as the array value
    while($count < $num) {
        $output .= '<div class="row mw-100" style="margin-left: 0px;">';
        $x = 0;
        $innerCount = 0;

        while($count <= $num && $innerCount <= $math && $x <= $colsNum) {

            $output .= '<div class="col-sm-3">';
            $output .= '<p>';
            $output .= $myarray[$arrayCount][0];
            $output .= '</p>';
            $output .= '<a class="text-center pb-t pt-2" target="_blank" href="';
            $output .= $myarray[$arrayCount][2];
            $output .= '">';
            switch ($myarray[$arrayCount][1]) {
                case 0:
                    $output .= 'Go to Page</a>';
                    break;
                case 1:
                    $output .= 'Web demo</a>';
                    break;
                case 2:
                    $output .= 'View on Github</a>';
                    break;
                default:
                    $output .= 'Um how did you get here</a>';
                    
            }
            $output .= '</div>';
            $count++;
            $innerCount++;
            $x++;
            $arrayCount++;
            
        }
        $count++;
        $output .= "</div>";
		echo "$count count output <br>";
		echo "$innerCount innerCount output <br>";
		echo "$x x output <br>";
		echo "$arrayCount arrayCount output <br>";
	
    }
    $output .= "</div>";
           
    

    
    
    
    return $output;
};
?>