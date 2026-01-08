<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>การสร้างฟอร์ม</title>
</head>

<body>
    <form action="" method="post" name="form1" id="form1">

        รหัสบัตรประชาชน :
        <input type="text" name="IDcard" maxlength="13" /><br /><br />

        ชื่อ-นามสกุล :
        <input type="text" name="fullname" size="40" /><br /><br />

        เพศ :
        <input type="radio" name="gender" value="male" /> ชาย
        <input type="radio" name="gender" value="female" /> หญิง
        <br /><br />

        งานอดิเรก : <br />
        <input type="checkbox" name="hobby[]" value="read" /> อ่านหนังสือ <br />
        <input type="checkbox" name="hobby[]" value="tv" /> ดูโทรทัศน์ <br />
        <input type="checkbox" name="hobby[]" value="sport" /> เล่นกีฬา
        <br /><br />

        ภาควิชา :
        <select name="department" size="4">
            <option value="it">เทคโนโลยีสารสนเทศ</option>
            <option value="IM">การจัดการอุตสาหกรรม</option>
            <option value="CDM">การออกแบบและบริหารงานก่อสร้าง</option>
            <option value="aei">วิศวกรรมเกษตรเพื่ออุตสาหกรรม</option>
        </select>
        <br /><br />

        <input type="submit" value="ส่งข้อมูล" />
        <input type="reset" value="ล้างข้อมูล" />

    </form>
</body>

</html>