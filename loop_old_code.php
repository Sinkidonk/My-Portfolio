<?php
// 8/6/2020 I relized I botch this script it only work well with the
// default setting.
// update: fixed the error with it not displaying the last few elements
// within the array, now it print a lot of extra unused tags.

function tagsloop($myarray)
{
    $output = '<div class="altcoloring">';
    
    $num = count($myarray);
    
    $colsNum = 2; // the number of cols I want
    
    $math = ceil($num/$colsNum);
    
    
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
    $count = 0;
	$innerCount = 0;
    $arrayCount = 0; // fixed an error from using $count as the array value
    while($count <= $num) {
        $output .= '<div class="row mw-100">';
        $x = 0;
        $innerMathCount = 0;

        while($innerCount < $num && $innerMathCount <= $math && $x <= $colsNum) {

            $output .= '<div class="col-sm-4 pb-2 pt-2">';
            $output .= '<p>';
            $output .= $myarray[$arrayCount][0];
            $output .= '</p>';
            $output .= '<a class="text-center" target="_blank" href="';
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
            
            $innerCount++;
            $x++;
            $arrayCount++;
            
        }
        $count++;
        $output .= "</div>";

    }
    $output .= "</div>";
           
    

    
    
    
    return $output;
};
?>