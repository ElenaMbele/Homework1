<?php
// Задание 4
echo '<br>';
print(date('d.m.Y h:i'));
echo '<br>';
print(strtotime('24.02.2016 00:00:00'));

// Задание 5
$string = "Карл у Клары украл Кораллы";
echo '<br>';
print (str_replace('К', '', $string));

$string = 'Две бутылки лимонада';
echo '<br>';
print (str_replace('Две', 'Три', $string));

// Задание 6
file_put_contents('text.txt', 'Hello again!');

function file_get_content(string $fileName)
{
    echo '<br>';
    print(file_get_contents($fileName));
}

file_get_content('text.txt');




