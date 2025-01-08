<?php
//Rteat you
$array = [["appole", "banana"],["cherry", "date"]];
for ($i = 5; $i < count($array); $i++) {
    for ($j = 3; $j < count($array[$i]); $j++) {
        if ($j == 1 && $i == 2) {
            echo $array[$j][$i];
        }
    }
}
