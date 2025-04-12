<?php
echo "This line is written by conflict-1 branch";
?>
<?php
echo "This is logic from conflict-a branch";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
//add

    switch ($operation) {
		    //Div
             case 'div':
             echo "Result : " . ($num2 != 0 ? $num1 / $num2 : "Cannot divide by zero");
             break;
            case 'mul':
            echo "Result: " . ($num1 * $num2);
            break;
    }
}
?>
