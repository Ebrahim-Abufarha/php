
<!-- 1.	Write a script to generate the following paragraph 
 
"The memory of that scene for me is like a frame of film forever
 frozen at that moment: the red carpet, the green lawn, the white 
 house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
The words 'red', 'green' and 'white' should come from the $colors array. -->

<?php 
$color = array ("red","green","white");

echo "The memory of that scene for me is like a frame of film forever
frozen at that moment: the {$color[0]} carpet, the {$color[1]} lawn, the {$color[2]} 
house, the leaden sky. The new president and his first lady. - Richard M. Nixon" ,"<br>";
?>










 
<!-- 2.	$colors = array('white', 'green', 'red') 
Write a PHP script that will display the colors as unordered list :
Expected Output:  
●	green
●	red
●	white -->


<?php 
    $colors1 = array('white', 'green', 'red');

    echo "<ul> <li> {$colors1[1]} </li>
    <li> {$colors1[2]} </li>
    <li> {$colors1[0]} </li>";


?>








<!--  
3.	$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
 "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", 
 "Finland"=>"Helsinki", "France" => "Paris",
  "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", 
  "Germany" => "Berlin", "Greece" => "Athens", 
  "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
  "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

Create a PHP script to displays the capital and
 country name from the above array $cities.
  Sort the list by the capital of the country. 
Expected Output:
The capital of Netherlands is Amsterdam 
The capital of Greece is Athens 
The capital of Germany is Berlin  -->

<?php 
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen", 
"Finland"=>"Helsinki", "France" => "Paris",
 "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", 
 "Germany" => "Berlin", "Greece" => "Athens", 
 "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
 "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

asort($cities);
 foreach ($cities as $x => $y)
 echo "The capital of $x is $y","<br>";


?>










<!-- 4.	$color = array (4 => 'white', 6 => 'green', 11=> 'red');

Write a PHP script to display the first element of the above array. 
Expected Output:  white -->


<?php 
$colors2 = array (4 => 'white', 6 => 'green', 11=> 'red');
echo $colors2[4] , "<br>";
?>







 
 
<!-- 5.	Write a PHP script that inserts a specific new item in an array in any position.
 
Sample Input:

Array 1 2 3 4 5   
Location: 4
New Item: $

Expected Output: 1 2 3 $ 4 5 -->

<?php 
$numbers = [1 , 2 , 3 , 4 ,5];
array_splice($numbers ,3, 0 ,"$");
echo implode(" ", $numbers) , "<br>";


?>







 
<!-- 6.	Write a PHP script to sort the following associative array depending on the key value [asc] : 

Sample Input: 

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

Expected Output:

c = apple
b = banana
d = lemon
a = orange -->

<?php 
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $x => $y){
    echo $x , "=" ,$y ,"<br>";
}
?>










<!--  
7.	Write a PHP script to calculate and display the average temperature
 for the recorded reads, also the script should display the list of the
  five lowest and the five highest temperatures 

Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73

Expected Output:
Average Temperature is: 70.6 
List of seven lowest temperatures: 60, 62, 63, 63, 64, 
List of seven highest temperatures: 76, 78, 79, 81, 85, -->



<?php
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$average_temperature = array_sum($temperatures) / count($temperatures);

sort($temperatures);

$lowest_temperatures = array_slice($temperatures, 0, 7);

rsort($temperatures);

$highest_temperatures = array_slice($temperatures, 0, 7);

echo "Average Temperature is: " . number_format($average_temperature, 1) . "<br>";

echo "List of five lowest temperatures: " . implode(", ", $lowest_temperatures) . "<br>";

echo "List of five highest temperatures: " . implode(", ", $highest_temperatures) . "<br>";
?>










 
<!-- 8.	Write a PHP program to merge the following two arrays. 

Sample Input: 

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

Expected Output:

Array
(
    [color] => green
    [0] => 2
    [1] => 4
    [2] => a
    [3] => b
    [shape] => trapezoid
    [4] => 4
) -->



<?php 
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$array3 = array_merge($array1 , $array2);

echo "<pre>";
print_r($array3);
echo "</pre>";

?>









<!-- 9.	Write a PHP function to change the following array's and convert all the strings to upper case. 

Sample Input:

$colors = array("red","blue", "white","yellow");

Expected Output :

Array
(
    RED
    BLUE
    WHITE
    YELLOW

) -->
<?php
$colors = array("red", "blue", "white", "yellow");

$upper_colors = array_map('strtoupper', $colors);

echo "<pre>";
print_r($upper_colors);
echo "</pre>";

?>














<!-- 
10.	Write a PHP function to change the following array's and convert all the strings to lower case. 

Sample Input:

$colors = array("RED","BLUE", "WHITE","YELLOW");

Expected Output :

Array
(
    red
    blue
    white
    yellow

) -->




<?php
$colors = array("RED","BLUE", "WHITE","YELLOW");

$upper_colors = array_map('strtolower', $colors);

echo "<pre>";
print_r($upper_colors);
echo "</pre>";

?>






 
<!-- 11.	 Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. 

Expected Output: 200,204,208,212,216,220,224,228,232,236,240,244,248 -->
<?php
for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0) {
        echo $i;
        if ($i < 250) {
            echo ", ";
        }
    }
}
echo "<br>";
?>










 
<!-- 12.	Write a PHP script to get the shortest/longest string length from an array. 

Sample Input:

 $words =  array("abcd","abc","de","hjjj","g","wer")

Expected Output : 

The shortest array length is 1. The longest array length is 4. -->


<?php
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

$lengths = array_map('strlen', $words);

$shortest = min($lengths);
$longest = max($lengths);

echo "The shortest array length is $shortest. The longest array length is $longest.","<br>";
?>








 
 
<!-- 13.	Write a PHP script to generate unique random 10 numbers within a specific range. 

Sample Input: (11, 20)
Sample Output: 17 16 13 20 14 19 18 15 11 12 -->
  <?php
  $min = 11;
  $max = 20;
  
  $numbers = range($min, $max);
  
  shuffle($numbers);
  
  $unique_random_numbers = array_slice($numbers, 0, 10);
  
  echo implode(" ", $unique_random_numbers) , "<br>";
  ?>
  
 














<!-- 14.	Write a PHP script that returns the lowest integer in the array  that is not 0. 

Sample Input: $array1 = array( 2, 0, 10, 12, 6) 
Sample Output:  2 -->

<?php
$array1 = array(2, 0, 10, 12, 6);

$filtered_array = array_filter($array1, function($value) {
    return $value != 0;
});

$smallest = min($filtered_array);

echo "The smallest non-zero integer is: $smallest";
?>











<!-- 15.	Write a PHP program to sort an array of positive integers using the any Sort Algorithm.          
Input array : Array ( [0] => 5 / [1] => 3 / [2] => 1 / [3] => 3 / [4] => 8 / [5] => 7 / [6] => 4 / [7] => 1/ [8] => 1 / [9] => 3 )
Expected Result : Array ( [0] => 8 / [1] => 7 / [2] => 5 / [3] => 4 / [4] => 3 / [5] => 3 / [6] => 3 / [7] => 1 [8] => 1/ [9] => 1 ) -->


<?php
$array = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);

rsort($array);

echo "Sorted Array (Descending Order): ";
print_r($array);
echo "<br>";
?>










<!-- 16.Write a PHP function to floor decimal numbers with precision. 
 Note: Accept three parameters number, precision, and $separator
Sample Data : 
1.155, 2, "."
100.25781, 4, "."
-2.9636, 3, "."
Expected Output :
1.15
100.2578
-2.964 -->



<?php
function custom_floor($number, $precision) {
    return floor($number * 10 ** $precision) / 10 ** $precision;
}

echo custom_floor(1.155, 2) . "<br>";   
echo custom_floor(100.25781, 4) . "<br>"; 
echo custom_floor(-2.9636, 3) . "<br>"; 
?>












<!-- 17.  Write a PHP script to merge two commas separated lists with unique values only.
Sample input: list1 = "4, 5, 6, 7";
  		list2 = "4, 5, 7, 8";
Sample output: 4, 5, 6, 7, 8 -->





<?php
$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";

$array1 = explode(", ", $list1);
$array2 = explode(", ", $list2);

$merged_array = array_unique(array_merge($array1, $array2));

$result = implode(", ", $merged_array);

echo $result , "<br>";
?>







<!-- 18. Write a PHP function to remove the duplicate entry from an array.
sample input = 4, 5, 6, 7, 4, 7, 8
sample Output = 4, 5, 6, 7, 8 -->




<?php
function remove_duplicates($array) {
    return array_unique($array);
}

$input_array = array(4, 5, 6, 7, 4, 7, 8);

$output_array = remove_duplicates($input_array);
echo implode(", ", $output_array) ,"<br>";
?>








<!-- 19. Write a PHP Program to find if an array is a subset of another.
sample input:
array1 = 'a','1','2','3','4'
array2 = 'a','3'
	sample output:
array2 is a subset array from array1 -->



<?php
function is_subset($array1, $array2) {
    return !array_diff($array2, $array1);
}

$array1 = array('a', '1', '2', '3', '4');
$array2 = array('a', '3');

if (is_subset($array1, $array2)) {
    echo "array2 is a subset array from array1"; 
} else {
    echo "array2 is not a subset array from array1";
}
?>




