<?php
echo "Learn Array";
echo "<br>";

/* ----------Khai báo arr */
$arr = ['1', '2', '3', '4'];
// $arr = array('1', '2', '3', '4');

// echo $arr;
// var_dump($arr);
// var_export($arr);
// print_r($arr);
// echo $arr[1];
echo '<br>';

/* ----------Associative array */
$arr1 = [
    1 => 'nguyen1',
    2 => 'nguyen2',
    3 => 'nguyen3',
];
echo $arr1[3];
echo '<br>';
$arr2 = [
    [
        1 => 'nguyen1',
        2 => 'nguyen2',
        3 => 'nguyen3',
    ],
    [
        4 => 'nguyen4',
        5 => 'nguyen5',
        6 => 'nguyen6',
    ], [
        7 => 'nguyen7',
        8 => 'nguyen8',
        9 => 'nguyen9',
    ]
];
// print_r($arr2);
echo $arr2[1][6];
echo '<br>';
echo json_encode($arr2);  // chuyển qua string