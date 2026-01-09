<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การสร้างฟอร์มในการรับค่าเพื่อคำนวณ</title>
</head>

<body>
    <form method="get" action="u5-9cal.php">
        <table border="1" align="center" width="500">
            <tr>
                <td colspan="2" align="center">
                    <big>Arithmetic Operator </big>
                </td>
            <tr>
            <tr>
                <td>Enter Number 1 : </td>
                <td><input type="number" name="number1" size="15" value="" min="1" max="10" /> </td>
            </tr>
                <td>Enter Number 2 : </td>
                <td><input type="number" name="number2" size="15" value="" min="1" max="10"  /></td>
            </tr>
            <tr>
                <td> Operator : </td>
                <td align="left">
                    <select name="operator" > <!-- changed to use select dropdown -->
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                        <option value="%">%</option>
                </td>
            <tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value=" OK " />
                    <input type="reset" value=" Clear " />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>