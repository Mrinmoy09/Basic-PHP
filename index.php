<?php
    $name = "Mrinmoy Arnob";// global scope;
    $food = "Pizza and Burger"; // global scope
    // var_dump($food); 

   
    $x= 20;
    $y = 10;

    // Arithmetic Operators - '+' , '-' , '/' , '*' , '**', '%';
    $add = $x+ $y;
    $substraction = $x-$y;
    $divide = $x / $y;
    $multiplication = $x * $y;
    $modulas = $x % $y;
    $exponentiation = $x ** $y;

    
    
    echo"add - {$add} <br>";
    echo"substraction - {$substraction} <br>";
    echo"divide - {$divide} <br>";
    echo"multiplication - {$multiplication} <br>";
    echo"modulas - {$modulas} <br>";
    echo"exponentiation - {$exponentiation}<br>";
    
    


    //Assignment Operators - '=',  '+=' , "-=" , '*=' , '/='

    $x  -= $y;
    echo"{$x} <br>";


    //You can get the data type of ant object by using the var_dump() function

    //A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function
    
    // function info(){
    //     $userName = "John Doe"; // Local scope
    //     $age = 24; 
    //     $gpa = 3.12;
    //     $price = 9.12;
        
    //     // using global keyword can make a variable global and we can acess it outside the funtion
    //     global $name, $food;
    //     echo "Hello My name is {$name} and I like {$food}<br>";
    //     //A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function
    //     echo"Hello This is {$userName} and his age is {$age} and His GPA is {$gpa}<br>";
    //     echo"Price of the pizza is \${$price}<br>"; // \$ sign will print a dollar sign 
    // }

    // info();
   
    // function myTest() {
    //     static $x = 0;
    //     echo $x;
    //     $x++;
    //   }

    // myTest();
    // myTest();
    
    
?>







