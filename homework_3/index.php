<?php
// Задание #3.1
$names = ['Иван', 'Мария', 'Сергей', 'Игорь', 'Ольга'];

$users = [];
for ($i=1; $i <= 50; $i++) {
    $users[] = [id => $i, name => $names[array_rand($names)], age => random_int(18, 45)];
}

file_put_contents('users.json', json_encode($users));
$data = file_get_contents('users.json');
$assocArray = json_decode($data, true);
foreach ($names as $name) {
    echo "Пользователей с именем $name: " . array_count_values(array_column($users, 'name'))[$name];
    echo '<br>';
}

$totalAge = 0;
foreach ($users as $user) {
    $totalAge += $user[age];
}

$averageAge = $totalAge / count($users);
echo $averageAge;
