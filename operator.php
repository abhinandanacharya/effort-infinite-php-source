<?php

//types of operators in php
// 1.Airthmatic operators
//     a). +
//     B). -
//     c). *
//     D). /
//     E). %
// 2. Assignment operators
//     a). =
//     b). ==
//     c). ===
// 3. Increment & Decrement operators
//     => a). post++
//         b). ++Pre
//     => a). Post--
//     b). --Pre
// 4. Logical operators
//     a). AND (&&)
//     b). OR (||)
//     c). NOT (!)
// 5. Conditional operators
//  => ? :
// 6. Relational operators
//     a). <
//     b). >
//     c). <=
//     d). >=
//     e) ==
//     f) !=
// 7. other operators

// (, . )

//1. Airthmatic Operators 
$a = 12;
$b = 10;
$c  = $a + $b ; 
echo "result is : =>" . $c . "<br>";

echo $d   = $a-$b . "<br>";

echo "result is: =>" .  $e = $a*$b . "<br>";

//2. Assignment operators
$a =5;
$b = $a;
echo $b;

//3.1 Increment operator

#post++
$a= 10;
$b  = $a++;
echo $b;
echo $a;

#++pre
$a = 12;
$b = ++$a;
echo $b;
echo $a;
?>

<!--<h1 style="background-color: red; color:white;"> <?php //echo $d;?> </h1> --?