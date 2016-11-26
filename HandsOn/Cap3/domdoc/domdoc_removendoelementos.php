<?php

$dom = new DOMDocument();
$dom->load("cursos.xml");

$remover = $dom->getElementsByTagName("teste");

$remover->item(0)->parentNode->removeChild($remover->item(0));

$dom->save("cursos.xml");
header("Content-type: text/xml");

print_r($dom->saveXML());
