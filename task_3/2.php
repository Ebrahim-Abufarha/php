<!-- 1.	Write a PHP script to check if the inserted number is a prime number 

Sample Input:  3
Expected Output: 3 is a prime number  -->


<?php
function isPrime($number) {
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

$input = 3;

if (isPrime($input)) {
    echo "$input is a prime number" , "<br>";
} else {
    echo "$input is not a prime number" , "<br>";
}
?>




<!-- 2.	Write a PHP script to reverse a string 

Sample Input:  remove
Expected Output: evomer -->
<?php 
$word = "hello";
function reverseString($word) {
global $word;
    echo strrev($word), "<br>"; 
}
reverseString($word) ;


?>







<!-- 3.	 Write a PHP script to check if the all string characters are lower cases

Sample Input:  remove
Expected Output: Your String is Ok  -->
<?php 
$word1 = "Word";
function check(){
global $word1;

if ($word1 ==strtolower($word1)){
echo "Your String is Ok" , "<br>";
}else{
    echo "Your String is not Ok" , "<br>";
}
}
check()

?>






<!-- 4.	Write a PHP function to swap to variables?

Sample Input:  x = 12     y= 10
Expected Output: y=12   x=10  -->
<?php 
$x = 5;
$y = 2;
function swaap(){
global $x;
global $y;
$temp = $x;
$x = $y;
$y = $temp; 
echo "x = ",$x . "  y = "  , $y , "<br>"; 


}
swaap()

?>










<!-- 5.	Write a PHP function to swap to variables?

Sample Input:  x = 12     y= 10
Expected Output: y=12   x=10  -->







<!-- 6.	Write a PHP function to check if a number is an Armstrong number or not ?
**Armstrong number is a number that is equal to the sum of cubes of its digits.

Sample Input:  407
Expected Output: 407 is Armstrong Number  -->



<?php
function isArmstrong($number) {
    $originalNumber = $number;
    
    $numDigits = strlen($number);
    
    $sum = 0;
    
    while ($number > 0) {
        $digit = $number % 10;
        
        $sum += pow($digit, 3);
        
        $number = (int)($number / 10);
    }
    
    if ($sum == $originalNumber) {
        echo "$originalNumber is an Armstrong number", "<br>";
    } else {
        echo "$originalNumber is not an Armstrong number", "<br>";
    }
}

$isArmstrong = 407;
isArmstrong($isArmstrong);
?>




<!-- 7.	Write a PHP function that checks whether a passed string is a palindrome or not?
Sample Input:  Eva, can I see bees in a cave?
Expected Output: Yes it is a palindrome  -->


<?php
// دالة للتحقق مما إذا كانت السلسلة Palindrome أم لا
function checkPalindrome($string) {
    // تحويل السلسلة إلى أحرف صغيرة وإزالة الفراغات والفواصل
    $cleanedString = strtolower(preg_replace("/[^a-z0-9]/", "", $string));

    // عكس السلسلة
    $reversedString = strrev($cleanedString);

    // التحقق إذا كانت السلسلة الأصلية تساوي السلسلة العكسية
    if ($cleanedString == $reversedString) {
        echo "Yes it is a palindrome" , "<br>";
    } else {
        echo "No it is not a palindrome" , "<br>";
    }
}

// اختبار الدالة باستخدام الجملة
$input = "Eva, can I see bees in a cave?" ;
checkPalindrome($input);
?>






<!-- 8.	Write a PHP function to remove duplicates from an array ?

Sample Input:  

$array1 = array(2, 4, 7, 4, 8, 4);


Expected Output:

$array1 = array(2, 4, 7, 8); -->

<?php
$array1 = array(2, 4, 7, 4, 8, 4);

$array1 = array_unique($array1);


print_r($array1) ;
echo "<br>";
echo "(" . implode(", ", $array1) . ")";


?>


