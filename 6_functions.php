<?php
echo "Learn function";

echo '<br>';
$y = 22;
function sayHello($name)
{
    global $y;              // --> định nghĩa y là global
    echo "y = $y : global";          // --> in đc nếu y đc đ/n global
    echo '<br>';
    $x = 123;
    echo "Hello $name";
}
// echo "x = $x";          // --> Không in được 
sayHello("call funtion sayHello : TrungNguyen");   // --> call function with "parameters"


echo '<br>';
function sum($a = 0, $b = 0)
{
    //default arguments' values
    return $a + $b;
}
echo "Call sum(2,3) =" . sum(2, 3);
echo '<br>';
echo "Call sum(2,'3') =" . sum(2, '3');
echo '<br>';
echo "Call sum(2) =" . sum(2);

// assign a variable to a function
$multiply = function ($a, $b) {
    return $a * $b;
};
echo '<br>';
echo "Call assign a variable to a function = " . $multiply(3, 4);


// arrow function
echo '<br>';
$substract = fn ($a, $b) =>  $a * $b;;
echo "Call arrow function = " . $substract(6, 2);


/* -------------------Các hàm của array */

//some built-in function for array
echo '<br>';
echo '---------------Các hàm trong array';
echo '<br>';
$names = ['a0', 'a1', 'a2', 'a3'];
echo "count(arr) --> Tổng số phần tử trong mảng  = " . count($names);

// seach inside array
echo '<br>';
echo 'in_array(value,arr) --> Kiểm trả phần tử có trong mảng ko  :';
var_export(in_array('2', $names));


// insert an item
echo '<br>';
array_push($names, 'a4', 'a5');
echo 'array_push(arr,value) --> Push vào cuối mảng :';
var_export($names);


//insert to the beginning of the array
echo '<br>';
echo 'array_unshift(arr,value) --> Thêm vào đầu mảng :';
array_unshift($names, '0');
echo var_export($names);


//remote the last item
echo '<br>';
array_pop($names);
echo 'array_pop(arr) --> Xóa vào cuối mảng :';
echo var_export($names);

//remove the first item
array_shift($names);
echo '<br>';
echo 'array_shift(arr) --> Xóa vào đầu mảng :';
echo var_export($names);


//how to remote an item
unset($names[3]);
echo '<br>';
echo 'unset(arr[index]) --> Xóa phần tử bất kì :';
echo var_export($names);


//chunk an array
$chunked_array = array_chunk($names, 3);
echo '<br>';
echo 'array_chunk(arr,value) --> Chia nhỏ mảng thành từng đoạn :';
var_export($chunked_array);


$array_one = [1, 2, 3];
$array_two = [4, 5, 6];
$merged_array = array_merge($array_one, $array_two);
echo '<br>';
echo ' array_merge(arr1,arr2) --> Gộp 2 mảng :';
var_export($merged_array);

//spread operator 
$array_three = [...$merged_array]; //clone an array
$merged_array[0] = 111;
echo '<br>';
echo '[...arr] --> spread operator mảng củ :';
var_export($merged_array);
echo '<br>';
echo '[...arr] --> spread operator mảng mới :';
var_export($array_three);


//merge and clone
$array_four = [...$array_one, ...$array_two];
echo '<br>';
echo '[...arr1,...arr2] --> spread operator  mảng mới :';
var_export($array_four);


//combine two arrays
$a = ['name', 'email', 'age'];
$b = ['Hoang', 'sunlight4d@gmail.com', 18];
$c = array_combine($a, $b);
echo '<br>';
echo 'array_combine(arr1,arr2) --> Kết hợp mảng arr1:key;arr2:value:';
var_export($c);
echo '<br>';
//đảo key and value
echo 'array_flip(arr1,arr2) --> Kết hợp mảng arr2:key;arr1:value :';
var_export(array_flip($c));

//print key or value in arrays
echo '<br>';
echo 'array_keys(arr1) --> In ra key cuar mảng :';
var_export(array_keys($c));
echo '<br>';
echo 'array_values(arr1) --> In ra value cuar mảng :';
var_export(array_values($c));


//array from a range
$numbers = range(0, 10);
echo '<br>';
echo 'range(x,y) --> tạo mảng có giá trị từ x->y :';
var_export($numbers);


//map an array to another array
$numbers1 = range(2, 10);
$squared_numbers = array_map(function ($each_number) {
    return $each_number * 2;
}, $numbers1);
echo '<br>';
echo 'array_map(function,arr) --> map :';
var_export($squared_numbers);


//filter an array
$filtered_numbers = array_filter(
    $numbers1,
    function ($item) {
        return $item % 2 == 0;
    }
);
echo '<br>';
echo 'array_filter(arr,function) --> felter :';
var_export($filtered_numbers);
