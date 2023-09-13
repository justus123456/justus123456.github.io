<?php 

 $string = 'This is the man who stole the car last week';
// // echo strlen($string);
// // echo strrev($string);

// // echo substr($string, 0,12);

// // $string = "1020299990002.about,kaka.shi.ksa.kkd.kkd.ski.(scoop).aKsJAJsSJsKoDiKKSlKA!$$&^^&**((%()&&";

// // echo str_shuffle($string);

// $newArray = explode(' ',$string);

// print_r($newArray)


 $array = array('michael', 'john', 'jude');
// array_pop($array);
// array_push($array, "Emmanuel");
 array_unshift($array, "daniel");

// array_shift($array);

// echo count($array);

//  print_r ($array);
// $array = array(34,54,67,89);
// echo max($array);
//  echo min($array);
// echo sort($array);
// echo rsort($array);
// print_r($array);

// echo implode('-',$array);
$num = 1;
// for ($i=0; $i < 20; $i++) { 
//     echo "<h2>he is number". $num++."</h2><br>";
// }

// while($num < 9) {
//     echo "<h2>he is number". $num++."</h2><br>";
// }

// foreach ($array as $key => $value) {
//     echo "<h2>".$value." is number".$num++."</h2><br>";
// }
$array3 = array('mike', 'sunny', 'peter');
function start($myArray,$myNum){
    foreach ($myArray as $key => $value) {
        echo "<h2>".$value." is number".$myNum++."</h2><br>";
    }
}
start($array,$num);
start($array3,$num);

$flop = array('john@gmail.com', 'francis@gmail.com', 'paulina@gmail.com', 'isaac@gmail.com', 'veronica@gmail.com');

function sat($myflop){
    foreach ($myflop as $key => $value) {
        echo "<h2>"." good morning ".$value."<br>";
    }
}


sat($flop);

//  $princ = 100;
//  $rate = 200;
//  $time = 2;
 

//  $simple = ($princ * $rate * $time) / 100;

//  echo "simple interest is =". $simple;
 



 

 function joke(){
    $princ = 100;
    $rate = 2;
    $time = 2;   
    $simple = ($princ * $rate * $time) / 100;
    echo "simple interest is =". $simple;
 }

 joke();


?>