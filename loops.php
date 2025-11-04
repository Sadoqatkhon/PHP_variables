
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops Practice</title>
</head>
<body>



    <!-- ----------------------for loop------------------------------ -->
    <form action="loops.php" method = "post"> 
        <label for=""> Enter a word to repeat</label><br>
        <input type="text" name = "word" ><br><br>

        <label for=""> Enter a number to count down from </label><br>
        <input type="text" name = "counter"><br>

        <input type="submit" value="start" >
    </form>

    <!-- -------------------while loop------------------ -->
    <!-- <form action="loops.php"  method = "post">
    <input type="submit" name = "stop"  value="Stop!">
    </form> -->

    
</body>
</html>

<?php
    //-----------------for loop------------------------
  
    $counter = $_POST['counter'];
    $word = $_POST['word'];
    for($i = 1; $i <= $counter; $i++) {
        echo $i . "-" .$word . "<br>";
    }

    //-----------------while loop-------------------------


    // $seconds = 0;
    // $running = true;

    // while ($running) {

    //     if(isset($_POST["stop"])) {
    //         $running = false;
    //     }
    //     else {
    //     //wait a second
    //     $seconds++;
    //     echo $seconds."<br>";
    //     }
    // }


?>