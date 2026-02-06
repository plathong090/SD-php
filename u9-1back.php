<html>

<head>
    <title>แสดงการสร้างและใช้อาร์เรย์ด้วยคำสั่ง array Numberic Array</title>
</head>

<body>
    <?php
    $weekdays = array("อา", "จ", "อ", "พ", "พฤ", "ศ", "ส");
    echo '<center><font size="4" color="blue">มกราคม 2569</font>';
    echo '<font size="5" color="red"> 1 </font>';
    echo '<font size="4" color="blue">January 2026</font></center>';
    echo '<table border="1" align="center">';
    echo '<tr>';
    for ($n = 0; $n < 7; $n++) {
        echo '<td align="center" width="90">' . $weekdays[$n] . '</td>';
    }
    print_month();
    echo '</tr></table>';

    function print_month()
    {
        $day = -3; //วันที่เริ่มต้น
        for ($row = 1; $row <= 5; $row++) {
            echo '<tr>';
            for ($col = 1; $col <= 7; $col++) {
                if (($day >= 1) && ($day <= 31))
                    echo '<td align="center">' . $day . '</td>';
                else
                    echo '<td align="center"> </td>';
                $day++;
            }
            echo '</tr>';
        }
    }
    ?>
</body>

</html>