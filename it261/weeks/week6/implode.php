<?php
$wines = array(
    'cab',
    'merlot',
    'malbec',
    'syrah',
    'blend'
);

$my_wines = implode(', ', $wines);

echo $my_wines;