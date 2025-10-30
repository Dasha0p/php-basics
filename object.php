<?php


//b) izveido mainīgo, kurā glabājas objekts, kas reprezentē automašīnu ar trim atribūtiem: marku, modeli un gadu.
$car = (object)[
    " brand " => "Toyota",
    " model " => "Corolla",
    " year "  => 2012
];


//c) izvada automašīnas marku.
echo " Auto informācija\n ";
echo " Marka: ". $car -> brand . "\n";

$currentYear = date("Y");
$careAge = $$currentYear - $car -> year;


// d) pārbauda vai automašīna ir vecāka par 10 gadiem, vai nav.
if ( $carAge > 10) {
   echo(" Auto ir vecāks par 10 gadiem.\n");
} else {
  echo(" Auto nav vecāks par 10 gadiem.\n");
}
