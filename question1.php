<?php
$array = [["apple", "banana"],["cherry", "date"]];
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        if ($j == 1 && $i == 1) {
            echo $array[$j][$i];
        }
    }
}
