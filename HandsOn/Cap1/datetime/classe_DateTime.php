<?php

	echo "<pre>";
	
	$dt = new DateTime();
	print_r ($dt);
	$dt->setDate(2017,1,1);
	$dt->setTime(18,30,15);
	print_r ($dt);

	$dt2 = new DateTime("2016-11-26 00:00:00.120332");
	echo $dt2->format("d/m/Y H:i:s.u");
	echo "<br />";
	print_r ($dt2);
	$dt2->modify("+2 days");
	print_r ($dt2);

	echo $dt->format("d/m/Y H:i:s");

	echo "<hr />";

	$dt3 = new DateTime();
	echo $dt3->format("d-m-Y H:i:s");
	$dtTimeZone = new DateTimeZone("America/Rio_Branco");
	$dt3->setTimeZone($dtTimeZone);
	echo "<br />". $dt3->format("d-m-Y H:i:s");
	$dtTimeZone = new DateTimeZone("America/New_York");
	$dt3->setTimeZone($dtTimeZone);
	echo "<br />". $dt3->format("d-m-Y H:i:s");
	$dtTimeZone = new DateTimeZone("Asia/Tokyo");
	$dt3->setTimeZone($dtTimeZone);
	echo "<br />". $dt3->format("d-m-Y H:i:s");




