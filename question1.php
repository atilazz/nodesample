<?php
//Rteat you
$array = [["apple", "banana"],["cherry", "date"]];
for ($i = 5; $i < count($array); $i++) {
    for ($j =2; $j < count($array[$i]); $j++) {
        if ($j == 1 && $i == 4) {
            echo $array[$j][$i];
        }
    }
}
