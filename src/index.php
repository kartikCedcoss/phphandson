<?php 
echo
 "Hello World";
 ?>

<?php

echo "This is PHP";
?> 
#Write the correct opening tag and close tag for PHP scripts.


<?echo 

//This is a single-line comment //ingle-line comments in PHP can be written using two different prefixes, write one of them.



/*
 This is a
multi-line
comment
*/ 
echo "Hello World"
;//Statements in PHP have to end with a special character, which one?

$txt
 = "
Hello
";//Create a variable named txt and assign the value "Hello".


$x
 = 5;
$y
 = 7;
echo
 
$x
 + 
$y
; //Create one variable named x, and one variable named y, then use the echo statement to output the sum of x and y.
echo 
strlen
("Hello World!");//Get the length of the string "Hello World!".
echo 
strrev
("Hello World!"); //Reverse the string "Hello World!"
$oldtxt = "Hello World!";
$newtxt = 
str_replace
(
"World"
, 
"Dolly"
, 
$oldtxt
); //Replace the word "World" with the word "Dolly".
echo 10 
*
 5;//Multiply 10 with 5, and output the result.
 echo 10 
 /
  2; //Divide 10 by 2, and output the result

  var_dump($a 
==
 $b);//Use the correct comparison operator to check if $a is equal to $b.
 var_dump($a 
!=
 $b);//Use the correct comparison operator to check if $a is NOT equal to $b.
 $a = 50;
$b = 10;
if
 
($a
 > 
$b)
 {
  echo "Hello World";
} // Output "Hello World" if $a is greater than $b.

$a = 50;
$b = 10;
if
 
($a
 
!=
 
$b)
 {
  echo "Hello World";
}//Output "Hello World" if $a is NOT equal to $b.
$a = 50;
$b = 10;
if
 ($a == $b) {
  echo "Yes";
} 
else
 {
  echo "No";
}//Output "Yes" if $a is equal to $b, otherwise output "No".

$a = 50;
$b = 10;
if
 ($a == $b) {
  echo "1";
} 
elseif
 ($a > $b) {
  echo "2";
} 
else
 {
  echo "3";
}//Output "1" if $a is equal to $b, print "2" if $a is greater than $b, otherwise output "3".


switch
 ($color) {
  
case
 "red":
    echo "Hello";
    break;
  
case
 "green":
    echo "Welcome";
    break;
}//Create a switch statement that will output "Hello" if $color is "red", and "welcome" if $color is "green".
switch ($color) {
    case "red":
      echo "Hello";
      break;
    case "green":
      echo "Welcome";
      break;
    
  default:
  
      echo "Neither";
  } //Add a section that will output "Neither" if $color is neither "red" nor "green"
  $i = 1; 

  while
   ($i < 6) 
  {
  
    echo $i;
    $i++;
  }//Output $i as long as $i is less than 6.
  $i = 1; 

do
 {
    echo $i;
    $i++;
} 
while
 ($i < 6); //Output $i as long as $i is less than 6.


for
($i = 0; $i < 10; 
$i++
) {
 echo $i;
}//Create a loop that runs from 0 to 9.

$colors = array("red", "green", "blue", "yellow"); 

foreach
 ($colors 
as
 $x) {
  echo $x;
}// Loop through the items in the $colors array.


function myFunction()
 {
  echo "Hello World!";
}//Create a function named myFunction.

function myFunction() {
    echo "Hello World!";
  }
  
  myFunction()
  ;//Call (execute) a function named myFunction.

  function myFunction($fname, $lname) {
    echo 
  $fname
  ;
  }//Inside a function with two parameters, print the first parameter.

  function myFunction($fname, $lname) {
  
    return
     
    $lname
    ;
    }//Let the function return the second value.

    $fruits = array("Apple", "Banana", "Orange");
echo 
count($fruits)
;//Use the correct function to output the number of items in an array.

$fruits = array("Apple", "Banana", "Orange");
echo 
$fruits[1]
;//Output the second item in the $fruits array.
$age = array("Peter"
=>
"35", "Ben"
=>
"37", "Joe"
=>
"43");//Create an associative array containing the age of Peter, Ben and Joe.

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Ben is " . 
$age['Ben']
 . " years old.";//Here you see an associative array. Output "age" of Ben.


foreach
($age 
as
 $x 
=>
 $y) {
    echo "Key=" . 
$x
 . ", Value=" . 
$y
;
}//Loop through an associative array and output the key and the value.
  

?>
 
