<?php 
define('SITY1', 10);
define('SITY2', 500);
define('SITY1_RADIUS', 300);
define('SITY2_RADIUS', 320);
define('SPEED_SITY', 70);
define('SPEED_ROAD', 90);

for ($i = 1; $i < 11; $i++) {

    $carPlace = rand(0, (2 * (SITY1_RADIUS + SITY2_RADIUS + 50)));
    
    if ( ($carPlace < SITY1 - SITY1_RADIUS || $carPlace > SITY1 + SITY1_RADIUS) && ($carPlace < SITY2 - SITY2_RADIUS || $carPlace > SITY2 + SITY2_RADIUS) ) {
        //машиа не в первом городе
        $carSpeed = SPEED_ROAD;
        echo 'Машина '.$i.' едет за городом на '.$carPlace.' км со скоростью 90';
        echo "<br>";
    }
    else {
        $carSpeed = SPEED_SITY;
        echo 'Машина '.$i.' едет по городу на '.$carPlace.' км со скоростью 70';
        echo "<br>";
    }
}
