
## Here's an example program in PHP that calculates a person's age and the number of days until their next birthday:

## This program will prompt the user for their date of birth, and then it will calculate current age, the day of the week you were born on, and the number of days until your next birthday.

## To use the program, simply run it in a IDE or code editor environment and follow the prompts.

# Version: 1.0.2
## In this version of the program, we eliminate the $today variable and calculate the age directly in the call to DateTime::diff(). We also simplify the logic for calculating the next birthday by using the result of the comparison between the current date and the date of the next birthday to determine whether to use "this year" or "next year".

# Version: 1.0
## The program uses the DateTime class to work with dates and times, and reads the user's input from the standard input using fgets(). The program then calculates the age of the person and the number of days until their next birthday.


## Ray C. Turner