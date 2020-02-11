<?php
$n = 0;

if (!empty($_POST)) {
    $n = trim($_POST['number']);
}

function createLogo($n)
{
    $star = "*";
    $dash = "_"; //I use the lower dash because it looks better!
    $error_msg1 = '<div class="alert alert-danger" >Please use only odd numbers between 3 and 10 000!</div>';

    if ($n < 2 || $n > 10000 || $n % 2 == 0 || !preg_match('/^[0-9 ]/',$n)) {

        echo $error_msg1;

    } else {

    echo '<h3>N = ' . $n . '</h3><br>';

    for ($i = 0; $i < ($n + 1) / 2; $i++) {
        for ($j = 0; $j < 2; $j++) {
            echo str_repeat($dash, $n - $i);
            echo str_repeat($star, $n + $i * 2);
            echo str_repeat($dash, $n - $i * 2);
            echo str_repeat($star, $n + $i * 2);
            echo str_repeat($dash, $n - $i);
        }
        echo "<br>";
    }

    for ($i = ($n - 1) / 2; $i >= 0; $i--) {
        for ($j = 0; $j < 2; $j++) {
            echo str_repeat($dash, $i);
            echo str_repeat($star, $n);
            echo str_repeat($dash, $n - $i * 2);
            echo str_repeat($star, $n + $i * 2);
            echo str_repeat($dash, $n - $i * 2);
            echo str_repeat($star, $n);
            echo str_repeat($dash, $i);
        }
        echo "<br>";
    }
}
    echo '<br><br>';
}

createLogo($n);


