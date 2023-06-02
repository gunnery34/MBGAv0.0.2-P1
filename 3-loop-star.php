<?php
//! Pola Segitiga
echo 'Pola Segitiga<br />';
$rows = 5;
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}


echo '<br /><br /><br />';


//! Pola Segitiga Terbalik
echo 'Pola Segitiga Terbalik<br />';
$rows = 5;
for ($i = $rows; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}


echo '<br /><br /><br />';


//! Pola Ketupat
echo 'Pola Ketupat<br />';
$rows = 5;
$spaces = $rows - 1;
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $spaces; $j++) {
        echo "&nbsp;&nbsp;";
    }
    $spaces--;

    for ($j = 1; $j <= 2 * $i - 1; $j++) {
        echo "* ";
    }
    echo "<br>";
}
$spaces = 1;
for ($i = $rows - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $spaces; $j++) {
        echo "&nbsp;&nbsp;";
    }
    $spaces++;

    for ($j = 1; $j <= 2 * $i - 1; $j++) {
        echo "* ";
    }
    echo "<br>";
}