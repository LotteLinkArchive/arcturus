<?php require("component/header.php"); ?>
		<h2>Devices</h2>
		
		<p>Below is a (potentially incomplete) list of all of my current physical devices.</p>
		
		<h3 id="satella">satella</h3>
		
		<p>My current desktop, currently running <a href="https://www.gentoo.org/">Gentoo Linux</a> with the following enhancements and software: <i>(list may not be complete)</i></p>
		<ul>
			<li><a href="https://github.com/InBetweenNames/gentooLTO">gentooLTO</a></li>
			<li><a href="https://wiki.gentoo.org/wiki/Ccache">ccache</a></li>
			<li><a href="https://wiki.gentoo.org/wiki/GCC_optimization">The usual GCC optimizations</a> <i>(e.g <code>-march=native</code>)</i></li>
			<li><a href="https://wiki.gentoo.org/wiki/OpenRC">OpenRC</a></li>
			<li><a href="https://wiki.gentoo.org/wiki/SELinux">SELinux</a></li>
			<li><a href="https://github.com/gentoo/libressl">LibreSSL</a></li>
			<li><a href="https://wiki.gentoo.org/wiki/Dm-crypt">dm-crypt</a> (<a href="https://wiki.gentoo.org/wiki/Full_Disk_Encryption_From_Scratch_Simplified">More useful LUKS information</a>)</li>
			<li><a href="https://wiki.gentoo.org/wiki/SSD">Gentoo SSD Tweaks</a></li>
			<li><a href="https://wiki.gentoo.org/wiki/Doas">doas</a></li>
			<li><a href="https://wiki.gentoo.org/wiki/Hardened_Gentoo">Hardened Gentoo</a></li>
			<li><a href="https://wiki.gentoo.org/wiki/Enlightenment">Enlightenment</a> including all of its utilities (e.g <a href="https://packages.gentoo.org/packages/x11-terms/terminology">Terminology</a>) with additional alternative tools such as:
				<ul>
					<li><a href="https://packages.gentoo.org/packages/xfce-base/thunar">Thunar</a></li>
					<li><a href="https://packages.gentoo.org/packages/dev-util/geany">Geany</a></li>
					<li><a href="https://github.com/tie/oneko">oneko</a> <i>(When I'm bored)</i></li>
				</ul>
			</li>
			<li><a href="https://jurta.org/en/prog/noblink#tocAnchor-1-29">No blinking</a> <i>(Why is this so goddamn hard?)</i></li>
			<li><a href="https://wiki.gentoo.org/wiki/Portage_TMPDIR_on_tmpfs">Portage TMPDIR on tmpfs</a>
				<ul>
					<li><b><code>/etc/fstab</code></b>
					<pre>tmpfs /tmp tmpfs size=12G 0 0
tmpfs /var/tmp/portage tmpfs size=24G,uid=portage,gid=portage,mode=775,nosuid,noatime,nodev 0 0</pre>
					</li>
				</ul>
			</li>
			<li><a href="https://wiki.gentoo.org/wiki/Zram">zram</a></li>
			<li><a href="https://wiki.gentoo.org/wiki/JACK">JACK</a> <i>(Including the janky PulseAudio fallback)</i></li>
			<li><a href="https://packages.gentoo.org/useflags/pgo">Profile-Guided Optimization</a></li>
			<li><a href="https://wiki.gentoo.org/wiki/NVIDIA/nvidia-drivers">NVIDIA Proprietary Drivers</a> <i>(Real talk, are they ever gonna make this open source?!)</i></li>
			<li><a href="https://wiki.gentoo.org/wiki/Firefox">Firefox</a> with the following extensions:
				<ul>
					<li><a href="https://github.com/kkapsner/CanvasBlocker">CanvasBlocker</a></li>
					<li><a href="https://git.synz.io/Synzvato/decentraleyes">Decentraleyes</a></li>
					<li><a href="https://github.com/mozilla/contain-facebook">Facebook Container</a> <i>(Installed by default, I don't actually need or use Facebook)</i></li>
					<li><del><a href="https://github.com/EFForg/https-everywhere">HTTPS Everywhere</a></del> <i>(Replaced with Request Control)</i></li>
					<li><a href="https://github.com/tumpio/requestcontrol">Request Control</a></li>
					<li><a href="https://github.com/gorhill/uBlock">uBlock Origin</a> (<a href="https://github.com/uBlockOrigin/uBlock-issues/wiki/Blocking-mode:-hard-mode">Hard Mode</a> and <a href="https://github.com/gorhill/uBlock/wiki/Advanced-user-features">Advanced Mode</a>)</li>
					<li><code>about:config</code> options <i>(incomplete, if not listed assume default)</i>:
						<ul>
							<li><code>app.normandy.enabled = false</code></li>
							<li><code>browser.cache.disk.enable = false</code></li>
							<li><code>browser.contentblocking.category = "strict"</code></li>
							<li><code>browser.newtabpage.enabled = false</code></li>
							<li><code>browser.ping-centre.telemetry = false</code></li>
							<li><code>browser.sessionstore.enabled = false</code></li>
							<li><code>browser.startup.homepage = "about:blank"</code></li>
							<li><code>browser.tabs.tabMinWidth = 0</code></li>
							<li><code>datareporting.healthreport.uploadEnabled = false</code></li>
							<li><code>datareporting.policy.dataSubmissionEnabled = false</code></li>
							<li><code>gfx.webrender.all = true</code></li>
							<li><code>layout.css.backdrop-filter.enabled = true</code></li>
							<li><code>network.dns.disablePrefetch = true</code></li>
							<li><code>network.predictor.enabled = false</code></li>
							<li><code>network.prefetch-next = false</code></li>
							<li><code>privacy.donottrackheader.enabled = true</code></li>
							<li><code>privacy.resistFingerprinting = true</code></li>
							<li><code>privacy.trackingprotection.enabled = true</code></li>
							<li><code>privacy.trackingprotection.socialtracking.enabled = true</code></li>
							<li><code>privacy.userContext.enabled = true</code></li>
							<li><code>security.app_menu.recordEventTelemetry = false</code></li>
							<li><code>security.cert_pinning.enforcement_level = 2</code></li>
							<li><code>security.certerrors.recordEventTelemetry = false</code></li>
							<li><code>security.identitypopup.recordEventTelemetry = false</code></li>
							<li><code>security.protectionspopup.recordEventTelemetry = false</code></li>
							<li><code>security.ssl.require_safe_negotiation = true</code></li>
							<li><code>security.ssl.treat_unsafe_negotiation_as_broken = true</code></li>
							<li><code>security.ssl3.rsa_des_ede3_sha = false</code></li>
							<li><code>toolkit.legacyUserProfileCustomizations.stylesheets = true</code>
								<ul>
									<li><b><code>~/.mozilla/firefox/*.default-esr/chrome/userChrome.css</code></b>
									<pre>.tabbrowser-tab {
  min-width: 0px !important;
}</pre>
									</li>
								</ul>
							</li>
							<li><code>toolkit.telemetry.archive.enabled = false</code></li>
							<li><code>toolkit.telemetry.bhrPing.enabled = false</code></li>
							<li><code>toolkit.telemetry.firstShutdownPing.enabled = false</code></li>
							<li><code>toolkit.telemetry.newProfilePing.enabled = false</code></li>
							<li><code>toolkit.telemetry.reportingpolicy.firstRun = false</code></li>
							<li><code>toolkit.telemetry.shutdownPingSender.enabled = false</code></li>
							<li><code>toolkit.telemetry.unified = false</code></li>
							<li><code>toolkit.telemetry.updatePing.enabled = false</code></li>
							<li><code>ui.prefersReducedMotion = 1</code></li>
							<li><code>ui.caretBlinkTime = 0</code></li>
							<li><code>image.animation_mode = "none"</code></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="https://github.com/Nheko-Reborn/nheko">Nheko Reborn</a> <i>(This chat client is truly awful, almost unusable, but at least it's better than Discord)</i></li>
			<li><a href="https://github.com/Ademan/xrestrict">xrestrict</a> <i>(Required for my graphics tablet)</i></li>
		</ul>
		
		<div class="shiftbox warnbox">
			<p>
				<b>Warning:</b> This is how I like <i>my</i> system configured, and you might not agree with a lot of my choices. I've tried to leave out as much of the "dangerous" or "really specific" stuff as possible, but still - this is how I like it, not how you might like it.
			</p>
		</div>
		
		<p>Satella has the following hardware specifications:</p>
		
		<table class="vitable" width="100%">
			<thead class="vitable-head">
				<tr>
					<th>Component Type</th>
					<th>Component Manufacturer</th>
					<th>Component Model</th>
					<th>Component Notes</th>
				</tr>
			</thead>
			<tbody class="vitable-body">
				<tr>
					<td>Processor</td>
					<td>AMD</td>
					<td>Ryzen 5 3600</td>
					<td><a href="https://www.cpu-world.com/CPUs/Zen/AMD-Ryzen%205%203600.html">CPU-World Article</a></td>
				</tr>
				<tr>
					<td>Memory</td>
					<td>Corsair</td>
					<td>4 x <code>CMK32GX4M2D3000C16</code></td>
					<td><p>Totals to 65535 MB</p><p><a href="https://www.corsair.com/us/en/Categories/Products/Memory/VENGEANCE%C2%AE-LPX-32GB-%282-x-16GB%29-DDR4-DRAM-3000MHz-C16-Memory-Kit---Black/p/CMK32GX4M2D3000C16">Corsair Product Page</a></p></td>
				</tr>
				<tr>
					<td>Graphics Processing Unit</td>
					<td>NVIDIA</td>
					<td>GP106 [GeForce GTX 1060 6GB]</td>
					<td><a href="https://www.techpowerup.com/gpu-specs/geforce-gtx-1060-6-gb.c2862">TechPowerUp Article</a></td>
				</tr>
				<tr>
					<td>Storage</td>
					<td>Sabrent</td>
					<td>Rocket Q 1 TB</td>
					<td><p>1000204886016 accessible octets</p><p><a href="https://www.sabrent.com/rocket-q/">Sabrent Product Page</a></p><p><i>NOTE: The TBW figure provided by the manufacturer is extremely low. This drive really isn't robust at all. Avoid it!</i></p></td>
				</tr>
				<tr>
					<td>CPU Cooler</td>
					<td>ARCTIC</td>
					<td>Freezer A13 X CO</td>
					<td><a href="https://www.arctic.de/en/products/cooling/cpu-cooler/">ARCTIC Website</a></td>
				</tr>
				<tr>
					<td>Case</td>
					<td>Aerocool</td>
					<td>QS-180</td>
					<td><a href="https://aerocool.io/product/qs-180/">Aerocool Product Page</a></td>
				</tr>
				<tr>
					<td>Mouse</td>
					<td>Easterntimes Tech</td>
					<td>T7</td>
					<td><a href="https://www.game-debate.com/mouse/index.php?mo_id=1653&amp;mouse=Easterntimes%20Tech%20T7">Game Debate Review</a></td>
				</tr>
				<tr>
					<td>Keyboard</td>
					<td>Logitech</td>
					<td>K120</td>
					<td><a href="https://www.logitech.com/en-us/products/keyboards/k120-usb-standard-computer.html">Logitech Product Page</a></td>
				</tr>
				<tr>
					<td>Graphics Tablet</td>
					<td>GAOMON</td>
					<td>M10K</td>
					<td><a href="https://www.gaomon.net/Pen_Tablet/M10K_2018.html">GAOMON Product Page</a></td>
				</tr>
				<tr>
					<td>Headphones</td>
					<td>Audio-Technica</td>
					<td>ATH-M50xWH</td>
					<td><a href="https://www.audio-technica.com/en-us/ath-m50x">Audio-Technica Product Page</a></td>
				</tr>
			</tbody>
		</table>
		
		<h3 id="pandora">pandora</h3>
		
		<p>A Dell Poweredge R715 running <a href="https://www.proxmox.com/en/">Proxmox</a>, with <em>a lot</em> of virtual machines and containers. Maybe I'll list them all here at some point, but I doubt it.</p>
		
		<h3 id="papyrus">papyrus</h3>
		
		<p>Another desktop computer, also running Proxmox. It handles a <a href="https://www.pfsense.org/">pfSense</a> virtual machine (which has its own PCIe NIC dedicated to it), as well as a container running a <a href="https://pi-hole.net/">PiHole</a>. Honestly, I could probably get rid of the PiHole container, I don't really think it's particularly useful.</p>
		
		<h3 id="echidna">echidna</h3>
		
		<p>A Lenovo Thinkpad W530 running <a href="https://getfedora.org/">Fedora Linux</a>. I've had very little reason to use it during the Covid lockdowns, so it does spend a lot of time collecting dust nowadays (since I just use <a href="#satella">satella</a> while I'm at home), but before Covid I definitely depended on this machine a lot. When I need it again, I'll probably Gentoo-pill it too.</p>
		
		<h3 id="droopy">droopy</h3>
		
		<p>A Dell Vostro 1510 running <a href="https://www.bunsenlabs.org/">BunsenLabs Linux</a>. I hardly ever use this one, and it's in desparate need of better software (and a purpose). Other than that though, it's the best-condition laptop I own, which is amazing considering I bought it used for like £15. The previous owner must've been <em>extremely gentle</em> with this one...</p>
		
		<h3 id="tachikoma">tachikoma</h3>
		
		<p>My very first desktop computer - built it out of various spare parts, and still keep it today. It runs Windows 7 and its video output is passed to a capture device installed on <a href="#satella">satella</a>. I use this computer to experiment with things every now and then, and run any software that I'm too lazy to get working through Wine.</p>

		<h3 id="temmie">temmie</h3>
		
		<p>An Asus X5DIJ running... nothing. Completely zero-filled hard drive. I don't use this laptop anymore, because it suffers from numerous comedic faults, such as:</p>
		
		<ul>
			<li>The backlight visibly flickers, and the flickering gets more noticable the lower your brightness is. Interestingly the actual brightness doesn't change, just the duty cycle does. At the lowest brightness setting, the backlight will be disabled for 500msec and enabled for 500msec each second, which leads me to believe that the manufacturer might be a little confused on the limits of human perception.</li>
			<li>The battery (and all replacement batteries, interestingly) will become permanentely disabled if you do not charge them for 2 weeks. So if you don't use the laptop for 2 weeks, you have to replace the whole battery. Of course, I'm not going to do that, and I don't intend to take the laptop anywhere where it would need the battery anyway, so it doesn't matter.</li>
			<li>The charging brick it came with just sort of.. randomly stops working for a whole day. Yeah, it's pretty weird.</li>
			<li>The webcam is installed upside-down, and requires Windows-specific registry tweaks to rotate the video for all software. Of course you could fix this on Linux with OBS and v4l2loopback or something but... Ugh, why bother?</li>
			<li>The optical drive just sort of makes growling noises and doesn't read anything anymore. I haven't really looked into this one.</li>
			<li>Half of the RAM is soldered to the motherboard and half of it isn't. Why, God? Why?!</li>
			<li>The keyboard is impossible to clean and nearly impossible to remove thanks to modern laptop design. Oh, and you'd better not try and remove the keys, or they'll never go back on again (Not saying this from experience, I can just... feel it.)</li>
			<li>The power button only works <b>sometimes</b>. I don't think I can replace it. I don't think I want to.</li>
			<li>The hard drive in this thing might just be the clickiest one I own, I hate it. I also don't want to waste money on an SSD for this device, though.</li>
			<li>I think the CPU fan might be a little upset.</li>
			<li>WHY DOES THE ENTIRE DEVICE HAVE TO BE COVERED IN GLOSSY SURFACES?! THE WHOLE LAPTOP IS A DAMN MIRROR! IT'S SO DISTRACTING!</li>
		</ul>
		
		<p>That said, this is the only laptop I still own that has an actual number pad, so it's definitely got that going for it. Maybe I'll try and "repair" it at some point, just for that.</p>
		
		<h3 id="garfielf">garfielf</h3>
		
		<p>My second most powerful desktop computer, and the one I used before <a href="#satella">satella</a>. Current lacking a storage device.</p>
		
		<h3 id="pucku">pucku</h3>
		
		<p>My phone, a Huawei Honor 7X. I don't really like it, and at some point I intend to replace it with a <a href="https://www.pine64.org/pinephone/">Pinephone</a> (which will then be renamed to pucku too). I don't have enough money for that right now, so I'll just have to suffer the wrath of China.</p>
		
		<h3 id="ruby">ruby</h3>
		
		<p>Ruby is my old phone, a HTC Desire 610. I really can't use it anymore because the SIM reader's been damaged (and the software is probably well out of support now), but it <em>is</em> rooted, so sometimes I use it to experiment with things.</p>
		
		<h3 id="fry">fry</h3>
		
		<p>My Nexus 7, 2012-edition. Currently not functional, doubt I'll repair it, as it's far too slow to run even the latest version of Android it supports, and there aren't any Linux distros that'll run on it, as they typically only support the 2013 edition.</p>
		
<?php require("component/footer.php"); ?>
