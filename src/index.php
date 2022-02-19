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
?>
 
