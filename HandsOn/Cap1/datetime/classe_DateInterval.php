<?php

echo "<pre>";
$dt1 = new DateInterval("P16Y11M30D");
print_r($dt1);
echo $dt1->format("%y Anos, %m Meses, %d Dias");
