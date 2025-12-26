<html>

<head>
    <meta charset="utf-8">
    <title>Information</title>
</head>

<body>
    <?php 
    $id = '6506021612048';
    $name = 'นางสาวปรางค์ทอง ประทุม';
    $age = 21;
    $add = '129 หมู่ 21 ตำบลเนินหอม อำเภอเมือง จังหวัดปราจีนบุรี 25230';
    $dep = 'เทคโนโลยีสารสนเทศ';
    $fac = 'เทคโนโลยีและการจัดการอุตสาหกรรม';
    ?>

    <h1> ข้อมูลส่วนตัว </h1>
    <table border="1">
        <tr>
            <td class="left">รหัสนักศึกษา :</td>
            <td class="right"><?php echo $id; ?></td>
        </tr>
        <tr>
            <td class="left">ชื่อ - นามสกุล :</td>
            <td class="right"><?php echo $name; ?></td>
        </tr>
        <tr>
            <td class="left">อายุ (ปี) : </td>
            <td class="right"><?php echo $age; ?></td>
        </tr>
        <tr>
            <td class="left">ที่อยู่ :</td>
            <td class="right"><?php echo $add; ?></td>
        </tr>
        <tr>
            <td class="left">ภาควิชา :</td>
            <td class="right"><?php echo $dep; ?></td>
        </tr>
        <tr>
            <td class="left">คณะ :</td>
            <td class="right"><?php echo $fac; ?></td>
        </tr>
    </table>

</body>

</html>