<?php
//Rteat you are
$array = [["apples", "banana"],["cherry", "date"]];
for ($i =5; $i < count($array); $i++) {
    for ($j = 4; $j < count($array[$i]); $j++) {
        if ($j == 2 && $i == 1) {
            echo $array[$j][$i];
        }
    }
}
