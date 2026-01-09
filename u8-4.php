<?php
function page_header($title, $bgcolor = "ffffff"){
    echo '<html><head><title>' . $title . '</title><head>';
    echo '<body bgcolor="#' . $bgcolor . '">';
}

function page_footer($message){
    echo '<hr />' . $message;
    echo '</body></html>';
}

function show_checker($bgcolor1, $bgcolor2){
    echo '<table align="center" border="1">';
    for ($r = 1; $r <= 5; $r++) { 
        echo '<tr >'; //create row
        for ($c = 1; $c <= 10; $c++) {
            if ($r % 2 == 1) {
                echo '<td bgcolor="#' . (($c % 2 == 1) ? $bgcolor1 : $bgcolor2) . '">';
            } else {
                echo '<td bgcolor="#' . (($c % 2 == 1) ? $bgcolor2 : $bgcolor1) . '">';
            }
            echo $r . ' , ' . $c . '</td>';
        }
        echo '</tr>';//end row
    }
    echo '</table>';
}
page_header("My Web Site", "FFDDEE");
show_checker("33ff99", "ffff99"); //yl,gr
page_footer("Thank You.");
?>

r,c=4=blue 