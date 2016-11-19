<?php

echo "<pre>";
$dt1 = new DateTime();
$dt2 = new DateTime("2016-12-10"); //vencimento boleto

print_r($dt1);
echo"<br />";
print_r($dt2);
echo"<hr />";


if ($dt1 > $dt2){
	echo "Boleto Vencido";
}

if ($dt1 <= $dt2){
	echo "Boleto Valido";
}

if ($dt1 == $dt2){
	echo "Datas Iguais";
}