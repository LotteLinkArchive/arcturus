<?php require("component/header.php"); ?>
		<h2>Source Info</h2>
		<p>
			Here's some general information related to contributing to my projects and writing code.
			Hopefully you find this useful.
		</p>
		<h3>Contributing</h3>
		<p>
			Anyone is free to provide me with suggestions for my code. You can submit issues via the Gitea
			web interface, and these issues can range from feature requests to bugs to questions, as long as
			they aren't spam or generally annoying.
		</p>
		<p>
			Many of my projects are open source, so you're free to read them for yourself if you'd like some
			inspiration (I have no idea why you'd use my code as a source of inspiration, but here we are).
		</p>
		<p>
			If you know C, you could even look into contributing to some of my recent projects, such as the
			<a href="https://git.lotte.link/naphtha/HAZE">HAZE Game Engine</a> for example. Hell, you can
			submit code contributions to any of my projects if you'd like. See their READMEs for more
			information. I've done quite a few things, and in a lot of different languages, so I'm sure you
			can find something there that you like the look of.
		</p>
		<h4>Security Vulnerability Disclosure</h4>
		<p>
			If you've discovered a serious security flaw in one of my projects, please
			<a href="contact.php">contact me</a> as soon as possible with everything you know and all the
			details you feel the need to provide.
		</p>
		<p>
			If you don't think the implications are that wide, and you trust other people to fix the issue
			rather than exploit it, you can post it on the Gitea issue tracker for that project/repository.
			Let's be fair though, the vast majority of security vulnerabilities are serious, because they're
			security vulnerabilities - it's literally in the name. So you should try to contact me directly
			most of the time.
		</p>
		<p>
			Once I've discovered and fixed a vulnerability in my code, I'll be sure to disclose it on this
			site and encourage people to update. With that said, let's try and minimize the amount of times
			a critical situation like this happens by doing our very best to write code that avoids these
			issues. Of course, it's exceedingly difficult (if not completely impossible) to write something
			that is totally impossible to exploit, but we sure as hell need to try. It's our duty.
		</p>
		<h3>Using Gitea</h3>
		<p>
			So, I self-host a <a href="https://gitea.io/">Gitea</a> instance at
			<a href="https://git.lotte.link/"><code>git.lotte.link</code></a>, and I like it a lot. It's
			pretty reliable, there aren't way too many features to make it as bloated as GitLab, and it
			gives me more control and peace of mind than GitHub. So, in other words, it's easier to use
			and more flexible than cgit, but not as overcomplicated as GitLab, which is exactly what I need.
		</p>
		<p>
			There's just one problem - it doesn't work in every browser, because some features require
			JavaScript as well as HTML and CSS features that don't play well with browsers like Netsurf
			and Dillo.
		</p>
		<p>
			Now, most of the time, I do have access to a browser like Firefox or Chromium, but as you can
			imagine, I don't enjoy using them. It would be nice if the Gitea developers could create a
			configuration option that forces Gitea to look more like the average cgit or Trac installation
			while retaining the same functionality, but I doubt that'll happen.
		</p>
		<p>
			So, if you can't use one of those awful modern browsers, rest assured that the majority of the
			interface is not overly important, and you can still interface with almost everything using a
			local Git client. There's also <a href="https://gitea.com/gitea/tea">this tool</a> which claims
			to be able to interface with Gitea servers in the terminal to allow you to continue using some
			of the Gitea-specific features without actually opening a web browser.
		</p>
		<p>
			Eventually, I might switch to something else if it manages to improve on my experience with
			Gitea. It should also be noted that Gitea does work with KHTML and WebKit, so you're not limited
			to just using Chromium and Firefox.
		</p>
<?php require("component/footer.php"); ?>
