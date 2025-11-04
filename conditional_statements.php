<?php
    // if-else statement

    $age = 21;

    if($age >=18)   {
        echo "You may enter this site";
    }
    elseif ($age <= 0){
        echo "it's not a valid age";
    }
    elseif ($age >= 100){
        echo "You are pretty old";
    }

    else{
        echo "You must be 18+ to enter";
    }

    // --------------------------------------------
    // exercise
    
    $hours = 48;
    $rate = 15;
    $weekly_pay = null;

    if($hours <= 0) {
        $weekly_pay = 0;
    }
    elseif($hours <= 40)  {
        $weekly_pay =  $hours * $rate;
    }
    else{
        $weekly_pay = ($hours * $rate) + (($hours - 40) * ($rate * 1.5));
    }
    echo "You made {$weekly_pay} made this week";

    // logical operators
    // && || !

    // switch statement

    $grade = "B";

    switch ($grade) {
        case "A":
            echo "Excellent";
            break;
        case "B":
            echo "Good job";
            break;
        case "C":
            echo "You did okay";
            break;
        case "D":
            echo "You did poorly";
            break;
        case "F":
            echo "You failed";
            break;
        default:
            echo "It's not a valid grade";
            break;

        }
?>









