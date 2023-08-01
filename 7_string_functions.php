<?php
echo "Learn String functions";
echo '<br>';
$full_name = 'Pham Trung Nguyen';
echo "strlen(x) --> length $full_name:" . strlen($full_name);


//reverse a string
echo '<br>';
echo "strrev(x) --> đảo chuỗi :";
echo strrev($full_name);

//conert to lowercase
echo '<br>';
echo "strtolower(x) --> Chuyển thành in thường :";
echo strtolower($full_name);
echo '<br>';
echo "strtoupper(x) --> chuyển thành in hoa :";
echo strtoupper($full_name);


//find and replace
echo '<br>';
echo "str_replace(x1,x2,string) --> thay x2 = x1 trong chuỗi string :";
echo str_replace(' ', '-', $full_name);


echo '<br>';
echo "str_starts_with(string,x) --> kiểm tra trong chuỗi string bắt đầu bằng x :";
echo var_export(str_starts_with($full_name, "Pham"));
echo '<br>';
echo "str_ends_with(string,x) --> kiểm tra trong chuỗi string kết thúc bằng x :";
echo var_export(str_ends_with($full_name, "Nguyen"));


echo "<h1>html string</h1>";
//how to ignore the html string ?
echo '<br>';
echo "htmlspecialchars(string) --> Không chuyển sang HTML:";
echo htmlspecialchars("<h1>html string</h1>");
// echo "<script>alert('This is javascript code')</script>";
echo '<br>';
echo htmlspecialchars("<script>alert('This is javascript code')</script>");

//htmlspecialchars used to get data in form
// printf('<br>%s likes %s', 'Hoang', 'Mercedes G63');
// printf('pi = %f', 3.14);