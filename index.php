<?php


// greaterthen check

function getnumber($a, $b, $c) {

    // $a = $a1;
    // $b = $b1;
    // $c = $c1;

    if ( $a > $b && $a > $c)
    {
        echo "$a is greater than $b and $c";
    }
    elseif ($b > $a && $b > $c ) 
    {
        echo "$b is greater than $a and $c";
    }
    else
    {
        echo "$c is greater than $a and $b <br>";
    }
}
getnumber(100, 90, 500);


// login check

$userName = "testuser";
$userPass = "123456";

if($userName == "testuser"){
    if($userPass == "123456"){
        echo "login success";
    }else{
        echo "login Failed";
    }
}else{
    echo " Your name is not correct";
};

function checkuser ( $userName, $userPass){
    $userName = "testuser";
    $userPass = "123456";
    
    if ( $userName == "testuser"){
        if( $userPass == "123456"){
            echo "login success<br>";
        }else{
            echo "Login Failed<br>";
        }
    }else{
        echo " Your name is incorrect <br>";
    }
    
}
checkuser ("Fatema", "124563");


// odd & even number checker
function checknum ($num){
    if ($num % 2 == 0){
       echo " $num is even number.<br>";
    }else{
        echo " $num is a Odd number.<br>";
    }
}
checknum(50);
checknum(67);

// ternary operator

$num = 100;
echo $num % 2 == 0 ? "Even <br>"
: "Odd";


// switch check
$num = 40;
switch($num){
    case 40;
    echo " the number is even.<br>";
    case 45;
    echo "the number is odd <br>";
};


// Array

// 1.Index Array:

$num = [20, "test"];

echo "<pre>";
print_r($num[1]);
// var_dump($num);
echo "</pre>";

// 2.Associative array

$num = ["name" => "Fatema",
"age" => 24];

echo "<pre>";
print_r($num ["name"] . " = " . $num["age"]);
echo "</pre>";


// 3.Multidimensional arrays:



?>