<h1>Result: </h1>
<?php
$number1 = $_POST['firstNumber'];
$number2 = $_POST['secondNumber'];


function calculate($number1, $number2)
{
    try {
        if ($_POST['operator'] == 'addition') {
            $result = $number1 + $number2;
            echo $number1 . "+" . $number2 . " = " . $result;
        } else if ($_POST['operator'] == 'minus') {
            $result = $number1 - $number2;
            echo $number1 . "-" . $number2 . " = " . $result;
        } else if ($_POST['operator'] == 'multiple') {
            $result = $number1 * $number2;
            echo $number1 . "*" . $number2 . " = " . $result;
        } else if ($_POST['operator'] == 'division') {
            $result = $number1 / $number2;
            echo $number1 . "/" . $number2 . " = " . $result;
        }

    } catch (Exception $e) {
        echo "Error!";
    }

}

calculate($number1, $number2);
?>