<?php require("prepare.php"); ?>
	<head>
		<meta http-equiv="Content-Type" content="<?php echo($mime); ?>; charset=<?php echo($charset); ?>" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
		
		<link rel="stylesheet" type="text/css" href="/assets/plex/css/ibm-plex.min.css" />
		<link rel="stylesheet" type="text/css" href="/assets/generic.css<?php if ($debug) { echo("?r=".rand()); } else { echo("?r=".$upd); } ?>" />
		<link rel="icon" href="/favicon.ico"/>
		<link rel="shortcut icon" href="/favicon.ico" />
		
		<title><?php if (isset($ptitle)) { echo($glname . ' - ' . $ptitle); } else { echo($glname); } ?></title>
	</head>
	<body id="project-main">
		<div class="main">
			<div class="nav">
				<a href="/">
					<span style="height: 155px; line-height: 155px;">
						<img src="<?php echo($logocycle[array_rand($logocycle, 1)]); ?>" width="155px" style="vertical-align: middle; margin-bottom: 0.25em;" alt="Logo" />
					</span>
				</a>
			
			<?php
			foreach ($navel as $header => $links) {
				?>
				<div class="header"><?php echo($header); ?></div>
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
			</div>
			<div class="article">
