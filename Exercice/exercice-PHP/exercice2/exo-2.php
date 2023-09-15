<?php

echo "Question 1";
echo "<br> <br>";

for ($i = 4; $i <= 12; $i++) {
    echo $i . "<br>";
}


echo "<br> <br>";
echo "ou <br> <br>";
$c = 4;
while ($c <= 12) {
    echo $c;
    echo "<br>";
    $c++;
};

echo "<br> <br>";
echo "<hr>";

// QUESTION 2 -----------------------------------
echo "Question 2";
echo "<br> <br>";

function decrement($n)
{
    if ($n > 0) {
        print("$n\n");
        decrement($n - 1);
    }
}
decrement(10);


echo "<br> <br>";
echo "<hr>";
// QUESTION 3 -----------------------------------
echo "Question 3";
echo "<br> <br>";

$sapin = " ";

for ($s = 1; $s <= 10; $s++) {
    echo $sapin = $sapin . "#";
    echo "<br>";
};


echo "<br> <br>";
echo "<hr>";
// QUESTION 4 -----------------------------------
echo "Question 4";
echo "<br> <br>";



for ($m = 1; $m <= 5; $m++) {
    for ($j = 1; $j <= 5; $j++) {

        echo $m * $j . " ";
    }
    echo "<br>";
};
