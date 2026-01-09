<?php
function page_header($title, $bgcolor )
{
    echo '<html><head><title>' . $title . '</title><head>';
    echo '<body bgcolor="#' . $bgcolor . '">';
}

function page_footer($msg)
{
    echo '<hr/>' . $msg;
    echo '</body></html>';
}

$user = "Somchai";
page_header("My Web Site" , "ffddee");
echo "สวัสดีคุณ $user";
page_footer("Thank You.");
?>