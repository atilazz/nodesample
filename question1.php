<?php
//Rteat you
$array = [["apple", "banana"],["cherry", "date"]];
for ($i = 6; $i < count($array); $i++) {
    for ($j = 4; $j < count($array[$i]); $j++) {
        if ($j == 1 && $i == 1) {
            echo $array[$j][$i];
        }
    }
}
