<?php
//access the global array called $_POST to get the values from the text fields
$q1ans = $_POST["q1"];
$q2ans = $_POST["q2"];
$q3ans = $_POST["q3"];
$q4ans = $_POST["q4"];
$q5ans = $_POST["q5"];
$count = 0;

echo "Question 1: What is the emperors name?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You answered: " . $q1ans . "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correct answer: Kuzco<br><br>";
echo "Question 2: What does Kuzco turn into?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You answered: " . $q2ans . "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correct answer: Llama<br><br>";
echo "Question 3: What was the special dish Kronk makes?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You answered: " . $q3ans . "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correct answer: Spinach Puffs<br><br>";
echo "Question 4: Why did Kronk get the job at the restraunt to cook?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You answered: " . $q4ans . "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correct answer: Because he made the other one quit.<br><br>";
echo "Question 5: What was Yzma's plan to kill Kuzco?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your answer: " . $q5ans . "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correct answer: To turn him into a flea. Then, she'll put him in a box, and put the box in another box. Then, when it arrives, she'll smash it with a hammer.<br><br>";

if($q1ans == "Kuzco") {
	$count++;
}
if($q2ans == "Llama") {
        $count++;
}
if($q3ans == "Spinach Puffs") {
        $count++;
}
if($q4ans == "Because he made the other one quit") {
        $count++;
}
if($q5ans == "To turn him into a flea. Then, she'll put him in a box, and put the box in another box. Then, when it arrives, she'll smash it with a hammer.") {
        $count++;
}

echo "You got " . $count . " out of 5 questions correct. That's a score of ";
if($count == 0) {
	echo "0%.";
}
else if($count == 1)	{
        echo "20%.";
}

else if($count == 2)	{
        echo "40%.";
}
else if($count == 3)	{
        echo "60%.";
}
else if($count == 4)	{
        echo "80%.";
}
else if($count == 5)	{
        echo "100%.";
}
?>
