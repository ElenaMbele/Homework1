<?php
// Задание #1
$name = 'Елена';
$age = 32;
print("Меня зовут $name");
echo '<br>';
print("Мне $age года");
echo '<br>';
print('"!|/’"\ ');

// Задание #2
const DRAWINGS = 80;
const FELT_TIP_DRAWINGS = 23;
const PENCIL_DRAWINGS = 40;
echo '<br>';
print("Красками было нарисовано".(DRAWINGS - FELT_TIP_DRAWINGS - PENCIL_DRAWINGS)."рисунков");

// Задание #3
$age = rand(-100, 100);
echo '<br>';
if($age >= 18 && $age <= 65) {
    print('Вам еще работать и работать');
} elseif($age > 65) {
    print('Вам пора на пенсию');
} elseif($age >= 1 && $age < 18) {
    print('Вам ещё рано работать');
} else {
    print('Неизвестный возраст');
}

// Задание #4

$day = rand(0, 10);
echo '<br>';
switch($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        print("Это рабочий день");
        break;
    case 6:
    case 7:
        print("Это выходной день");
        break;
    default:
        print("Неизвестный день");
}

// Задание #5

$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
];

$toyota = [
    'model' => 'Fortuner',
    'speed' => 120,
    'doors' => 5,
    'year' => '2019'
];

$opel = [
    'model' => 'Astra',
    'speed' => 100,
    'doors' => 4,
    'year' => '2014'
];

$cars = ['bmv' => $bmw,'toyota' => $toyota, 'opel' => $opel];

foreach ($cars as $key => $value) {
    echo '<br>';
    print("CAR $key");
    echo '<br>';
    echo implode($value);
    echo '<br>';

}

// Задание #6
// четное + четное = четное
// нечетное + нечетное = четное

echo '<br>';
?>


<table>
    <?php for ($j=1; $j <= 10; $j++) : ?>
        <tr>
            <?php
            for ($i=1; $i <= 10; $i++) : ?>
                <td><?php
//                    if($i % 2 === 0 && $j % 2 === 0) {
//                        print("(".($i * $j).")");
//                    } elseif($i % 2 !== 0 && $j % 2 !== 0) {
//                        print("[".($i * $j)."]");
//                    } else {
//                        print($i*$j);
//                    }

                    if(($i + $j) % 2 === 0) {
                       if($i % 2 === 0) {
                           print("(".($i * $j).")");
                       } else {
                           print("[".($i * $j)."]");
                       }
                    } else {
                        print($i*$j);
                    }
                    ?>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

