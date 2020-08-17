<?php
include_once "config.php";
try {
    $pdo = new PDO("mysql:host=$database[host];dbname=$database[database]", $database['username'], $database['password']);
    $sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(11) UNSIGNED AUTO_INCREMENT,
    email VARCHAR(60) NOT NULL UNIQUE ,
    orders_count INT(10) DEFAULT '0',
    PRIMARY KEY(id)
   )";
    $pdo->query($sql);

    $sql = "CREATE TABLE IF NOT EXISTS orders (
    id INT(11) UNSIGNED AUTO_INCREMENT,
    user_id INT(11),
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    address VARCHAR(100) NOT NULL,
    PRIMARY KEY(id)
   )";
    $pdo->query($sql);

    $email = $_POST['email'];
    $address = $_POST['street'] . $_POST['home'] . $_POST['home'] . $_POST['part'] . $_POST['appt'] . $_POST['floor'];
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $res = $pdo->query($sql);
    $user = $res->fetch();
    echo '<pre>';
    print_r($user[orders_count]);

    if(!$user) {
        $sql = "INSERT INTO users(email) VALUES ('$email')";
        $pdo->query($sql);
        print('новый пользователь создан');
    }
        $userID = $user['id'];
//    echo '<pre>';
//        print_r($user);
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $res = $pdo->query($sql)->fetch();
        $orders_count = $res['orders_count'];
        $orders_count ++;
    print($orders_count);
        $sql = "UPDATE users SET orders_count='$orders_count' WHERE email = '$email'";
//        $res = $pdo->query($sql);
        $pdo->query($sql);
//        print("Спасибо, ваш заказ будет доставлен по адресу: $address
//               Номер вашего заказа: $user[id]
//               Это ваш $orders заказ!");
//

    echo '<br>';

} catch(PDOException $e) {
    echo $e -> getMessage();
    print('НЕ Сработало!');
    die;
}