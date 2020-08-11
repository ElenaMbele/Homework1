<?php

function task1 (array $strings, bool $boolean = false)
{
    foreach ($strings as $string) {
        print("<p>$string</p>");
    }

    if($boolean) {
        return implode(" ", $strings);
    }
}

function task2(string $action, ...$args)
{
    switch ($action) {
        case '+':
            return array_sum($args);
        case '-':
            return array_shift($args) - array_sum($args);
        case '*':
            $result = 1;
            foreach ($args as $arg) {
                $result = $result * $arg;
            }
            return $result;

        case '/':
            $result = array_shift($args);
            foreach ($args as $arg) {
                if($arg == 0) {
                    print('Нельзя делить на ноль');
                    break;
                }
                $result = $result / $arg;
            }
            return $result;
        default:
            print('Операция не определена');
    }
}

function task3($a, $b)
{
    if(is_int($a) && is_int($b)) {
        ?>

        <table>
            <?php for ($j=1; $j <= $a; $j++) : ?>
                <tr>
                    <?php
                    for ($i=1; $i <= $b; $i++) : ?>
                        <td><?php print($i*$j); ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>

        </table>
        <?php
    } else {
        print('Введите пожалуйста целые числа');
    }

}

