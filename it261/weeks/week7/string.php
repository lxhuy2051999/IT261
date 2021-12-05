<?php

$statement = "Presently, I am reading The Looming Tower";
echo substr($statement,0);
echo '<br />';
echo $statement;
echo '<br />';
echo substr($statement,0,5);
echo '<br />';
echo substr($statement,0,15);
echo '<br />';
echo substr($statement,-5);
echo '<br />';
echo substr($statement,-15,5);

$statement2 = 'Hulu\' rendition of the Looming Tower based on the book, the Looming Tower.';
echo str_replace('the','The', $statement2);