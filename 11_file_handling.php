<?php
echo "File Handling in PHP<br>";
//read / write file on the server
$file_path = './fruits.txt';
if (file_exists($file_path)) {
    //đọc file và in ra : dung lượng file
    // echo readFile($file_path);

    // mở file ra
    $file_handle = fopen($file_path, 'r');
    // đọc file
    $file_content = fread(
        $file_handle,
        filesize($file_path)
    );
    // đóng file
    fclose($file_handle);
    echo $file_content;
} else {
    //not exist
    //mở và tạo file mới
    $file_handle = fopen($file_path, 'w');

    //.PHP_EOL xún dòng
    $file_content = 'banana1' . PHP_EOL . 'mango2' . PHP_EOL . 'grape3';

    //ghi file
    fwrite($file_handle, $file_content);
    fclose($file_handle);
}
