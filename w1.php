<html>
<head>
    <meta charset="utf-8">
    <title>If-else</title>
</head>

<body align="center">
    <h1>สภาพอากาศวันนี้เป็นอย่างไร</h1>
    <form method="post">
        <input type="radio" name="weather" value="ฝนตก"> ฝนตก
        <input type="radio" name="weather" value="แดดออก"> แดดออก
        <input type="submit" value="ตกลง">
    </form>
    
    <?php
    if (isset($_POST['weather'])) {
        if ($_POST['weather'] == "ฝนตก") {
            echo "วันนี้ฝนตก แนะนำให้อยู่บ้าน";
        } else {
            echo "วันนี้แดดออก แนะนำให้ไปเที่ยว";
        }
    }
    ?>
</body>
</html>
