<?php
$charset = "utf-8";
$mime = "text/html";
$lang = 'en';
$glname = 'LotteLink';
$debug = false;
$upd = '008';

if (!isset($html5)) {
	$html5 = false;
}

$navel = array(
	"About" => array(
		"About Me" => "/index.php",
		"Contact Me" => "/contact.php"
	),
	"Services" => array(
		"Onion Services" => "/onion.php",
		"Matrix" => "https://matrix.lotte.link",
		"Element" => "https://riot.lotte.link"
	),
	"Software" => array(
		"Git" => "https://git.lotte.link",
		"Source Info" => "/sourceinfo.php",
		"Wiki" => "https://wiki.lotte.link"
	),
	"Resources" => array(
		"FAQ" => "/faq.php",
		"Support" => "/support.php",
		"PGP Keys" => "/pgp.php",
		"Devices" => "/devices.php"
	),
	"Supporting Me" => array(
		"Donate" => "/donate.php"
	)
);

$logocycle = array("/assets/logos/whale.svg");
?>
