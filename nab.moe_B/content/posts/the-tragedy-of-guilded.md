---
title: "the tragedy of Guilded"
date: 2021-07-31T18:33:24+01:00
draft: false
---

welp, looks like this is gonna be my first post here! apologies if it's a little unstructued and ranty, there's a lot to say after all!

anyway if you haven't heard of it yet somehow, [Guilded](https://guilded.gg/) is a chat client that intends to replace [Discord](https://discordapp.com/). no, really. they're pretty serious about it. their motto is even "Drop Discord, Get Guilded" - it's pretty upfront if you ask me.

ironically back when Discord started out, their marketing material kept repeating things like "It's time to ditch Skype and Teamspeak." and in terms of media features and general usability alone, Discord really was better than Skype and Teamspeak. what Discord unfortunately neglected to acknowledge in their marketing was that in many ways, *Discord was actually a step backwards*:
- Teamspeak was significantly lighter on resources than Discord was. while you might scoff at this and encourage people to "just buy a new computer" - some people can't afford that, and maybe we shouldn't be trying to force them to, when they could be spending money on... you know... food. better yet, some people just don't want to deal with what feels like a massive amount of wasted system resources just to talk to their friends, even if they have a capable computer. even better than that, if we keep buying new computers because our old computers can't run basic software anymore, what do we with the old computers? let them pile up in landfills? the term for this is "e-waste" and most of it isn't really waste, it's just considered waste because programs like discord keep raising the bar for system requirements. [program efficiency is important](http://wowana.me/blog/why-program-efficiency-and-usability-matters.xht).
- Teamspeak allowed people to host their own servers, which was critical in ensuring that the web remained decentralised. Discord offers no way to self-host your own instance/server, which means you remain under the influence of Discord's Terms of Service at all times, and their employees have the ability to read all of your messages and even take control of your account, or terminate it (or even shadow ban it) altogether for bogus reasons - [this has happened before](https://cadence.moe/blog/2020-06-06-why-you-shouldnt-trust-discord), and there are plenty of reasons not to trust Discord with this power. While it may be convenient to be able to use Discord without paying for or setting up a server, that convenience comes with a significant price, *and it ought to be optional.*
- Teamspeak being open source meant that there were endless possibilities as far as customizing the client went, which Discord made impossible by deciding that alternative clients were against [their Terms of Service](https://discord.com/terms) and there have been high profile cases where [users were banned for using them](https://github.com/Bios-Marcel/cordless). some people actually need to customize the client (for accessibility purposes, for example) and since Discord does not provide users with much freedom beyond CSS overrides in the Chromium Developer Tools (which may still be against the ToS) the client can be outright unusable for many people.

keep all of these anti-features in your head for a moment. in the mean time, i want you to think about why Discord is still as popular as it is despite these issues, and importantly, i want you to think about what might've happened to all of the people who were *left out* by all of the flaws that made Discord unusable for them - [it's not like they don't exist](http://wowana.me/blog/living-without-discord.xht).

# so what's new with Guilded?

basically, imagine a carbon copy of Discord, but if all the Discord Nitro features were free. that and a few new organization tools, form posts, poll posts, slightly more detailed profiles- i don't really need to list it all, [they do a pretty good job of that themselves](https://support.guilded.gg/hc/en-us/).

so far so good though. it does actually sound kinda better than Discord, doesn't it? well... for most people, especially people who are used to Discord, it is quite an improvement - and that's nice. if all you ever did was *use* Guilded, and you never bothered to look any deeper than that, you'd probably just think you were using a slightly more robust version of [BetterDiscord](https://betterdiscord.app/). in fact, that was the goal all along - Guilded is marketed specifically towards the kinds of people who enjoyed BetterDiscord until Discord started threatening people with account terminations over it, and maybe that's not such a bad idea.

the trouble is, we live in a world where more often than not things like that end up being too good to be true. just like Discord ended up being a few steps back from systems like Teamspeak in ways the developers desperately tried to hide, Guilded suffers from its own set of unique anti-features that are drowned out by the constant  "free Nitro" hype surrounding the platform.

# my perspective

i came to Guilded earnestly hoping for a better experience. when i first heard about Guilded from a friend, i wondered if someone had genuinely made something that would fix all of the issues i had with Discord. so, already excited, it asked my friend if Guilded was open source, decentralised (or even outright peer to peer) with support for end-to-end encryption.

and they said no.

*Oh.*

normally i would've left it there. i hadn't even tried the program at that point, and since it didn't do *any* of the things i actually wanted from it, i didn't really pay it any attention.

...except on the 30th of July, 2021, something forced my hand. a friend of mine, [Blue](https://bassblitzed.net/), decided to migrate their Discord server over to Guilded (citing the extra features with no paywall as his motivation) and intended to make the old Discord server read-only upon completion. unfortunately the move was quite hasty, as it seems Blue didn't quite expect anyone to actually have significant issues with the software (little did he know, he was dealing with someone as insane as me!)

so, let's have a look at what went wrong...

# the downward spiral

Guilded being a carbon copy of Discord from the very start isn't neccessarily a bad thing. if i made a chat client, there are still plenty of ideas from Discord's design that i'd want to keep. i suppose the problem arises when Guilded attempts to copy Discord so closely that they actually inherit all of the issues Discord had. now, there are plenty of unique issues that Guilded presents, and i will certainly get to those (because they are arguably more important to this writeup than the problems with Discord most people are already aware of) but for now it might be helpful to put into perspective why Guilded copying Discord's design isn't as great as it seems: 

## the great centraliser

Guilded, of course, is still centralised. the company behind it has the capacity to do evil without anyone being able to stop them, *and no company should ever have that much power.* by making it impossible for users to host their own servers completely isolated from Guilded as a company, they have effectively ensured that they will always have full control over your posts, your privacy, and even your very presence on the platform. you have no reason to trust them with that power, just like you have no reason to trust Discord with that power.

## end to end encryption

Guilded have neglected to support end-to-end encryption, just as Discord has. end to end encryption is a method of preventing third parties such as Discord, the government, or people accessing Discord's servers maliciously from reading your messages. Discord's reasoning for excluding this can be found [on their subreddit](https://old.reddit.com/r/discordapp/comments/8nzb5d/why_is_discord_so_antiencryption/e001lr1/), but summarized: the reason why Discord (and presumably Guilded too) doesn't do end to end encryption is because they want to protect you from criminals. [wow, if only we could all agree on what a criminal actually is](https://en.wikipedia.org/wiki/LGBT_rights_in_Iran).

the whole point is that Discord should not have access to your messages because Discord should not have the *power* to do something like that regardless of whether or not they claim to just "not" read them. Discord is not an appropriate judge of good and evil (and frankly, nothing at that scale is) and the fact that in some countries you could actually get murdered by your government for something you said on Discord is utterly despicable.

of course, we all know the real reason Discord and Guilded both don't support this feature is because doing so wouldn't be *profitable*, as governments and advertising companies would pay good money for that data...

## web developer hell

Guilded is based on [Electron](https://www.electronjs.org/), the same programming tool that Discord is based on. for those who don't know, Electron is essentially a tool that allows you to turn programs that run in modern web browsers into programs that behave similarly to native programs. the simplest way to explain it is to say that Electron is basically like if you took the Google Chrome web broswer and removed the URL bar and tab list, and made it load a specific page every time you launched it. of course it's slightly more complicated than that (as Electron is actually based on [Chromium](https://www.chromium.org/), the open source browser that Google Chrome is based on, and Electron includes support for stuff like system tray icons and title bar customization and so on).

all of this might not sound too bad to someone unfamiliar with Electron, but the issue is that Electron-based software is typically very resource heavy. Chromium is *intended* to be a web browser, and as such it has an extremely large amount of code behind it that may be completely irrelevant to someone writing native programs. as well as this, Electron programs require **all** of the application logic to be written in an interpreted language known as JavaScript, which suffers from immense performance issues and results in much higher RAM usage than typical native programs).

Guilded, in my limited testing, can use around 2-5x the amount of RAM that Discord consumes doing roughly the same tasks, and will typically use between 0.6 and 3 GiB of RAM depending on what you're doing. there are many computers even in 2021 that still have 2-4 GiB of RAM because people cannot afford to upgrade *or haven't needed to until programs like Discord and Guilded specifically tried to force them to*. this kind of memory usage is unacceptable when there are chat clients out there such as [Gajim](https://gajim.org/) which offer a similar amount of features to Discord and use less than 30 MiB of memory, or an alternative Discord client called [Ripcord](https://cancel.fm/ripcord/) that manages with less than 128 MiB. of course, you can't actually safely use Ripcord, because you'll have to deal with the looming threat of having your entire account terminated.

![Guilded memory usage on Windows 10](/images/posts/guilded/ramw10.png "this was the memory usage reported by @FileFormat_png after installing the program on Windows 10")

the Guilded developers have [acknowledged](https://old.reddit.com/r/guilded/comments/otxyzp/i_really_want_to_join_guilded_but/h6yjosl/) that their client performs significantly worse than Discord, and have agreed to try to improve it, but i am skeptical as to how much improvements they can achieve while continuing to use Electron, as Discord claimed to be working on improving performance initially too, but it only ever got worse (hell, a friend of mine can barely use Discord on their laptop nowadays with it freezing constantly, whereas it was fairly usable just a few years ago). this is only from memory, but i also seem to recall Discord stating that they'd "eventually" transition away from using Electron as they considered the Electron client to be a prototype, but they never did. 

## stallman's worst nightmare

Guilded, just like Discord, is not free software. that's free as in freedom, not free as in free to use. Richard Stallman has aleady [complained extensively](https://stallman.org/discord.html) about why this is an issue for Discord (by the way, if the point about someone quitting Discord over reCAPTCHA on that Stallman article unironically makes you think "hah! what a pussy!" then... [watch this, buddy](https://www.nuegia.net/_-dNZrq2iK87k.mp4). then come back and tell me if you still think an aversion to using reCAPTCHA is unjustified).

basically, if you find a bug in Guilded, or something about Guilded upsets you, or you just want to change literally anything about the program, you... can't. if you want to figure out what the program is doing, how it works, and whether or not it is doing anything without your consent, you... can't. just suffer, basically. you can complain about it, but in the end you don't matter to Guilded, they do not care about you, and they will not change their program just because you asked nicely, because it's not *profitable*.

of course, Guilded certainly isn't alone here, but i'm one of those crazy people who thinks absolutely everything should be free and open source, [for very good reason](https://www.fsf.org/about/what-is-free-software), so being forced to use platforms like Discord and Guilded because nobody has the money, time or willpower to write a better alternative except for the corporations that write this junk in the first place is extremely depressing.

# so why does this matter?

okay, yeah, so all i've really demonstrated so far is that Guilded shares a lot of serious issues with Discord. so you might be thinking that using Guilded is still viable, because at this stage it still seems to provide advantages over Discord despite sharing a lot of issues with it. well, if you're thinking that, you've missed something.

one of the things Guilded seems to take pride in is the claim that they're not doing bad practices like Discord is, citing things like the branding overhaul Discord did recently. the truth is, because of the issues i mentioned above, Guilded is **destined** to make similar mistakes to Discord. think about it. many of the issues Discord keeps introducing could simply be avoided if Discord was free and open source, since you'd be able to fork it and revert or improve upon a lot of the changes yourself.

a lot of people have argued that Guilded currently has a small team who are always listening to feedback, and while this may be true right now as the project is relatively new, it won't be in the future if we allow it to grow. in fact, i highly doubt they actually do listen to feedback in the first place, but i'm going to explain *that* can of worms a little later, so just bear with me for now.

the point i'm trying to make here is that Guilded isn't really a solution to any of the problems that made people hate Discord. having to pay for Nitro sucked, but getting it for free ignores the crucial point that maybe we shouldn't let a single corporation dictate what features we're *allowed* to have in the first place. maybe we should have a system that lets us do whatever we want.

# okay, but what actually makes Guilded worse?

i'm glad you asked. i actually tried to use it, and it didn't quite end well. the following sections are mostly just an ordered description of every stage of me trying Guilded, and what went wrong at every step.

## installation

oh boy. this was the first major hurdle. i use Gentoo Linux, and Guilded's website doesn't provide a direct link to download GNU/Linux-related binaries, so your only option is to download a Debian package via this address: `https://guilded.gg/downloads/Guilded-Linux.deb`

![Guilded's homepage with JavaScript disabled](/images/posts/guilded/homepage.jpg "the only visible download options on the homepage are for MacOS, Windows and the iOS/Android app stores")

except... what if you're not on Debian? most proprietary software with GNU/Linux support will provide an AppImage so that the program will run on most distros, and although Discord didn't do this, they at least gave you a versioned tar archive to extract with the binaries included instead. Guilded does nothing of the sort. if you want to "install" it, the safest way to do it is to download the debian package and extract it with the `ar` command, and then extracting `data.tar.gz`, followed by executing `./opt/Guilded/guilded` whenever you want to use Guilded.

distros like Gentoo and Arch/Artix are unable to create working ebuilds/AUR packages that automatically download, extract and install this debian package for you, because - in case you hadn't noticed - that download link doesn't have a version number in it. both Gentoo and Arch insist that all packages downloaded like this must have a checksum corresponding to each version number, and since Guilded has no version number and their debian package is updated multiple times per day, the checksum stored alongside the AUR package or Gentoo ebuild is ***always*** invalid. this makes it virtually impossible for Gentoo or Arch users to install Guilded via regular means, and the same issues apply to a multitude of other distros that operate in roughly the same ways (e.g Fedora).

![screenshot of kyha on Reddit explaining how Guilded should version their packages](/images/posts/guilded/kyha_reddit.jpg "this is a post from the r/guilded subreddit where kyha explains how Guilded ought to provide their Debian packages")

and the best part is that once you've actually managed to execute Guilded somehow... the system tray icon is broken. it looks like you can only see the tray icon if you use you the GNOME desktop environment, which almost nobody i know actually uses. this might not have been such a big problem if it weren't for the fact that the tray icon is the *only* way you can gracefully exit the program without running `taskkill` on it. even worse, if you click the close button on the window, it assumes it has minimized itself to the tray icon, even though the tray icon doesn't exist, which means you can't un-hide the program anymore. it just sits there in the background taking up reasources and there's nothing you can do except kill it. if you try to launch another process, it just creates another instance of Guilded, and you gradually just accumulate them until your computer starts chugging so hard you can't even move your cursor anymore.

## accessibility

if you're somehow okay with the disaster of trying to install the damn thing and getting it to play nice with the rest of your system, now you've got another hurdle to worry about. do you have accessibility needs? reduced motion? colour blindness options? increased font size? increased UI zoom? higher colour contrast? a lighter or darker colour scheme? literally anything? too bad! Guilded has no appearance or accessibility tabs in its settings unlike Discord, they've essentially thrown anyone with accessibility needs under the bus. granted, Discord's options are a little broken (the reduced motion option doesn't prevent the typing indicator from animating, for example), but they at least *exist*, and that particular issue isn't too hard to fix with CSS overrides in the Chromium developer tools.

## Discord RPC

when you first install Guilded, it integrates with Discord and turns your Discord account into an advertisement for Guilded automatically without your consent. it's not permanent, it only changes your profile status, but the problem is that it's *opt-out*, not *opt-in*. these options are *enabled by default*. you need to go into the settings to *disable* them. they're riding on the hype so hard that they *expect* you to love their work and want to turn yourself into a billboard for it ***by default***...

## the privacy policy

take a look at this, found on Guilded's [core values page](https://support.guilded.gg/hc/en-us/articles/1500008644901-Our-Values):
![Guilded's "Core Values"](/images/posts/guilded/loveusers.jpg "this slide seems like normal corporate pandering at first, but don't you think it's odd that they bring up selling data specifically?")

whether or not Discord sells your data is up for debate. there's no way to really tell, but [their employees seem to claim they don't](https://news.ycombinator.com/item?id=20791163). even if they didn't right now, they'd likely be forced to do it eventually to pay back their investors, so either way it doesn't matter.

Guilded, however, is outright claiming in this marketing material that they don't sell data. well, let's have a look at their [privacy policy](https://support.guilded.gg/hc/en-us/articles/360039235054-Privacy) instead then, shall we?

oh dear...

> **Will Guilded share any of the Personal Information it receives?**
> We do not rent or sell your Personal Information in personally identifiable form to anyone, except as expressly provided below. We may share your Personal Information with third parties as described below:
> 
> **Information That’s Been De-Identified**: We may de-identify your Personal Information so that you are not identified as an individual, and provide that information to our partners. We may also provide aggregate usage information to our partners (or allow partners to collect that information from you), who may use such information to understand how often and in what ways people use our Services, so that they, too, can provide you with an optimal online experience. However, we never disclose aggregate usage or de-identified information to a partner (or allow a partner to collect such information) in a manner that would identify you as an individual.

see that? "We do not rent or sell your Personal Information *in personally identifiable form*" - in other words, they **do** sell your data, they just claim to "de-identify" it. this de-identification process is bogus, this is still an invasion of privacy. there have been high-profile cases where de-identified data has been collected and combined with other de-identified datasets to form new datasets that actually de-anonymize users, which suggests that there are low-profile cases too. we still have no idea what data they're collecting (it could be your actual messages for all we know, which is a pretty difficult to anonymize, even if it might be legally considered anonymized just because of the lack of associated user account), we have no idea who is buying this data, and what they're doing with it.

any form of data collection that isn't actually required for the functionality of the program, and any form of selling user data, ought to be frowned upon. maybe you could make the excuse that every other platform does it, and fine, but that doesn't excuse Guilded outright providing misleading/confusing information in their marketing material like this. besides, just because every other company does it doesn't make it good. we need to break out of this mess by refusing to give these companies what they want, and that needs to start somewhere.

## mice begone

Guilded lacks a lot of keyboard navigation shortcuts that Discord had. for example, you can not press page up or page down in the chat window to scroll up and down, you *must* use a scrollwheel. this is infuriating on laptops, because it is extremely unnatural to have to use a scrollwheel to read the chat, and the scroll bar on the side of the chat is too thin to grab onto most of the time, leading to a very clunky UI experience.

Discord had (and actually still has) a similar issue whereby there is no scrollbar for the server list on the left side of the client, meaning laptop users with no touchpad scroll system (or laptop users who actively refuse to use the janky touchpad scroll feature) are forced to navigate the server list using the arrow keys, which they can at least still do.

additionally, Guilded's channel list is actually slightly too wide for my liking and takes up more screen real estate on my terrible laptop display than i feel comfortable with. chat clients like [Element](https://element.io/) allow you to resize things like the channel/room list and member list, whereas Discord and Guilded do not.

it should also be noted that Guilded does not have a button to jump to the most recent message, and also has no feature for searching through messages, potentially because the developers may not yet know how to efficiently implement this at such a large scale. (thanks [@n_cryptid](https://nitter.actionsack.com/n_cryptid))

# "i don't care about any of this, it doesn't affect me."

a lot of people tell me that these issues don't matter to them and thus Guilded is better than Discord for them. that's great, except *we live in a society*. i'm serious - this is a chat program. you know what the network effect is, right? since practically every popular chat program uses Electron nowadays, it's not exactly easy for many people to run several different ones all at once. therefore, *we need a chat client that works for everybody*, and we need it to be the one that everybody uses. Guilded is not that - it is *less* accessible, it is *harder* to install on many platforms than Discord is, and it doesn't solve any of the issues that made Discord difficult to use for people. we need something better than Discord for this, not ***worse***.

## minorities aren't real if they aren't profitable

in the world of free and open source software, if you are a minority with needs beyond the original specifications of the program, you have the right to adapt the program to your needs by modifying the code yourself, or by submitting an issue or ticket to draw the attention of other developers to your needs.

in the world of proprietary software however, program design is *always* ruled by the needs of the **majority** instead and the needs of the majority alone, and minority users only get to adapt the program to their needs if they are either direct employees of the company writing the code, or have enough money and connections with the company to "persuade" them to add support. if you do not meet any of these categories, you are expected to adapt to the program rather than the program adapting to you, which is a bit like removing ramps for wheelchairs and expecting people in wheelchairs to *"just walk, stupid."*

## "my friends won't talk to me anymore because i'm colour blind"

remember when i asked you to think about what might happen to all of the people who couldn't use Discord, and thus what might happen to all of the people who can't use Guilded? well, i think by now you might've ascertained that we are being *ostracised for our "defects."* we cannot adapt to the system, so we are **disposed of**.

welcome to capitalism.

you see it everywhere. take the example of governments being extremely skeptical about giving people welfare money: oh, you say you're not capable of working? too bad, that makes you **defective**. if you refuse to or cannot contribute to "the economy" then you are to be eradicated. it's practically eugenics. hell, in the [heavily-debunked](https://tube.cadence.moe/watch?v=UBc7qBS1Ujo) book [The Bell Curve](https://en.wikipedia.org/wiki/The_Bell_Curve) it is outright suggested that those who have "lower IQs" (a completely bogus measurement to begin with, but you *know* why they like it) ought to be paid less by the welfare system so that they are either placed under additional pressure to survive or are outright removed from the gene pool. again, it's literally eugenics.

this whole system is designed to create a homogenous group of people who can tolerate the system, and to dispose of anyone who can't. you might even argue that this is why the term "normie" exists on the internet - although many people who say it aren't really aware of exactly why they have such a deep hatred for these so-called "normies," the reason is quite clear. who are these so-called "normies?" they are the TikTok users, the Facebook users, the people with stable high-paying jobs - *the people who are blissfully unaware of all the privacy issues, accessibility issues, money problems, discrimination-* ***everything.*** they are referring to the people who never really needed to adapt to society because society had already adapted to them.

Guilded is, first and foremost, a version of Dicsord intended to please *the majority.* they build off of the hype of "free nitro" because that's all most people care about. only a very small minority of people care about free and open source software, end to end encryption, privacy, accessibility, or performance, and as such they are ignored. when a competitor to Guilded comes along, they will sacrifice even more of these minority demands for the sake of pleasing the majority, because they only need *most* people to be hyped about it to make a living. and once Guilded gets popular, Discord will become just as bad as them if not worse in order to compete, just as Skype did in a desperate attempt to compete with Discord. you as an individual do not matter, all they care about is the statistics, the analytics, *the numbers.* if it looks like they are successful, then they must be good. Skype did it, Discord did it, Guilded did it - they *all* did it, and they always will do it. this "free market" does not "breed innovation," it breeds a blissfully ignorant womb-like experience for the many, and the eradication of the few.

it's despicable. it needs to end. [it is not natural.](https://tube.cadence.moe/watch?v=cZYNADOHhVY) nobody deserves to be treated like this.

# the light at the end of the tunnel

i should make it absolutely clear that continuing to use Discord instead of Guilded is not the answer here. if you were under any assumption that i'm defending Discord here, drop it. they terminated my account half-way through writing this very article, without explaining why and despite the fact that i had never even remotely violated their terms of service - and then they never responded to my support ticket asking if they could explain or reverse the action. the problem is that Guilded has the capacity to do the same of course, so we need something better.

there *are* decent open source substitutes for systems like Discord now. they are not perfect, and they certainly still need a lot of work, but they really do exist. take a look at programs like [Gajim](https://gajim.org/), [Element](https://element.io/), [Signal](https://www.signal.org/) and [Wire](https://wire.com/en/). if you do start using them, don't expect them to be perfect replicas of what you're already used to like Guilded is - expect some of them to be very different, even - but that's okay. sometimes, trying new things is good. sometimes it's not worth it to copy Discord in its entirety. sometimes you need change. sometimes you need new ideas. and that's a wonderful thing, because the best part is that *you* can be the one to introduce those new ideas. you can *contribute*. you are free to do *whatever you want.* isn't that beautiful?

good luck with whatever you decide to use. all i can really do is hope that you learned something, and hope that i inspired you to make things better. we *need* change.
