<!-- 1. Write a PHP script to see if the specified year is a leap year or not.

Sample Input: 2013

Sample Output: 'This year is not a leap year' -->

<?php

$year = 2019 ;
if($year %4 ==0 && $year %100 !==0){
    echo $year, "&nbsp", "This year is a leap year ", "<br>";
}else{
    echo $year  ,  "This year is not a leap year ", "<br>";
}



?>


<!----------------------------------------------------------------------------------------------------------------->


<!-- 2. Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.

Sample Input: 27
Sample Output: 'It is summertime!'

 -->
<?php
$season = 19;

if($season <20){
    echo "It is wintertime!","<br>";

}else {
    echo "It is summertime!","<br>";
}

?>


<!--------------------------------------------------------------------------------------------------------------------->


 <!-- 3. Write a PHP script to calculate the sum of the two integers. If the two values are the same, then

calculate the triple of their sum.

Sample Input: [firstInteger => 2, secondInteger => 2]

Sample Output: (2+2)*3=12

 -->

<?php 
$num1=5;
$num2=4;

function cal(){
global $num1;
global $num2;
if ($num1 == $num2){

$num3 = ($num1 + $num2)*3;

}else {
    $num3 = $num1 + $num2;
}



echo "the numbers not equal but the sum of this is ", $num3 ,"<br>";

}
cal();

?>




<!-------------------------------------------------------------------------------------------------------------->







<!-- 4. Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the

return their sum otherwise return false

Sample Input: [firstInteger => 10, secondinteger => 10]

Sample Output: 'false' -->

<?php 

$num4 = 20;
$num5 = 10;
$sum1 = $num4 + $num5 ; 
if ($sum1 == 30){
echo "True" ,"<br>";
}else {
    echo "false" ,"<br>";
}

?>


<!-------------------------------------------------------------------------------------->







<!-- 5. Write in PHP script to check if the given positive number is a multiple of 3.

Sample Input: number = 20

Sample Output: 'false 
orange

Coding Academy

powered by Simplon
-->
<?php 
$num6 = 3000;
if($num6 %3 == 0 && $num6 > 0){
    echo "true","<br>";


}else {
    echo "fulse","<br>";
}




?>




<!--------------------------------------------------------------------------------------------->





<!-- 6. Write a PHP script to check if the integer value is in the range of [20-50] inclusive.

Sample Input: number = 50

Sample Output: 'true'
 -->
<?php 

$num7 = 28;

if($num7 >= 20 && $num7 <=50){
    echo "true","<br>";
}else {
    echo "fulse","<br>";
}


?>




<!------------------------------------------------------------------------------->





 <!-- 
7. Write PHP script to find the largest number between the three integers

Sample Input: [1, 5, 9]

Sample Output: 9
 -->
<!--  -->
<?php 
$num8 = [1, 5, 9,5,8,50,20,40,1];

$big = $num8[0]; 
for ($i = 1; $i < count($num8); $i++) { 
    if ($big < $num8[$i]) {
        $big = $num8[$i];
    }
}
echo  $big , "<br>"; 
?>






<!----------------------------------------------------------------------->






 <!-- 8. Write PHP script to calculate the monthly electricity bill according to these rules

a. For first 50 units - 2.50 JOD/Unit

b. For next 100 units - 5.00 JOD/Unit

c. For next 100 units - 6.20 JOD/Unit

d. For units above 250-7.50 JOD/Unit
 -->

<?php 

$units =250;
$price;
if($units <=50){
    $price = 2.5;

}elseif($units <=150){
    $price = 5;

}elseif($units <=250){
    $price = 6.2;

}else{
    $price = 7.5;

}
$sum2 = $units * $price;
echo $sum2 ,"<br>";

?>








<!----------------------------------------------------------------------------------->





 <!-- 9. Write php script to make a calculator, the calculator should contain the four main operations

e. Addition

f. Subtraction

g. Multiplication

h. Division -->

<?php 
$num9 = 5;
$num10 = 5;
$sign= "/";

function ma(){
    global $sign;
    global $num9;
    global $num10;
if($sign == "+"){
    $sum3= $num9 + $num10 ;


}elseif($sign == "-"){
    $sum3= $num9 - $num10 ;

}elseif($sign == "/"){
    $sum3= $num9 / $num10 ;

}elseif($sign == "*"){
    $sum3= $num9 * $num10 ;

}

    echo $sum3 , "<br>";

}
ma();

?>





<!----------------------------------------------------------------------------->








<!-- 10. Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

Sample Input: 15

Sample Output: 'is no eligible to vote' -->
<?php 
$num11 = 15;

if($num11 >=18){

    echo 'is  eligible to vote', "<br>";


}else {
    echo 'is no eligible to vote', "<br>";
}

?>


<!------------------------------------------------------------------>





<!-- 11. Write php script to check whether a number is positive, negative or zero

Sample Input: -60

Sample Output: 'Negative' -->

<?php 

$num12= -5;

if($num12 == 0){
    echo "the number is zero" , "<br>";
}elseif($num12 > 0 ){
    echo "the number is positive" , "<br>";

}elseif($num12 < 0 ){
    echo "the number is negative" , "<br>";

}


?>



<!------------------------------------------------------------------>


<!-- 12. Write a PHP to find the grade for the student, after calculating the average of his score in all the

subject

Sample Inputs: [60,86,95,63,55,74,79,62,50]

Sample Output: 'D -->



<?php 
$inputs =  [60,86,95,63,55,74,79,62,50];

$degree =array_sum($inputs) / count($inputs);
if($degree < 60){
    echo "your degree is "  , $degree , " your grade is F";
    
}elseif ($degree <= 70){

    echo "your degree is "  , $degree , " your grade is D";

}elseif ($degree <= 80){

    echo "your degree is "  , $degree , " your grade is C";

}elseif ($degree <= 90){

    echo "your degree is "  , $degree , " your grade is B";

}elseif ($degree <= 100) {
     echo "your degree is "  , $degree , " your grade is A";
}elseif ($degree > 100) {
    echo "this is not a degree";
}











?>







<!--  -->


















