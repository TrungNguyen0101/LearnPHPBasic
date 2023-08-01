<?php
echo "File upload in PHP";
//có submit thì làm
if (isset($_POST['submit'])) {
    $permitted_extensions = ['png', 'jpg', 'jpeg', 'gif'];

    // kiểm tra có tồn tại hay ko kiểu và name
    $file_name = $_FILES['upload']['name'];
    $generated_file_name = time() . '-' . $file_name;
    if (!empty($file_name)) {
        // print_r($_FILES);

        // lấy ra size
        $file_size = $_FILES['upload']['size'];
        //*----------------------lấy ra tmp_name
        $file_tmp_name = $_FILES['upload']['tmp_name'];

        //*----------------------
        //nơi chứa file
        $destination_path = "uploads/$generated_file_name";

        //----------xử lý đuôi file
        //lấy ra đuôi file
        $file_extension = explode('.', $file_name);
        //lấy ra phần tử cuối và in thường
        $file_extension = strtolower(end($file_extension));

        echo "$file_name - $file_size - $destination_path - $file_extension";

        //*kiểm tra xem $file_extension có trong $permitted_extensions ko
        if (in_array($file_extension, $permitted_extensions)) {
            if ($file_size <= 1000000) {

                //*--------------------- upload file
                move_uploaded_file($file_tmp_name, $destination_path);
                $message = '<p style="color:green;">
                        File is uploaded</p>';
            } else {
                $message = '<p style="color:red;">
                        File is too big</p>';
            }
        } else {
            $message = '<p style="color:red;">
                        Invalid file type</p>';
        }
    } else {
        $message = '<p style="color:red;">
                No file selected, please try again</p>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>File upload in PHP</h1>
    <!-- nctype="multipart/form-data" : chia nhỏ file để upload  -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        Choose your image to upload
        <input type="file" name="upload">
        <input type="submit" value="submit" name="submit">
    </form>
    <?php echo $message ?? '' ?>
</body>

</html>