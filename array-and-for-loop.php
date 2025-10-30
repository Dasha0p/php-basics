<?php

/// js // const fruits = ["ābols", "bānans", "apelsins", "vīnogrāds"];
/// for ( let i = 0; i <fruits.length; i++){
/// console.log(fruits[i]) ;
/// }

// php
//b) Masīvs ar augļiem.
$fruits =  ["ābols", "bānans", "apelsins", "vīnogrāds"];

//c) For cikls, kas izmanto masīvo garumu.
for ($i = 0; $i < count($fruits); $i ++){
     echo $fruits[$i] ."\n";
}
