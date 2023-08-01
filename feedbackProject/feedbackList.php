<?php
require 'components/header.php';
echo "<h1>List FeedBack</h1>";
$sql = "select name,email,body from feedback;";
if ($connection != null) {
    try {
        //truy vấn lệnh sql
        $statement = $connection->prepare($sql);

        //thực hiện lệnh sql
        $statement->execute();

        //truy xuất lệnh sql (PDO::FETCH_ASSOC: trả về dưới dạng mảng liên hợp)
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);

        //lấy tất cả kết quả của sql thực thi
        $feedbacks = $statement->fetchAll();
        // print_r($feedbacks);


        echo '<ul class="list-group">';
        foreach ($feedbacks as $item) {
            $name = $item['name'] ?? '';
            $email = $item['email'] ?? '';
            $body = $item['body'] ?? '';
            echo "<li class='list-group-item'>";
            echo "<p>$name</p>";
            echo "<p>$email</p>";
            echo "<p>$body</p>";
            echo "</li>";
            //echo "<h3>$name, $email, $body</h3>";
        }
        echo '</ul>';
        echo "<a href='./index.php'>Go to add</a>";
    } catch (PDOException $e) {
        echo "Cannot query data. Error: " . $e->getMessage();
    }
}
include 'components/footer.php';