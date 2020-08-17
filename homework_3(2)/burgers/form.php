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
    $address = $_POST['street'] .' '. $_POST['home'] .' '. $_POST['part'] .' '. $_POST['appt'] .' '. $_POST['floor'];
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $res = $pdo->query($sql);
    $user = $res->fetch(PDO::FETCH_ASSOC);

    if(!$user) {
        $sql = "INSERT INTO users(email) VALUES ('$email')";
        $pdo->query($sql);
    }

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $res = $pdo->query($sql)->fetch();
    $userID = $res['id'];
    $orders_count = $res['orders_count'];
    $orders_count ++;
    $sql = "UPDATE users SET orders_count='$orders_count' WHERE email = '$email'";
    $pdo->query($sql);
    $sql = "INSERT INTO orders(user_id, address) VALUES ('$userID', '$address')";
    $pdo->query($sql);

    $sql = "SELECT * FROM orders WHERE user_id = '$userID'";
    $order = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    print("Спасибо, ваш заказ будет доставлен по адресу: $address
        <br>
               Номер вашего заказа: $order[id]
        <br>       
               Это ваш $orders_count заказ!");


} catch(PDOException $e) {
    echo $e -> getMessage();
    print('НЕ Сработало!');
    die;
}