<?php require("component/header.php"); ?>
		<h2>PGP</h2>
		<p>
			My current key is <a href="./pgp/00E6778C91FF0D5A.asc"><code>00E6 778C 91FF 0D5A</code></a>.
			You can use it to encrypt messages you send to me, or to verify any of my signed messages.
		</p>
		
		<div class="shiftbox warnbox">
			<p>
				<b>Warning:</b> My key is ECC-only. You must have GnuPG 2.0 or newer or another compatible PGP program.
			</p>
		</div>
		
		<p>
			You can also take a look at my <a href="https://keybase.io/naphtha/">Keybase</a> if you'd like.
		</p>
		
		<p>
			When you contact me using PGP, you <b>must</b> provide a public key and a valid email address.
		</p>
		
		<h3>Subkeys</h3>
		
		<p>Subkeys may expire after a certain period of time, usually 1 year. These may be revoked and created at any time.</p>

		<ul>
		<li>
			<code>C ed25519/0x00E6778C91FF0D5A</code>, master key
		</li>
		<li>
			<code>S ed25519/0x00CE626926B009BA</code>, <a href="devices.php#satella">satella</a>
		</li>
		<li>
			<code>E cv25519/0xC2E89D069734F339</code>, <a href="devices.php#satella">satella</a>
		</li>
		<li>
			<code>A ed25519/0xE53A55525ED3D96A</code>, <a href="devices.php#satella">satella</a>
		</li>
		</ul>

		<h3>Revoked Keys</h3>
		
		<p>The keys and subkeys below are nolonger valid and should not be trusted.</p>
		
		<ul>
		<li>
			<a href="./pgp/8B4F90E9D76DCD8B-N.asc"><code>8B4F 90E9 D76D CD8B</code></a>
			<p>Superseded by <code>00E6 778C 91FF 0D5A</code> on the 28th of February, 2021.<sup><a href="./pgp/8B4F90E9D76DCD8B-O.asc">[Before]</a></sup></p>
		</li>
		</ul>

<?php require("component/footer.php"); ?>
