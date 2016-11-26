<?php

	$dom = new DOMDocument();

	//Carregando por mei ode uma variavel
	$xml = file_get_contents("cursos.xml");

	$dom->loadXML($xml);

	var_dump($dom);

	//Carregando direto de um arquivo externo
	$dom->load("cursos.xml");

	var_dump($dom);

