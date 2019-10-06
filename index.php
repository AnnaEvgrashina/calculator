<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
<form action="/result.php">
    <input required type="number" name="x1">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input required type="number" name="x2">
    <input type="submit" value="Посчитать">
</form>
</body>
</html>
