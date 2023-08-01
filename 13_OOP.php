<?php
echo "OOP - Object Oriented Programming";
echo '<br>';

//From PHP5 onwards, you can define classes    
class User
{
    //properties that belong to a class
    //protected : k truy cập đc bên ngoài chỉ chỉ cập thông qua hàm or kế thừa
    protected $name;
    public $email;
    public $age;
    public $password;
    //constructor: function that runs when an object
    //is instantiated
    // public function __construct()
    // {
    //     echo "constructor";
    //     echo '<br>';
    // }
    public function __construct(
        $name,
        $email,
        $age,
        $password
    ) {
        //echo "constructor run<br>";
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->password = $password;
    }
    // //method: a function that belongs to a class
    function set_name($name)
    {
        $this->name = $name;
    }
    // //getter
    function get_name()
    {
        return $this->name;
    }

    //ko cần thiết chỉ cần tạo get với những cái k truy cập đc
    function get_email()
    {
        return $this->email;
    }
}

//init an object
// $user1 = new User();
// // $user1->name = 'Hoang';
// $user1->age = 43;
// $user1->email = 'sunlight4d@gmail.com';
// $user1->password = '123456';
// $user1->set_name("Nguyen");
// var_export($user1);
// echo $user1->get_name();

$user2 = new User('john', 'john@gmail.com', 23, '11223');
var_export($user2);
echo '<br>';
echo $user2->email;
echo '<br>';
echo $user2->get_email();



//*------------------------inheritance
class Employee extends User
{
    private $title;
    public function __construct(
        $name,
        $email,
        $age,
        $password,
        $title //only employee has
    ) {
        //tải sử dụng construct của User
        parent::__construct($name, $email, $age, $password);
        $this->title = $title;
    }
    public function get_title()
    {
        return $this->title;
    }
}
$employee1 = new Employee(
    'Taylor',
    'taylor12@gmail.com',
    30,
    '123456',
    'Sales manager'
);
echo '<br>';
var_export($employee1);
echo '<br>';
echo $employee1->get_title();