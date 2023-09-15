
<?php
echo "Question 1";
echo "<br>";
echo "<br>";
echo "<br>";

$a = 2;
$b = 12;
$r = $a + $b;

echo $a . "+" . $b . "=" . $r . "\" by echo\"";
echo "<br>";

echo "\$a+\$b=$r \"by echo\"";
echo "<br>";
echo "<br>";
echo "<br>";

print $a . "+" . $b . "=" . $r . '" by print"';
echo "<br>";
print " \$a+\$b=14 \"by print\"";


echo "<br>";
echo "<br>";
echo "<hr>";


echo "Question 2";


echo "<br>";
echo "<br>";
echo "<br>";



echo ucwords("Les chaines de caractères");

echo "<hr>";
echo "<br>";
echo "<br>";
echo "Question 3";
echo "<br>";
echo "<br>";
echo "<br>";

$chapitre = "Chapitres";
$page = "pages";
$structure = "Structures de base";
$classe = "Les classes";
$un = "1";
$cinq = "5";
echo "<pre><br><hr>";
echo str_pad("Chapitres", 20, " "), str_pad("Pages", 20, " ", STR_PAD_LEFT), "<br>";
echo str_pad($structure, 20, " "), str_pad($un, 20, ".", STR_PAD_LEFT), "<br>";
echo str_pad($classe, 20, " "), str_pad($cinq, 20, ".", STR_PAD_LEFT), "<br>";
echo "</pre><hr>";

echo "<pre>";
echo htmlspecialchars("<ul>
<li>item 1</li>
<li>item 2</li>
</ul>");
echo "</pre><hr>";




echo "<hr>";
echo "<br>";
echo "<br>";
echo "Exercice 2";
echo "<br>";
echo "<br>";
echo "<br>";

$table = array(
    "Said" => 13,
    "Badr" => 16,
    "Najat" => 15

);

$table["Karim"] = "10";



unset($table["Badr"]);
print_r($table);
echo "<br>";

echo (max($table));
echo "<br>";
echo (min($table));


echo "<br>";

ksort($table);
print_r($table);

echo "<br>";

sort($table);
print_r($table);

echo "<br>";

sort($table);
print_r($table);
echo "<br>";
echo "<br>";
foreach ($table as $key => $value) {
    echo "la note de l'étudiant $key est : $value <br>";
};

echo "<br>";
echo "<br>";


$moyenne = array_sum($table) / count($table);
echo "la moyenne des élève de la classe est =" . ($moyenne);
