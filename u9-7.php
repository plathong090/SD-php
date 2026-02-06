<html>

<head>
    <title>แสดงการสร้างและเข้าถึง Numeric Array แบบหลายมิติ</title>
</head>


<body>
    <!-- เพิ่มคอลัมน์ซ้ายเป็นลำดับที่ คอลัมน์ขวาเป็นผลรวม-->
    <!-- เพิ่มใหม่ขวาสุดเป็นเกรด ข้างล่างเพิ่มrowหาค่าเฉลี่ยแต่ละอัน หาค่า min,max แต่ละอัน -->
    <?php
    $maxRow = 10;
    $maxCol = 3;
    $sumCol = array_fill(0, $maxCol + 1, 0); 
    $minCol = array_fill(0, $maxCol + 1, 101);
    $maxColVal = array_fill(0, $maxCol + 1, -1);

    //คะแนนสุ่ม
    for ($r = 0; $r < $maxRow; $r++) {
        for ($c = 0; $c < $maxCol; $c++) {
            $score[$r][$c] = rand(0, 100);
        }
    }

    echo "<table border='1' align='center' width='70%'>";
    echo "<tr><td width='30' align='center'>No.</td>";
    echo "<td width='40' align='center'>Homework</td>";
    echo "<td width='40' align='center'>Midterm</td>";
    echo "<td width='40' align='center'>Final</td>";
    echo "<td width='40' align='center'>Total</td><td width='40' align='center'>GPA</td></tr>";



    for ($r = 0; $r < $maxRow; $r++) {
        $total = 0;
        echo "<tr><td align='center'>" . ($r + 1) . "</td>";

        for ($c = 0; $c < $maxCol; $c++) {
            echo "<td align='center'>" . $score[$r][$c] . "</td>";
            $total += $score[$r][$c];

            $sumCol[$c] += $score[$r][$c];
            $minCol[$c] = min($minCol[$c], $score[$r][$c]);
            $maxColVal[$c] = max($maxColVal[$c], $score[$r][$c]);
        }
        echo "<td align='center'><b> $total </b></td>";
        $sumCol[$maxCol] += $total;
        $minCol[$maxCol] = min($minCol[$maxCol], $total);
        $maxColVal[$maxCol] = max($maxColVal[$maxCol], $total);

        if ($total >= 80)
            $grade = "A";
        elseif ($total >= 70)
            $grade = "B";
        elseif ($total >= 60)
            $grade = "C";
        elseif ($total >= 50)
            $grade = "D";
        else
            $grade = "F";

        echo "<td align='center'><b>$grade</b></td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>