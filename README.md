# PHP-Programming
A course I did that goes through the basics of PHP and teaches the student to have the ability to understand, write and maintain PHP code.

## Contents
- Introduction
- www and PHP
- Getting to know PHP
- Variables and control structure
- On variables and statements
- Arrays and their management

## ex_2_1
The purpose of this exercise is to introduce you to writing programs with the PHP programming language. Below you can see a written PHP program. You simply have to rewrite it.

```
<?php
    echo "This is the first program.";
    echo "Now we'll begin to learn programming!";
?>
```

## ex_3_1
Copy the source code including some syntax errors into the text input field below. Then try to run the program. The automatic system for checking and and giving feedback tells you information about the errors in the code. You could also check what a PHP compiler says about the error. Find the errors and fix them so that the source code doesn't include syntax errors and the program works as shown in the example output.

```
?php
    echo This program includes mistakes.\n"
    ech "Your task is to fix.";
?>
```

Example output:

```
This program includes mistakes.
Your task is to fix them.
```

## ex_3_2
Write a PHP script which prints the information given in the form below according to the example output.

```
<form action="printname.php" method="get">
First name: <input type="text" name="fname"><br>
Last name: <input type="text" name="lname">
<input type="submit" value="Send">
</form>
```

Example output:

```
Your name is Esa Lehtinen
```

## ex_3_3
Write a PHP script which prints the information input in the form below.

```
<form action="favorites.php" method="get">
Favorite color: <input type="text" name="favcolor"><br>
Favorite food: <input type="text" name="favfood">
<input type="submit" value="Send">
</form>
```

Example output:

```
Your favorite color is White and favorite food is Pie
```

## ex_4_1
Create a PHP script which prints one of the following sentences depending on the values input on the form:

- "Coffee with sugar!"
- "Coffee without sugar."
- "Tea with sugar!"
- "Tea without sugar."

The form sending the info is below:

```
<form action="printorder.php" method="get">
Select your drink: <input type="radio" value="coffee" name="drink" checked>coffee
<input type="radio" value="tea" name="drink">tea
<br>
With sugar: 
<select name="sugar">
<option value=1 selected>yes</option>
<option value=2>no</option>
</select>
<br>
<input type="submit" value="Send">     
</form>
```

## ex_4_2
Create a PHP script which checks the message sent with the form, then prints the name of the sender along with the message. If either the name or message field is empty, the text "You didn't fill all fields!" is printed instead. Unnecessary empty characters need to be deleted from the beginning and end of both strings. All HTML tags need to be deleted as well, so the sender can't do any damage to the guestbook. The form sending the message is as follows:

```
<form action="guestbook.php" method="get">
L??hett??j??: <input TYPE="text" name="name"><br>
Viesti: <input type="text" name="msg"><br>
<input type="submit" value="Send">     
</form>
```

Example output:

```
Eric Example: Hello, how goes it?
```

## ex_5_1
Write a PHP script which prints the absolute value of the number given in the form below.

```
<form action="absvalue.php" method="get">
Luku: <input type="text" name="num">
<input type="submit" value="Send">
</form>
```

Example output:

```
The absolute value of -3 is 3
```

## ex_5_2
Create a PHP script which prints numbers starting from the one input on the form, down till zero. The numbers should be separated by spaces, but there shouldn't be a space after the last number (the zero, that is). If the input value is less than zero, print the text "The number has to be at least zero!". The form used is as follows:

```
<form action="numbers.php" method="get">
Luku: <input TYPE="text" name="num"><br>
<input type="submit" value="Send">     
</form>
```

Example output:

```
The number has to be at least zero!
```

## ex_5_3
Write a PHP script which prints the product and quotient of the two numbers input in the form below. For the quotient, the first number is the dividend and the second the divisor. If the second number is 0, the result of the quotient should be printed as "can't divide by zero".

```
<form action="calculations.php" method="get">
First number: <input type="text" name="num1">
Second number: <input type="text" name="num2">
<input type="submit" value="Send">
</form>
```

Example output:

```
Product: 448
Quotient: 7
```

## ex_6_1
Your task is to fill in the program below by defining the missing variables, making the output match the example output. Write in only the missing lines, not the entire program.

The code with missing lines:

```
<?php

    // Your code here

    $output = implode(",",$a);
    echo $text;
    echo "I bought $count {$animal}s.\n";
    echo "Array content: $output";
?>
```

Example output:

```
Special characters marked with a backslash (\) can be used inside quotation marks (" and ").
I bought 3 cats.
Array content: 9,7,5
```

## ex_6_2
Change the elements of the array table so the program's output matches the example output. Instead of creating a new array, edit the elements in the already existing array. The program:

```
<?php

    $table = array("Eric Example" => "Example Lane 2",
          "Cara Coder" => "Programming Path 5",
          "Pete Programmer" => "Coding Street 5");

    // Your code here

    print_r($table);
?>
```

Example output:

```
Array
(
    [Eric Example] => Example Lane 10
    [Cara Coder] => Coding Street 5
    [Pete Programmer] => Programming Path 5
    [Carl Coder] => Coding Street 5
)
```

## ex_6_3
Your task is to finish the script below, its purpose being to print the sum and average of the values given. The values are given to the script as a single string, with the values themselves separated by comma (for example 4,2,5,2). The values are separated by turning it into an array using the explode() function. The script should also print all the values separated by spaces. Fill in only the missing lines, not the entire program!

The program:

```
<?php

    $numbers = $_GET['numarray'];
    $numarray = explode(',',$numbers);

    // Your code here

    echo "The points were: $points\n";
    echo "Sum of points: $sum\n";
    echo "Average of points: $avg";
?>
```

Example output:

```
The points were: 5 7 3 23 56 85 2
The sum of points: 181
Average of points: 25.857142857143
```