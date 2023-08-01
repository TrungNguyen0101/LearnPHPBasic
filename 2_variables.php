<?php
echo "Learn Variables" . '<br>';

/* ----------Variables */
// $name = "Nguyen";
// echo $name;
// $age = 21;
// $check = true;               // hiển thị 1
// $check = false;              // không hiển thị
// echo $check;
// var_dump($check);
// echo '<br>';

/* ----------String concatenation : nối chuỗi */
// echo $name . ' is ' . $age . ' years old'; // c1
// echo "$name is $age years old";            // c2

/* ----------expression : tính toán */
echo 5 + 5;       //10
echo "<br>";
echo "5" + "5";   //1010
echo "<br>";
/* constants : biến khai hằng số  const */
define("SERVER_NAME", "trungnguyen.com");
echo "Server:" . SERVER_NAME; // sử dụng hằng