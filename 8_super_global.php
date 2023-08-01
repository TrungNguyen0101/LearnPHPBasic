<?php
echo "Learn  Superglobals <br>";
// print_r($_SERVER);
// print_r($_POST);


//We will send data through url or form using $_GET / $_POST
// ---------Lấy ra thông tin name, age
// echo $_GET["name"];
// echo $_GET["age"];
// ---------Kiểm tra có thuộc tính name thì lấy : isset()

//*c1
// if (isset($_GET['name'])) {
//     echo $_GET['name'];
// }
// if (isset($_GET['age'])) {
//     echo $_GET['age'];
// }
//*c2
// $name = $_GET['name'] ?? '';
// $passowrd = $_GET['passowrd'] ?? '';
// echo $name . $passowrd;


//<script>alert('This is javascript code');</script>
//$email = htmlspecialchars($_POST['email']) ?? '';//coalescing   
//another way
// $email = filter_var(
//     $_POST['email'],
//     FILTER_SANITIZE_SPECIAL_CHARS
// );
// $password = htmlspecialchars($_POST['password']) ?? '';
// echo $email;
// echo $password;
//send this to Database,etc..
//We will talk about MySQL Database later

// $name = $_GET['name'] ?? '';
// $passowrd = $_GET['password'] ?? '';
// echo $name . $passowrd;
$name = htmlspecialchars($_POST['name']) ?? '';
$passowrd = htmlspecialchars($_POST['password']) ?? '';
echo $name . $passowrd;
//cách khác thay thế htmlspecialchars
// $email = filter_var(
//     $_POST['email'],
//     FILTER_SANITIZE_SPECIAL_CHARS
// );


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
    <!-- 
        action : chỉ địch đích đến của dữ liệu
        $_SERVER['PHP_SELF'] : trả dữ liệu tới chính trang web hiện tại
        method="POST" : 
            + gửi dữ liệu được gửi dưới dạng phần thân của yêu cầu HTTP, không hiển thị trên URL.
            + không giới hạn kích thước
            + bảo mật hơn vì k hiển thị trên url
        method="GET" : 
            + gửi dữ liệu dưới dạng tham số trên URL, query
            + giới hạn về kích thước (2048 kí tự)
    -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <h3>Login to your account</h3>
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>