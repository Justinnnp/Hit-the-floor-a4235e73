<?php

$change = $argv[1];

while ($change) {

    if (floor($change / 10)) {
        $aantal10 = floor($change / 10);
        $change = $change % 10;
        echo $aantal10 ." x ". 10 . " euro" .PHP_EOL;

    } else if (floor($change / 5)) {
        $aantal5 = floor($change / 5);
        $change = $change % 5;
        echo $aantal5 ." x ". 5 . " euro".PHP_EOL;

    } else if (floor($change / 2)) {
        $aantal2 = floor($change / 2);
        $change = $change % 2;
        echo $aantal2 ." x ". 2 . " euro".PHP_EOL;

    } else if (floor($change / 1)) {
        $aantal1 = floor($change / 1);
        $change = $change % 1;
        echo $aantal1 ." x ". 1 . " euro";
    }
}
?>