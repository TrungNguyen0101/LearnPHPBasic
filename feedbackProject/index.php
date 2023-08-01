<?php
require 'components/header.php';
$name = $email = $body = '';
$name_error = $email_error = $body_error = '';

//kiêm tra xem có name submit chưa 
if (isset($_POST['submit'])) {
    //validations        
    if (empty($_POST['name'])) {
        $name_error = 'Name is required';
    } else {
        $name = htmlspecialchars($_POST['name']);
    }
    if (empty($_POST['email'])) {
        $email_error = 'Email is required';
    } else {
        $email = filter_input(
            INPUT_POST,
            'email',
            FILTER_SANITIZE_EMAIL
        );
    }
    echo $_POST['body'];
    if (empty($_POST['body'])) {
        $body_error = 'Body is required';
    } else {
        $body = filter_input(
            INPUT_POST,
            'body',
            FILTER_SANITIZE_FULL_SPECIAL_CHARS
        );
    }
    // echo $name_error;
    // echo $email_error;
    // echo $body_error;


    $validate_sucess = empty($name_error)
        && empty($email_error)
        && empty($body_error);
    if ($validate_sucess) {
        $sql = "INSERT INTO feedback(name, email, body)
                                    VALUES(?, ?, ?)";
        try {
            //try vấn
            $statement = $connection->prepare($sql);

            //gắn vị trí
            $statement->bindParam(1, $name);
            $statement->bindParam(2, $email);
            $statement->bindParam(3, $body);

            //thức thi
            $statement->execute();
            //echo "feedback inserted successfully";
            header("Location: feedbackList.php");
        } catch (PDOException $e) {
            echo "Cannot insert feedback into database"
                . $e->getMessage();
        }
    }
} else {
    echo "error";
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="m-3">
        <input name="name" type="text" class="form-control 
            <?php echo $name_error ? 'is-invalid' : ''; ?>" placeholder="Enter your name">
        <p class="text-danger">
            <?php echo $name_error; ?>
        </p>
    </div>
    <div class="m-3">
        <input name="email" type="text" class="form-control
            <?php echo $email_error ? 'is-invalid' : ''; ?>" placeholder="Enter your email">
        <p class="text-danger">
            <?php echo $email_error; ?>
        </p>
    </div>
    <div class="m-3">
        <textarea name="body" class="form-control
            <?php echo $email_error ? 'is-invalid' : ''; ?>" placeholder="Enter your feedback" rows='2'></textarea>
        <p class="text-danger">
            <?php echo $body_error; ?>
        </p>
    </div>
    <div class="m-3">
        <input name="submit" type="submit" class="btn btn-primary" value="send">
    </div>
    <a href="./feedbackList.php">go to list</a>
</form>
<?php include 'components/footer.php' ?>

</body>

</html>