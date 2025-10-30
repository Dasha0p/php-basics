<?php


//b) Izveido funkciju "intSequence".
function intSequence ( $firs, $last) {
    for ($i = $first; $i <= $last; $i++) {
        echo $i . " ";
    }
     echo "\n";
}
//c) Izsauc funkciju 3 reizes ar sekojošiem argumentiem: 5 un 8, 1 un 10, 7 un 16.
echo "Funcijas intSequence rezulyāti:\n";
intSequence(5,8);
intSequence(1,10);
intSequence(7,16);
echo"\n";