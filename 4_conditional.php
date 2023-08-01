<?php
echo "Learn conditional in PHP<br>";
$age = 15;
if ($age >= 18) {
    echo "Lớn hơn = 18";
} else {
    echo "Bé hơn 18";
}


echo '<br>';
// $hours = date("H");
$hours = 18;
echo $hours;
echo '<br>';
if ($hours < 12) {
    echo "Good morning";
} else if ($hours >= 12 && $hours <= 17) {
    echo "Good afternoon";
} else {
    echo "Good evening";
}


echo '<br>';
$comments = [
    'Good question', 'I like it', 'How are you ?'
];
$comments1 = [];
$comments2 = [
    '', 'I like it', 'How are you ?'
];

if (!empty($comments)) { //not = !
    echo "There are some comments";
} else {
    echo 'No comments';
}
echo '<br>';
echo !empty($comments2) ? $comments2[1] :
    'No comments';
echo '<br>';
$first_comment = $comments3[0] ?? 'No comments';
echo $first_comment;

/* ---------- switch case*/
echo '<br>';
$favorite_color = 'red1';
switch ($favorite_color) {
    case 'red':
        echo 'You choose RED';
        break;
    case 'green':
        echo 'You choose GREEN';
        break;
    case 'blue':
        echo 'You choose BLUE';
        break;
    default:
        echo 'Not RED, GREEN, BLUE';
}
