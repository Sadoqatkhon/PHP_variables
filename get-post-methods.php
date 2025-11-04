<?php
    //-------------------------------------------------
    //$_GET, $_POST = special variables used to collect data from an HTML form
    //                  data is sent to the file in the acrion attribute of <form>
    //                  <form action = "some_file.php" method = "get"


    //$_GET  =  data is appended to the url
    //          NOT SECURE
    //          char limit
    //          Bookmark is possible w/ values
    //          GET request can be cashed
    //          Better for a search page

    //$_POST =  Data is packaged inside  the body of the HHTP request
    //          MORE SECURE
    //          No data limit
    //          Cannot bookmark
    //          GET request are not cashed
    //          Better for submitting credentials
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="get-post-methods.php" method ="post">
        <label for="">username:</label><br>
        <input type="text" name = "username"> <br>

        <label for="">password:</label><br>
        <input type="password" name = "password"> <br>

        <input type="submit" value = "Log in" > 
    </form> 


    <!-- <form action="get-post-methods.php" method = "post">
        <label for=""> quantity:</label><br>
        <input type="text"  name = "quantity">

        <input type="submit" value = "total" > 

    </form> -->
    
</body>
</html>

<?php
   
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";

    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $quantity * $price;

    // echo "You have ordered {$quantity} x {$item}s <br> ";
    // echo "Your total is {$total}";


   ?>