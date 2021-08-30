<?php
    // function testing(&$string){
    //     $string .= " and some thing extra.";
    // }
    // $str = "this is a string";
    // testing($str);
    // echo($str);

    // function first($num){
    //     $num += 5;
    // }

    // function second(&$num){
    //     $num += 7;
    // }
    // $number = 10;
    // first($number);
    // echo " Original value is $number .<br>";

    // second($number);
    // echo " Original value is $number .<br>";

    // function won($name){
    //     echo "Hello $name";
    // }
    // $func="won";
    // $func("khanh");

   $sayHello = function($name){
        echo "Hello $name";
    };

    $sayHello("David Teo");

?>