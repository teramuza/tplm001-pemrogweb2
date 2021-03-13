<?php
if ($_POST) {
    $val1 = $_POST['val1'];
    $val2 = $_POST['val2'];
    $operator = $_POST['operator'];

    if ($operator && $val1 && $val2) {

        switch ($operator) {
            case '+':
                $result = $val1 + $val2;
                break;
            case '-':
                $result = $val1 - $val2;
                break;
            case '*':
                $result = $val1 * $val2;
                break;
            case '/':
                $result = $val1 / $val2;
                break;
            default:
                break;
        }
    }
}
?>

<html>
<head>
    <title>kalkulator sederhana</title>
    <style>
        td, p: {
            font-weight: bold;
            font-size: 12px;
            color: firebrick;
        }
    </style>
</head>
<body>
<form method="post" action="">
<table>
    <tr>
        <td><p>Nilai 1</p></td>
        <td></td>
        <td><p>Nilai 2</p></td>
    </tr>
    <tr>
        <td><input type="text" name="val1" /></td>
        <td><select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">x</option>
                <option value="/">/</option>
            </select></td>
        <td><input type="text" name="val2" /></td>
    </tr>
    <tr>
        <td colspan="3"><input type="submit"/></td>
    </tr>
</table>
</form>
<?php
if (@$result) {
    echo '<p> hasilnya adalah ' . $result;
}
?>
</body>
</html>