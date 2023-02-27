<!-- Version: 1.0 -->
<!-- Here's an example program in PHP that calculates a person's age and the number of days until their next birthday: -->
<!-- The program uses the DateTime class to work with dates and times, and reads the user's input from the standard input using fgets().
The program then calculates the age of the person and the number of days until their next birthday. -->

<?php
echo "Enter your birthdate (MM/DD/YYYY): ";
$birthdate = DateTime::createFromFormat('m/d/Y', fgets(STDIN))->setTime(0, 0, 0);

$today = new DateTime('now');
$age = $birthdate->diff($today)->y;

$next_birthday = clone $birthdate;
$next_birthday->modify(($today < $next_birthday->modify("+{$age} years")) ? 'next year' : 'this year');
$days_until_next_birthday = $next_birthday->diff($today)->days;

echo "You were born on a " . $birthdate->format('l') . ".\n";
echo "You are currently {$age} years old.\n";
echo "Your next birthday is in {$days_until_next_birthday} days.\n";
?>


<!-- Version: 1.0.2 -->
<!-- To optimize the code, we can eliminate unnecessary variables and simplify the logic for calculating the next birthday.
Here's an optimized version of the program: -->
<!-- In this version of the program, we eliminate the $today variable and calculate the age directly in the call to DateTime::diff().
We also simplify the logic for calculating the next birthday by using the result of the comparison between the current date and the date of the next birthday to determine whether to use "this year" or "next year". -->

<?php
echo "Enter your birthdate (MM/DD/YYYY): ";
$birthdate = DateTime::createFromFormat('m/d/Y', fgets(STDIN))->setTime(0, 0, 0);

$age = (new DateTime('now'))->diff($birthdate)->y;

$next_birthday = clone $birthdate;
$next_birthday->modify(($next_birthday->modify("+{$age} years") < new DateTime('now')) ? 'next year' : 'this year');

$days_until_next_birthday = $next_birthday->diff(new DateTime('now'))->days;

echo "You were born on a {$birthdate->format('l')}.\n";
echo "You are currently {$age} years old.\n";
echo "Your next birthday is in {$days_until_next_birthday} days.\n";
?>
