<?php

$dom = new DOMDocument();
$dom->load("cursos.xml");
$xpath = new DOMXPATH($dom);

$retorno = $xpath->query("/cursos/curso[id='502']");

var_dump($retorno->item(0)->nodeValue);