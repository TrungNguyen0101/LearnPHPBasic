<?php
echo "Sessions in PHP<br>";
/*
     session are stored in the server
     so it can be used across multiple pages     
     */

session_start();                           // bắt đầu session
if (isset($_POST['submit'])) { // check submit hay chưa
    // $email = filter_input(
    //     INPUT_POST,
    //     'email',
    //     FILTER_SANITIZE_SPECIAL_CHARS
    // );
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    if (
        $email == '123'
        && $password == '123'
    ) {
        $_SESSION['email'] = $email;         // lưu vào session
        //redirect to another page
        header('Location: ./10_dashboard.php'); // nhảy sang trang khác
    } else {
        echo "Incorrect email/password";
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
    <h1>Login to your account</h1>
    <form action="<?php echo
                    htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <h3>Login to your account</h3>
        <div>
            <label for="name">Email:</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>