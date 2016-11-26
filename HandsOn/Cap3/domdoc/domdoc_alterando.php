<?php

	$dom = new DOMDocument();
	$dom->load("cursos.xml");

	//print_r($dom->getElementsBytagName("curso"));

	$conteudo = $dom->getElementsBytagName("categoria");
	$conteudo->item(1)->nodeValue = "PHP"; //altera o valor da categoria do curso 501

	$dom->save("cursos.xml");
	
	header("Content-type: text/xml");

	print_r($dom->saveXML());