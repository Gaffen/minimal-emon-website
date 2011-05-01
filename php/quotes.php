<?php
	$quotes	= file('php/eco_quotes.txt');
	$total	= count($quotes);
	$random	= (rand() % $total);
	$quote	= "$quotes[$random]";
	echo
	"
	<div align=\"center\" id=\"quote\">
	<div align=\"center\">$quote</div>
	</div>
	";
?>