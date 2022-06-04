<?php

 // printf();


$fname = "Isaac";
$lname = "Newton";
$mname = "Nothing";

printf('His Name is %3$s, %1s %2s', $fname, $lname, $mname);  //argument
echo"\n";


printf("The Binary equivalent of %d is %b", 12, 12 );
echo"\n";
printf('The Binary equivalent of %1$d is %1$b', 12 ); //same
echo"\n";






$n = 45.126;
printf("%.2f", $n);
echo"\n";


$n = 45.124;
printf("%.2f", $n);
echo"\n";


$n = 45.125;
printf("%.2f", $n);
echo"\n";




 // Decimal

$m = 123; //0123  [4 ghore dekhano]
$n = 35; //0023

printf("%04d \n", $m);
printf("%05d \n", $n); // 5 ghore dekhano holo [00035]



$m = 123.3567585; //0123  [4 ghore dekhano]
$n = 35.153354; //0023

printf("%07.2f \n", $m); // 4 ghore dekhano [0123]
printf("%08.2f \n", $n); // 5 ghore dekhano holo [00035]






// sprintf();

 
$fname = "Isaac";
$lname = "Newton";

$output = sprintf('His Name is %s %s', $fname, $lname);  //sprintf return kore
echo strtoupper ($output);
echo"\n";





// Next chapter (12) logic;






$n = 13;
if($n % 2 == 0){  // even odd number bar korte ($n % 2 = 0 vagsesh 0 hoy) method use korte hoy
    echo"$n is an even number";
}else{
    echo"$n is an odd number";
}

echo "\n";



 // Logical operator


 // ==, !=, >, <, >=, <=



 $alam = 120;
 $rahim = 120;

 if ($alam == $rahim) {
     echo "Alam and Rahim has same amount of money";
 } elseif($alam > $rahim) {
    echo "Alam has more money as Rahim";
 }elseif($alam < $rahim) {
    echo "Alam has less money as Rahim";
 }
 
 echo "\n";

 



$age = 13;

if ($age >= 13 && $age <= 19) {
    echo"This person is teenager";
} else {
    echo"This person is not teenager";
}

echo "\n";



$food = "salmon";

if ("tuna" == $food || "salmon" == $food) { //double equal hole static content("tuna") shurute rakhate hobe, shurute rakhle double equal jodi vul hoy amra error gula dekhte parbo.
    echo "{$food} has Vitamin D";
}elseif("apple" == $food) {
    echo "Apple dodsen't contain Vitamin D";
} else {
    echo "We don't know if {$food} contains Vitamin D";
}

echo "\n";



// 1 - divisible by 4 ?  1800 //1800 jodi 4, 100, 400 diye vag jai tahole eti leap year shonkha
// 1 - divisible by 100 ?
// 1 - divisible by 400 ?



$year = 1900;

if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
    echo "{$year} is leap year";
} elseif ($year % 4 == 0 && $year %100 == 0) {
    echo "{$year} is not leap year";
} elseif($year % 4 == 0) {
    echo "{$year} is leap year";
} else {
    echo "{$year} is not leap year";
}

echo "\n";



// same as avobe
if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
    echo "{$year} is leap year";
} else {
    echo "{$year} is not leap year";
}

echo "\n";

// year 200
// if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) 
// if(true && true){  // (false || true) 4 diye vag jai(true), porer ta false or true[convert hoye gelo true]
//    echo "{$year} is leap year";
//}  else {
//    echo "{$year} is not leap year";
//}

$condition1 = true;
$condition2 = false;
$condition3 = true;

if ($condition1 && $condition2 && $condition3) {
    echo "Hello";
} elseif($condition1 && $condition2) {
    echo "No 1";
} elseif($condition1) {
    echo "No 2";
} else{
    echo "No 3";
}

echo "\n";


// ternary operator

$n = 12;

if (12 == $n) {
    echo"Twelve";
} elseif(10 == $n){
    echo"Ten";
} else {
    echo"A Number";
}

echo "\n";



// as same with ternary operator
// $numberInword = 12 == $n ? "Twelve" : "A Number";
$numberInword = 12 == $n ? "Twelve" : 10 == $n ? "Ten" : "A Number";
echo $numberInword;

echo "\n";




if ($n % 2 == 0) {
    echo "Even Number";
} else {
    echo "Odd Number";
}

echo "\n";


// as same with ternary operator
$result = $n % 2 == 0 ? "{$n} is a Even Number" : "{$n} is a Odd Number";
echo $result;

echo "\n";





// Switch Case

$n = 12;
$r = ($n % 2);

switch ($r) {
    case 0:
        echo "{$n} is a Even Number";
        break;
    default:
        echo "{$n} is a Odd Number";
        
}

echo "\n";




// Operator Preceence

// $e = (true || false); // true (piority high)
// $f = false or true; // ($f = false) or true // $f = false [ager man ta niye nei]


$e = (true && false); // false
$f = true and false; // $f = true


var_dump($e, $f);

echo "\n";




// While loop e ++


$i = 0;
while($i<5){
    echo $i;
    echo PHP_EOL;
    $i++;
}

echo "age j value ta while er kase chole jabe, tarpore + oeration hobe.\n";

$j = 0;
while($j++ <5){  // age j value ta while er kase chole jabe, tarpore + oeration hobe.
    echo $j;
    echo PHP_EOL;
}

echo "age j operation hoye jabe, tarpore value ta whiler kase return jabe\n";

$j = 0;
while(++$j <5){ // age j operation hoye jabe, tarpore value ta whiler kase return jabe
    echo $j;
    echo PHP_EOL;
}





// Looper majhe continue an break


echo "Looper majhe break\n";

for($i = 20; $i < 50; $i++){
    if($i % 13 == 0){ // 13 diye vag hoye beriye gelo(break).
        echo $i;
        echo PHP_EOL;
        break;
    }
}


echo "Looper majhe continue \n";

for($i = 20; $i < 33; $i++){
    if($i < 27){ // continue directly looper baire jeye operation chalabe
        continue;
    }
    echo $i; // eita ar dekhabe na.
    echo PHP_EOL;
}



// Spaceshiip operator

$x = 7;
$y = 5;

function greaterOrSmaller($x, $y){
    if ($x > $y){
        return 1;
    }elseif($x == $y) {
        return 0;
    }else{
        return -1;
    }
    
}

if (greaterOrSmaller($x, $y) == 1) {
    echo "{$x} is greater then {$y}";
}elseif(greaterOrSmaller($x, $y) == 0) {
    echo "{$x} is equal to {$y}";
}elseif(greaterOrSmaller($x, $y) == -1) {
    echo "{$x} is smaller then {$y}";
}

echo"\n";
// as avobe the same code with PHP 7
// with spacesheep operator 7<=>5

$result = $x<=>$y;
if($result == 1) {
    echo "{$x} is greater then {$y}";
}elseif($result == 0) {
    echo "{$x} is equal to {$y}";
}elseif($result == -1) {
    echo "{$x} is smaller then {$y}";
}
// if use spacesheep operator, no need to call function as acove





echo"\n";
// Nullcollase operaor

$default_lat = 14.43;
$efault_lang = 34.43;

$user_lat;

$lat = isset($user_lat) ? $user_lat : $default_lat ; //turnary operation
echo $lat." Turnary operation";

echo"\n";
$lat = $user_lat ?? $default_lat;  // Null coalesce operation PHP7
echo $lat." Null coalesce operation";

echo"\n";
if(isset($user_lat)){  //ifelse operation
    $lat = $user_lat;
}else{
    $lat = $default_lat;
}
echo $lat." ifelse operation";
echo"\n";







/**
 * Determines if the argument is even or odd
*/


// Function

function isEven($n){  // $n holo parameter
    if ($n % 2 == 0) {
        return true; // hole eita show korbe
    }
    return false; // na hole shorashori eita te chole ashbe, else call korar dorkar nei.
}

$x = 13;

if (isEven($x)) { // $x holo argument
    echo "{$x} is a odd number";
} else {
    echo "{$x} is a even number";
}
echo"\n";





/**
 * Default value in a function
*/

function serve($typeOfFood ="Coffe", $numberOfItem = "2 cup"){
    echo "{$numberOfItem} of {$typeOfFood} has/have been served.";
}
serve("Salad", "2 plates");
echo"\n";





/**
 * Unlimited argument accept in a function
*/

function sum($x, $y, int ...$numbers):int { 
    $result = 0;
    for($i=0;$i<count($numbers);$i++){
       $result += $numbers[$i]; 
    }
    return $result;
}
echo sum(5,6,7,8);

echo"\n";






/**
 *  Recursive function  
 * // and pura jinish ta hosse Recursion 
 * // Recursive function holo je  nijei nijeke call kore
*/

function printN($i){
    if($i>=10){
        return;
    }

    echo $i."\n";

    $i++;

    printN($i); //Recursive
}
printN(1);


echo"select kore dite hole \n";


function printNumber($start, $end, $stepping=1){
    if($start>$end){
        return;
    }
    echo $start."\n";
    // $start ++;
    $start += $stepping;
    printNumber($start, $end, $stepping);
}
printNumber(3, 30, 5);






/**
 * Fibonacci with Recursive function  
*/

function fibonacci($old, $new, $end){ //$start static kore diyesi
    static $start; //static veriable er maan ei function e ar poriborton hobena... 
    $start = $start ?? 1;

    if($start>$end){
        return;
    }
    $start++;

    echo $old." ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacci($old, $new, $end); // nejeder call korlo
}
fibonacci(0,1,15); //start static kore diyesi... 

echo "\n";





/**
 * variable scope   
*/

// $name = "Earth"; // global scope

// function doSomethings(){
//     global $name;
//     echo $name;

//     //echo $GLOBALS["name"]; //super global
// }
// doSomethings();


// function doSomethings(){
//     global $name;
//     $name = "Earth"; // local scope
// }
// doSomethings();
// echo $name;


// function doSomethings(){
//     $name = "Earth"; // local scope
//     echo $name;
// }
// doSomethings();


// function doSomethings(){
//     $i = $i ?? 0;
//     $i++;
//     echo $i;
//     echo "\n";
// }
// doSomethings();
// doSomethings();
// doSomethings();

function doSomethings(){
    static $i; // static scope
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}
doSomethings();
doSomethings();
doSomethings();


echo "\n";






/**
 * Factorial with Recursive function
*/


function factorial($n){
    if($n <= 1){
        return 1;
    }
    return $n * factorial($n - 1);  // 5 * 4 * 3 * 2 * 1
}
echo factorial(3);  

echo "\n";





/**
 * Array
*/

// $students = array(
//     "rahim", // offset 0
//     "karim",
//     "746",
//     "monir", // offset 3
// );

// $students = [
//     "rahim", // offset 0
//     "karim",
//     "746",
//     "monir", // offset 3
// ];

// $n = count($students);  // count korle hoy 4

// for($i = 0; $i < $n; $i++){ 
//     echo $students[$i]."\n";
// }
// array offset alltime 0 theke start
// for($i = $n-1; $i >= 0; $i--){
//     echo $students[$i]."\n";
// }

echo "\n";




/**
 * Array Menipulesion
*/

$students = [
    "rahim", // offset 0
    "karim",
    "746",
    "monir", // offset 3
];

$students[2] = "shafik";

// $student = array_pop($students); // last element ta remove kore dei,
// echo $student. "\n";
$student = array_pop($students); // last element ta remove kore dei,
$student = array_shift($students); // fast element ta remove kore dei,

// $n = count($students);  // count korle hoy 4
// for($i = 0; $i < $n; $i++){ 
//     echo $students[$i]."\n";
// }

// data entry korte hole
$students[] = "janmal"; // data entry hove
array_push($students, "KAMAL"); // evabeo kora jai

array_unshift($students, "salam"); // shurute enty hobe


$n = count($students);  // count korle hoy 4
for($i = 0; $i < $n; $i++){ 
    echo $students[$i]."\n";
}

echo "\n";
