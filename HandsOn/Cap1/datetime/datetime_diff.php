<?php

echo "<pre>";
$dt1 = new DateTime();
$dt2 = new DateTime("2016-09-10"); //vencimento boleto

$diferenca = $dt1->diff($dt2);
print_r($diferenca);
echo $diferenca->format("%R %m Mes(es) %d dias");
echo "<br />";
echo $diferenca->format("%R %a dias");