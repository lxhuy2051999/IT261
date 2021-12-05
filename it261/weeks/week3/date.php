<?php
echo date("l jS \of F Y h:i:s A");
echo '<br>';
echo date("H:i:s A");
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo date("H:i:s A");


$time = date("H:i");
if ($time <= 11) {
    echo '<h2 style="color:yellow;">Good Morning, Huy</h2>';
} elseif ($time <= 16) {
    echo '<h2 style="color:lightblue;"> Good Afternoon, Huy</h2>';
} else {
    echo '<h2 style="color:purple;">Good Evening, Huy</h2>';
}
