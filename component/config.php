<?php
$charset = "utf-8";
$mime = "text/html";
$lang = 'en';
$glname = 'LotteLink';

if (!isset($ptitle)) {
	$ptitle = 'Document';
}

if (!isset($html5)) {
	$html5 = false;
}

$navel = array(
	"About" => array(
		"Home" => "/",
		"About Me" => "/about.php",
		"Contact Me" => "/contact.php"
	),
	"Services" => array(
		"Onion Services" => "/onion.php",
		"Matrix" => "https://matrix.lotte.link",
		"Element" => "https://riot.lotte.link"
	),
	"Source Code" => array(
		"Gitea Web" => "https://git.lotte.link",
		"Source Info" => "/sourceinfo.php",
	),
	"Friends" => array(
		"Crossroads" => "https://crossroads.lotte.link"
	),
	"Resources" => array(
		"FAQ" => "/faq.php",
		"Commercial Support" => "/support.php",
		"PGP Keys" => "/pgp.php"
	),
	"Supporting Me" => array(
		"Donate" => "/donate.php"
	)
);

$logocycle = array("/assets/logos/crudely_traced_lotte.png");
?>
