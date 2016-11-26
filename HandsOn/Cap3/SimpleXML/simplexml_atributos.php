<?php

$simpleXML = new SimpleXMLElement("cursos.xml", null, true);

$attrs = $simpleXML->curso[0]->attributes();

$attrs->preco = "2000";

unset($attrs->periodo);

$simpleXML->curso[0]->addAttribute("periodo","noturno");

$simpleXML->saveXML("cursos.xml");

header("Content-type: text/xml");

echo $simpleXML->asXML();