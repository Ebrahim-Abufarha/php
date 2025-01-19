<!-- 1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the 
start and end position.  
Expected Output: 1-2-3-4-5-6-7-8-9-10  -->


<?php
$numbers = range(1, 10);
$output = implode('-', $numbers);
echo $output ,"<br>";
?>




<!------------------------------------------------------------------------------------------------->


<!--  
2. Create a script using a for loop to add all the integers between 0 and 30 and display the total.  
 
Expected Output:  total as a number  -->


<?php 

$sum1=0;
for ($i=0 ; $i<=30 ; $i++){
$sum1 += $i; 

}
echo $sum1 ,"<br>";


?>





<!-- 3. Create a script to generate the following pattern, using the nested for loop.  
 
Expected Output: 
 
A A A A A  
A A A B B  
A A C C C  
A D D D D  
E E E E E -->


<?php
$rows = 5;
$cols = 5;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $cols; $j++) {
        if ($j <= $rows - $i + 1) {
            echo "A ";
        } else {
            echo chr(64 + $i) . " "; 
        }
    }
    echo "<br>"; 
}
?>







<!-- 4. Create a script to generate the following pattern, using the nested for loop.  
 
Expected Output: 
 
1 1 1 1 1  
1 1 1 2 2  
1 1 3 3 3  
1 4 4 4 4  
5 5 5 5 5 -->


<?php
$rows = 5;
$cols = 5;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $cols; $j++) {
        if ($j <= $rows - $i) {
            echo "1 "; 
        } else {
            echo $i . " ";
        }
    }
    echo "<br>"; 
}
?>






<!-- 5. Create a script to generate the following pattern, using the nested for loop.  
 
Expected Output: 
 
1 0 0 0 0  
0 2 0 0 0  
0 0 3 0 0  
0 0 0 4 0  
0 0 0 0 5 -->



<?php
$rows = 5;
$cols = 5;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $cols; $j++) {
        if ($i == $j) {
            echo $i . " ";
        } else {
            echo "0 "; 
        }
    }
    echo "<br>"; 
}
?>











<!-- 6. Write a program to calculate and print the factorial of a number using a for loop. The factorial of 
a number is the product of all integers up to and including that number. 
 
Sample Input: 5 
Expected Output: 120 -->

<?php 
$num1 = 5;
$sum2 = 1;
for($i = 1 ; $i <= $num1 ; $i++){
     $sum2 *= $i; 
}
echo $sum2 , "<br>";

?>








<!-- 7. Write a program to calculate and print the Fibonacci sequence using a for loop. 
Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting 
with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on.  
 
Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, …  -->
<?php
$n = 10;
$a = 0; 
$b = 1;

echo $a . ", " . $b;

for ($i = 3; $i <= $n; $i++) {
    $next = $a + $b;
    echo ", " . $next;
    $a = $b;
    $b = $next;
}
echo "<br>" ;
?>













<!-- 8. Write a program which will count the "c" characters in the text "Orange Coding Academy".  
 
Sample Input: Orange Coding Academy 
Expected Output: 2 -->

<?php
$text = "Orange Coding Academy";

$target = "c";

$text = strtolower($text);

$count = substr_count($text, $target);

echo $count ,"<br>";
?>






<!-- 9. Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and 
cell spacing="0px" to the table tag.  -->


<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <table border="1" cellpadding="3px" cellspacing="0px">
        <?php
        for ($col = 1; $col <= 5; $col++) {
            echo "<tr>";
            for ($row = 1; $row <= 6; $row++) {
                $result = $row * $col; 
                echo "<td>{$row} * {$col} = {$result}</td>";
            }
            echo "</tr>";
        }
        echo "<br>" ;
        ?>
    </table>
</body>
</html>





<!-- 10. Write a PHP program that repeats integers from 1 to 50. For multiples of three, print "Fizz" 
instead of the number, and for multiples of five print "Buzz". For numbers that are multiples of 
both three and five, print "FizzBuzz". 
 
Expected Output: 1 2 Fizz 4 Buzz Fizz 7 8 Fizz ……. -->


<?php
// Loop through numbers from 1 to 50
for ($i = 1; $i <= 50; $i++) {
    // Check if the number is a multiple of both 3 and 5
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz "  , "<br>";
    }
    // Check if the number is a multiple of 3
    elseif ($i % 3 == 0) {
        echo "Fizz "  , "<br>";
    }
    // Check if the number is a multiple of 5
    elseif ($i % 5 == 0) {
        echo "Buzz "  , "<br>";
    }
    // If none of the above, print the number
    else {
        echo $i . " "  , "<br>";
    }
}
?>







<!-- 11. Write a PHP program to generate and display the first n lines of a Floyd triangle 
 
According to Wikipedia Floyd's triangle is a right-angled triangular array of natural numbers, used in computer 
science education. It is named after Robert Floyd. It is defined by filling the rows of the triangle with consecutive 
numbers, starting with a 1 in the top left corner: 
 
Sample output: 
1 
2 3 
4 5 6 
7 8 9 10 
11 12 13 14 15 -->


<?php
function printFloydsTriangle($n) {
    $num = 1;
    for ($i = 1; $i <= $n; $i++) { 
        for ($j = 1; $j <= $i; $j++) { 
            echo $num . " ";
            $num++; 
        }
        echo "<br>";
    }
}

$n = 5; 
printFloydsTriangle($n);

"<br>"
?>








<!-- 12. Write a PHP program to print the following pattern.  
    
Expected Output: 
 
     A  
    A B  
   A B C  
  A B C D  
 A B C D E  
  A B C D  
   A B C  
    A B  
     A -->

     

     !DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamond Pattern - Loops - Exer 12</title>
    <style>
        h3 {
            background-color: lightsalmon;
        }
        p {
            font-size: 10px;
            background-color: aliceblue;
        }
    </style>
</head>
<body>
    <h3>Exer-12</h3>
    <p>Diamond pattern</p>
    <?php
        $letters = str_split("ABCDE");
        $total = count($letters);
        echo "<pre>";
        for ($i = 1; $i <= $total; $i++) {
            $index = 0;
            for ($j = 1; $j <= $total; $j++) {
                if ($j < $total - $i + 1) {
                    echo " ";
                } else {
                    echo $letters[$index] . " ";
                    $index++;
                }
            }
            echo "<br>";
            if ($i == $total) {
                for ($k = $total - 1; $k >= 1; $k--) {
                    $index = 0;
                    for ($l = 1; $l <= $total; $l++) {
                        if ($l < $total - $k + 1) {
                            echo " ";
                        } else {
                            echo $letters[$index] . " ";
                            $index++;
                        }
                    }
                    echo "<br>";
                }
            }
        }
    ?>
</body>
</html>

