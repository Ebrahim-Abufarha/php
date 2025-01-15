<!-- 1.	Write a PHP script to: 

a.	Convert the entered string to uppercase.
b.	Convert the entered string to lowercase.
c.	Make the first letter of the string uppercase.
d.	Make the first letter of each word capitalized.
 -->


<?php
// Input string
$inputString = "hello world! welcome to php.";


echo strtoupper($inputString), "<br>";


echo strtolower($inputString) ,"<br>";

echo ucfirst($inputString) ,"<br>";

echo ucwords($inputString), "<br>";
?>
<!----------------------------------------------------------------------------------------------------------------------------->

  <!-- 2.	Write a PHP script splitting the following numeric string to be a date format. 

Sample Output: '085119'
Expected Output: 08:51:19
 -->

 <?php
$numericString = "085119";

$formattedTime = substr($numericString, 0, 2) . ":" . 
                 substr($numericString, 2, 2) . ":" . 
                 substr($numericString, 4, 2);

echo $formattedTime, "<br>";
?>

<!----------------------------------------------------------------------------------------------------------------------------->



<!-- 3.	Write a PHP script to check whether the sentence contains a specific word.

Sample Output: ‘I am a full stack developer at orange coding academy’
Sample Word: ‘Orange’
Expected Output: ‘Word Found!
 -->

 <?php
$sentence = "I am a full stack developer at orange coding academy";
$word = "Orange";

if (stripos($sentence, $word) == true) {
    echo "Word Found! ", "<br>";
} else {
    echo "Word Not Found!", "<br>";
}
?>


<!----------------------------------------------------------------------------------------------------------------------------->


<!-- 4.	Write a PHP script to extract the file name from the URL. 

Sample Output: 'www.orange.com/index.php'
Expected Output: 'index.php'
 -->
 <?php
$url = "www.orange.com/index.php";


echo basename($url), "<br>";
?>


<!----------------------------------------------------------------------------------------------------------------------------->


<!-- 5.	Write a PHP script to extract the username from the following email address. 

Sample Output: 'info@orange.com'
Expected Output: 'info'
 -->
 <?php
$email = "info@orange.com";

$username = strstr($email, '@', true);

echo  $username, "<br>";

?>

<!----------------------------------------------------------------------------------------------------------------------------->


<!-- 6.	Write a PHP script to get the last three characters from the string. 

Sample Output: 'info@orange.com'
Expected Output: 'com'
 -->
 <?php
$string = "info@orange.com";

echo substr($string, -3), "<br>";
?>

<!----------------------------------------------------------------------------------------------------------------------------->

<!--  
7.	7.	Write a PHP script to generate simple random passwords [do not use rand () function] from a given string. 

Sample Output: '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'

Expected Output: 254ABCc or h242sfeDAFEe32  -> random number 

  -->
  <?php
// Given string to generate random password from
$characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

// Function to generate a random password
function generateRandomPassword($length) {
    global $characters;
    $password = '';
    $charactersLength = strlen($characters);
    
    // Loop to generate the random password
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = random_int(0, $charactersLength - 1);  // Using random_int instead of rand
        $password .= $characters[$randomIndex];
    }
    
    return $password;
}

// Generate a random password of desired length (for example, 16 characters)
$password = generateRandomPassword(16);

// Output the random password
echo "Random Password: " . $password, "<br>";
?>



<!--


-->

 <?php
// function generateRandomPassword($length = 8) {
//     $characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
//     $password = '';
    
//     $charactersLength = strlen($characters);
    
//     for ($i = 0; $i < $length; $i++) {
//         $index = mt_rand(0, $charactersLength - 1);
//         $password .= $characters[$index];
//     }
    
//     return $password;
// }

// echo "Random Password: " . generateRandomPassword(12);
?>
 






<!----------------------------------------------------------------------------------------------------------------------------->

  <!-- 8.	Write a PHP script to replace the first word of the sentence with another word.

Sample Output: 'That new trainee is so genius.'
Sample Word: 'Our'
Expected Result: the new trainee is so genius.
 -->
 <?php
// Input sentence and replacement word
$sentence = "That new trainee is so genius.";
$replacementWord = "Our";

// Replace the first word with the replacement word
$modifiedSentence = preg_replace('/^\S+/', $replacementWord, $sentence);

// Output the modified sentence
echo  $modifiedSentence, "<br>";
?>

<!----------------------------------------------------------------------------------------------------------------------------->


<!-- 
9.	Write a PHP script to find the first character that is different between two strings. 

String1 : 'dragonball'
String2 : 'dragonboll'
Expected Result : First difference between two strings at position 7: "a" vs "o"
 -->
 <?php
$string1 = "dragonball";
$string2 = "dragonboll";

$length = min(strlen($string1), strlen($string2)); 
for ($i = 0; $i < $length; $i++) {
    if ($string1[$i] !== $string2[$i]) {
        echo "First difference between two strings at position " . ($i + 1) . ": \"" . $string1[$i] . "\" vs \"" . $string2[$i] . "\"", "<br>";
        break;  
    }
}
?>

<!----------------------------------------------------------------------------------------------------------------------------->

<!-- 10.	Write a PHP script to put a string in an array, use the (var_dump) to view the array. 

Sample Output: "Twinkle, twinkle, little star."
Expected Result: array (4) {[0] => string (30) "Twinkle, " [1] => string (26) " twinkle," [2] => string (27) twinkle" [3] => string (26) " little star.”}
 -->
 <?php
$string = "Twinkle, twinkle, little star.";

$array = preg_split('/(?<=,|\s)/', $string);

var_dump($array);
?>
<!----------------------------------------------------------------------------------------------------------------------------->





<!-- 11.	Write a PHP script to print the next letter of the inputted letter. 

Sample Character: 'a'
Expected Output: 'b'
Sample Character: 'z'
Expected Output: 'a'
 -->
 <?php
$char = 'a';

$asciiValue = ord($char);

// Check if the character is 'z' or 'Z' to wrap around to 'a' or 'A'
if ($char == 'z') {
    $nextChar = 'a';
} elseif ($char == 'Z') {
    $nextChar = 'A';
} else {
    // Increment the ASCII value by 1 to get the next letter
    $nextChar = chr($asciiValue + 1);
}

// Output the next character
echo "<br>" , "Next letter after '{$char}' is '{$nextChar}'", "<br>";
?>

<!----------------------------------------------------------------------------------------------------------------------------->


<!--  
 
12.	Write a PHP script to insert a string at the specified position in a given string. 

Original String: 'The brown fox'
Insert 'quick' between 'The' and 'brown'.
Expected Output: 'The quick brown fox'
18. Write a PHP script to get the first word of a sentence. 
Original String: 'The quick brown fox'
Expected Output: 'The'
 -->
 <?php
// Original string
$originalString = 'The brown fox';

// The string to be inserted
$insertString = 'quick';

// Position to insert the string
$position = 4;  // After "The " (position 4)

// Insert the string at the specified position
$modifiedString = substr_replace($originalString, $insertString . ' ', $position, 0);

// Output the modified string
echo "Modified String: " . $modifiedString, "<br>";



$originalString = 'The quick brown fox';

// Extract the first word
$firstWord = strtok($originalString, ' ');

// Output the first word
echo "First Word: " . $firstWord , "<br>";
?>

<!----------------------------------------------------------------------------------------------------------------------------->


<!-- 
13.	Write a PHP script to remove zeroes from the given number. 

Original String: '0000657022.24'
Expected Output: '65722.24'
 -->
 <?php
$originalNumber = '0000657022.24';



echo str_replace('0', '', $originalNumber), "<br>";
?>

<!----------------------------------------------------------------------------------------------------------------------------->

<!-- 14.	Write a PHP script to remove part of a string. 

Original String: 'The quick brown fox jumps over the lazy dog'
Remove 'fox' from the above string.
Expected Output: 'The quick brown jumps over the lazy dog'
 -->
 <?php
$originalString = 'The quick brown fox jumps over the lazy dog';

$modifiedString = str_replace('fox', '', $originalString);

echo $modifiedString, "<br>";
?>

<!----------------------------------------------------------------------------------------------------------------------------->

<!-- 15.	Write a PHP script to remove trailing dashes from a string. 

Original String: 'The quick brown fox jumps over the lazy dog---'
Expected Output: 'The quick brown fox jumps over the lazy dog'
 -->
 <?php
$originalString = 'The quick brown fox jumps over the lazy dog---';

$modifiedString = rtrim($originalString, '-');

echo "Modified String: " . $modifiedString, "<br>";
?>

<!----------------------------------------------------------------------------------------------------------------------------->

<!-- 
16.	Write a PHP script to remove Special characters from the following string. 

Sample Output: '\"\1+2/3*2:2-3/4*3'
Expected Output: '1 2 3 2 2 3 4 3'
 -->
 <?php
$originalString = '\"1+2/3*2:2-3/4*3';

$modifiedString = preg_replace('/[^A-Za-z0-9 ]/', '', $originalString);

// Output the modified string
echo "Modified String: " . $modifiedString, "<br>";
?>

<!----------------------------------------------------------------------------------------------------------------------------->


<!--17.	Write a PHP script to select first 5 words from the following string. 

Sample Output: 'The quick brown fox jumps over the lazy dog'
Expected Output: 'The quick brown fox jumps'
  -->
  <?php
$originalString = 'The quick brown fox jumps over the lazy dog';

$words = explode(' ', $originalString);

$firstFiveWords = array_slice($words, 0, 5);

$modifiedString = implode(' ', $firstFiveWords);

echo "First 5 Words: " . $modifiedString, "<br>";
?>

<!----------------------------------------------------------------------------------------------------------------------------->

<!-- 18.	Write a PHP script to remove comma(s) from the following numeric string.
 
Sample Output: '2,543.12'
Expected Output: 2543.12
 -->
 <?php
$originalString = '2,543.12';

$modifiedString = str_replace(',', '', $originalString);

echo "Modified String: " . $modifiedString, "<br>";
?>

<!--  -->
<!--  
19.	Write a PHP script to print letters from 'a' to 'z'. 
Expected Output: a b c d e f g h I j k l m n o p q r s t u v w x y z 
 -->
 <?php
for ($i = 97; $i <= 122; $i++) {
    echo chr($i) . " ";
}
?>

<!-- ------------------------------------------------------------------------------------------------------------------- -->