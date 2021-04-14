<?php require("component/header.php"); ?>
		<h2>Onion Services</h2>
		<p>
			We provide a few alternative ways to access our services. Right now, we've only really looked at
			supporting <a href="https://www.torproject.org/">Tor</a>, but if you have any suggestions, you
			can <a href="contact.php">contact us</a> about it.
		</p>
		
		<ul>
			<li>Gitea { <a href="http://k2e5rjjfagjdzyf7jvboxtmpe3depesai3u34yohpd7agkzvjfiq5vid.onion">.onion</a> }</li>
			<li>Matrix Homeserver { <a href="http://7azjwhrpvnljzw5yew2qwvcmv2qu4nw7i3cjrsmqrwx2yf5zx6em5iqd.onion">.onion</a> }</li>
			<li>Tor Element Client* { <a href="http://2k7lxwwgypjssmk32fdlzfozqh6tkuvka2mzk33kl4o4tdswn5qnxnid.onion">.onion</a> }</li>
		</ul>
		
		<p><i>
			*The Tor Element Client is similar to the regular Element client, but all of the homeserver
			addresses are replaced with their Onion-address equivalents. (e.g <code>matrix.lotte.link</code>
			becomes <code>7azjwhrpvnljzw5yew2qwvcmv2qu4nw7i3cjrsmqrwx2yf5zx6em5iqd.onion</code>)
		</i></p>
<?php require("component/footer.php"); ?>
