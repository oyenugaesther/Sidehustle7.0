<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- DB CONNECTION -->
    <?php
        include('header.php');

        if ($connect_db){
            echo "Connection was Successful";
        }else{
            echo "Connection Error";
        }
    ?>

    <!-- FUNCTION TO MULTIPLY 3 NUMBERS -->
    <h3> The Product of the three numbers is
    <?php
        function product($num1, $num2, $num3 = 5){
            $answer = $num1 * $num2 * $num3;
            return $answer;
        }
        echo product(3, 2);

    ?> 
    </h3>
</body>
</html>