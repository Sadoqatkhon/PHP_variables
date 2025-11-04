<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button>
        Started Learning PHP
    </button>
    
</body>
</html> 

<?php
    
    $name = "Lily Smith";
    $food = "Pasta";
    $email = "fake123@gmail.com";

    $age = 26;
    $users = 3;
    $quantity = 4;


    $gpa = 4.8;
    $price = 5.99;
    $tax_rate = 6.4;

    $online = true;
    $student = false;

    echo "<h3> Hello {$name} </h3> ";
    echo "My favourite food is {$food} <br>  ";
    echo "My email is {$email}  <br>";

    echo "I am {$age} <br> ";
    echo " There are {$users} users online <br>";
    echo "I should buy {$quantity} items <br>";

    echo "I have GPA of {$gpa} <br>";
    echo "{$food} costs \${$price} <br>";
    echo "The sales tax rate is : {$tax_rate} % <br>";

    echo "Online status: {$online} <br>";

    $total = null;
    echo "You have ordered {$quantity}x {$food}s";
    $total = $quantity
    
    //----------------------------------
    //Operatiors
    //Arithmetic operators
    // + - * / ** % 

    //increment/decremenet operator
    //++ -- += -=

    //operator precedence
    //()
    // ** 
    // * / % 
    // + -
?>