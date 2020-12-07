<?php require("prepare.php"); ?>
	<head>
		<meta http-equiv="Content-Type" content="<?php echo($mime); ?>; charset=<?php echo($charset); ?>" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
		
		<link rel="stylesheet" type="text/css" href="/assets/generic.css" />
		<link rel="icon" href="/favicon.ico"/>
		<link rel="shortcut icon" href="/favicon.ico" />
		
		<title><?php echo($glname . ' - ' . $ptitle); ?></title>
	</head>
	<body id="project-main">
		<main>
			<nav>
				<a href="/">
					<img src="<?php echo($logocycle[array_rand($logocycle, 1)]); ?>" width="192px">
					</img>
				</a>
			
			<?php
			foreach ($navel as $header => $links) {
				?>
				<header><?php echo($header); ?></header>
				<ul>
				<?php
				foreach ($links as $title => $link) {
					?>
					<li><a href="<?php echo($link); ?>"><?php echo($title); ?></a></li>
					<?php
				}
				?>
				</ul>
				<?php
			}
			?>
			</nav>
			<article>
