<?php

for ($x = 0; $x <= 21; $x += 3) {
    echo "The number is: $x <br>";
}

for ($celcius = 0; $celcius <= 100; $celcius += 5) {
    $far = ($celcius * 9 / 5) + 32;
    $friendly_far = floor($far);
    echo '<br><b>Fahrenheit:</b> ' . $friendly_far . ' <b>Celcius:</b> <span style="color:red; font-weight:bold;">' . $celcius . '</span> <hr>';
}
