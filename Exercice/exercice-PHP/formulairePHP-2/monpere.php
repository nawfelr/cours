<?php

echo ' Nombres pair entre 0 et 20';
echo "<br> <br>";



for ($i = 0; $i < 21; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
