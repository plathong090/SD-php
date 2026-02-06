<html>

<head>
    <title>แสดงการสร้างและใช้งานอาร์เรย์หลายมิติแบบ Associative Array</title>
</head>

<body>
    <?php 
    $products = array(
        "T0001" => array("name" => "บล็อดหยอดหมีพูห์", "price" => 599),
        "T0004" => array("name" => "ตุ๊กตากบ สอน ABC", "price" => 2400),
        "T0005" => array("name" => "โต๊ะกิจกรรม", "price" => 1690),
        "P0001" => array("name" => "กระดานลื่นสุขสันต์", "price" => 9800),
        "B0001" => array("name" => "หนังสือมีเสียง: Pooh's Musical", "price" => 550),
    );
    $sum = 0;

    echo "<table align='center' width='70%' border='1'>";
    echo "<tr><th>รหัสสินค้า</th><th>ชื่อสินค้า</th><th>ราคา</th></tr>";

    foreach ($products as $productCode => $details) {
        echo "<tr><td align='center'> $productCode </td>";
        foreach ($details as $price => $value2) {
            if ($price == "name")
                echo "<td> $value2 </td>";
            else {
                echo "<td align='right'>";
                echo number_format($value2, 2) . " </td>";
                echo "";
            }
        }
//คำนวณค่าเฉลี่ยราคาสินค้า
        echo "</tr><tr>";
        $sum += $details['price'];
        echo "<td colspan='2' align='center'><b>ราคาเฉลี่ย</b></td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>