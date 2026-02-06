<html>

<head>
    <title>แสดงการสร้างและใช้งานอารเรย์ Associative Array</title>
</head>

<body>
    <?php
    $weekdays = array(
        "sun" => "อา",
        "mon" => "จ",
        "tue" => "อ",
        "wed" => "พ",
        "thu" => "พฤ",
        "fri" => "ศ",
        "sat" => "ส"
    );

    $months = array(
        "jan" => "ม.ค.",
        "feb" => "ก.พ.",
        "mar" => "มี.ค.",
        "apr" => "เม.ย.",
        "may" => "พ.ค.",
        "jun" => "มิ.ย.",
        "jul" => "ก.ค.",
        "aug" => "ส.ค.",
        "sep" => "ก.ย.",
        "oct" => "ต.ค.",
        "nov" => "พ.ย.",
        "dec" => "ธ.ค."
    );

    $d = $weekdays[strtolower(date("D"))];
    $m = $months[strtolower(date("M"))];
    $y = date("Y") + 543;

    echo "วันนี้คือวัน $d ที่ " . date("j") . " $m พ.ศ. $y<br>";
    echo "<table width='500'><tr><td>";
    print_array();
    echo "</td>";
    $weekdays["thu"] = "Thursday";
    $weekdays[] = "** ทดสอบ **";
    echo "<td>";
    print_array();
    echo "</td></tr></table>";
    function print_array()
    {
        global $weekdays;
        echo "<pre>";
        print_r($weekdays);
        echo "</pre>";
    }
    ?>
</body>

</html>