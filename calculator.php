<?php
echo "This is from Beta branch";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
//add

    switch ($operation) {
            case 'mul':
            echo "Result: " . ($num1 * $num2);
            break;
    }
}
?>
