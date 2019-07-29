<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    label {
        width: 170px;
        display: inline-block;
    }
</style>
<body>
<h1>Simple Calculator</h1>
<form method="post" action="result.php">
    <fieldset>
        <legend>Calculator</legend>
        <label>First operand:</label> <input type="number" name="firstNumber"><br>
        <label>Operator:</label>
        <select name="operator">
            <option value="addition">Addition</option>
            <option value="minus">Minus</option>
            <option value="multiple">Multiple</option>
            <option value="division">Division</option>
        </select><br>
        <label>Second Operand:</label>
        <input type="text" name="secondNumber"><br>
        <label></label><input type="submit" value="Calculate">
    </fieldset>
</form>
</body>
</html>
<?php
