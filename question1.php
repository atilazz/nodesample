<?php
//Rteat you are
$array = [["apples", "banana"],["cherry", "date"]];
for ($i = 1; $i < count($array); $i++) {
    for ($j = 1; $j < count($array[$i]); $j++) {
        if ($j == 2 && $i == 1) {
            echo $array[$j][$i];
        }
    }
}
