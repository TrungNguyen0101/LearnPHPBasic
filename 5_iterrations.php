<?php
echo "learn Iterations(loop)";

echo '<br>';
echo '*for';
echo '<br>';
for ($i = 0; $i <= 10; $i++) {
    //echo $i == 0 ? "$i" : ": $i";
    echo "$i ";
}

echo '<br>';
echo '*White';
echo '<br>';
$i = 15;
while ($i < 20) {
    echo " $i";
    $i = $i + 1;
}
echo '<br>';
echo '*Do White';
echo '<br>';
do {
    echo " $i";
    $i = $i + 1;
} while ($i < 30);


/* Chú ý foreach */
echo '<br>';
echo '*foreach';
echo '<br>';
$fruits = ['apple', 'pineapple', 'orange', 'lemon'];

for ($i = 0; $i < count($fruits); $i++) {
    echo "$fruits[$i] ";
}
echo '<br>';
foreach ($fruits as $item) {
    echo "$item  ";
}
echo '<br>';/* thêm index */
foreach ($fruits as $index => $item) {
    echo "$index - $item ; ";
}

echo '<br>';
$person = [
    'full_name' => 'Nguyen Duc Hoang',
    'email' => 'sunlight4d@gmail.com',
    'age' => 43
];
foreach ($person as $key => $value) {
    echo "$key : $value - ";
}
