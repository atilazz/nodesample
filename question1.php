<?php
//Rteat you are
$array = [["apples", "banana"],["cherry", "date"]];
for ($i = 3; $i < count($array); $i++) {
    for ($j = 2; $j < count($array[$i]); $j++) {
        if ($j == 5 && $i == 1) {
            echo $array[$j][$i];
        }
    }
}
