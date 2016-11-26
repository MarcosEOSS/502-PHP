<?php

$dom = new DOMDocument();
$dom->load("cursos.xml");

$preco = $dom->getElementsByTagName("curso")->item(4)->getAttribute("preco");

$dom->getElementsByTagName("curso")->item(4)->setAttribute("periodo", "sabado");
$periodo = $dom->getElementsByTagName("curso")->item(4)->getAttribute("periodo");

echo $preco;
echo "<br />";
echo $periodo;
