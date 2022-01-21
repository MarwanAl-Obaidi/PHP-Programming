# PHP-Programming
A course I did that goes through the basics of PHP and teaches the student to have the ability to understand, write and maintain PHP code.

## Contents
- Introduction
- www and PHP
- Getting to know PHP
- Variables and control structure

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
