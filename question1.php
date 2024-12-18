<?php
//Rteat you
$array = [["apple", "banana"],["cherry", "date"]];
for ($i = 2; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        if ($j == 1 && $i == 4) {
            echo $array[$j][$i];
        }
    }
}
