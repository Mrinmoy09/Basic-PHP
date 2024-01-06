<?php
    $name = "Mrinmoy Arnob";// global scope;
    $food = "Pizza and Burger"; // global scope
    // var_dump($food); 

    $quantity = 3;
    $price = 4.99;


    $total;
    $total = $price*$quantity;

    echo"You have ordered {$quantity}X Pizzas <br>";
    echo"Total cost is \${$total}";

    //You can get the data type of ant object by using the var_dump() function

    //A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function
    
    function info(){
        $userName = "John Doe"; // Local scope
        $age = 24; 
        $gpa = 3.12;
        $price = 9.12;
        
        // using global keyword can make a variable global and we can acess it outside the funtion
        global $name, $food;
        echo "Hello My name is {$name} and I like {$food}<br>";
        //A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function
        echo"Hello This is {$userName} and his age is {$age} and His GPA is {$gpa}<br>";
        echo"Price of the pizza is \${$price}<br>"; // \$ sign will print a dollar sign 
    }

    info();
   
    function myTest() {
        static $x = 0;
        echo $x;
        $x++;
      }

    myTest();
    myTest();
    
    
?>







