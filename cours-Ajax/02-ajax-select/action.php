<?php


if (isset($_POST['voiture']) &&  strtolower($_POST['voiture']) == 'renault') {
    echo "<option> Clio</option> <option>Megan</option> <option>Kangoo</option>";
} else if (isset($_POST['voiture']) &&  strtolower($_POST['voiture']) == 'mercedes') {
    echo "<option>Class G</option> <option>Amg</option> <option>GLE</option>";
} else if (isset($_POST['voiture']) &&  strtolower($_POST['voiture']) == 'audi') {
    echo "<option>e-tron</option> <option>A4</option> <option>A3</option>";
}
