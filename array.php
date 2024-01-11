<?php
 
//--------------Normal Array------------
 $array = ["abc" , 2,3,4];
//  echo $array[3];

 //----------Associative array---------

 $student = [
    'first_name'=>"Mrinmoy",
    'last_name'=>"Das",
    'id'=>162578
 ];

$studentId = $student['id'];

// echo $studentId;

//------------Multidimentioal Array-------------

$employee = [
    'first_name'=>"Mrinmoy",
    'last_name'=>"Das",
    'id'=>162578,
    'address' => [
        'city' => 'Dhaka',
        'zipcode'=>1200
    ],
    'contact' => [
        'country_prefix' => '880',
        'number' => '093024940'
    ]
 ];

 echo $employee['address']['city'];




?>