<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<script type="text/javascript">
  $(function() {
    $("#The_team .toggle").on("click", function(e) {
      e.preventDefault();
      $("#The_team article").removeClass("more");
      $(this).closest("article").addClass("more");
      $('html, body').animate({
        scrollTop: $(this).closest("article").offset().top - 50
      }, 300);
    });
  });
</script>

<section id="We_do">
<h2>What we do</h2>
<p>
We love building things and supporting meaningful initiatives. Here are
some projects we are involved in:
</p>

<article id="5apps">
<header>
<a href="https://5apps.com/">
<img src="/wp-content/themes/africahacktrip/images/logos/5apps.png" width="80" height="80" alt="" />
</a>
<h3>
<a href="https://5apps.com/">5apps</a>
</h3>
<p>
We help both developers and users to get the most out of the Web as a
software platform.
</p>
</header>
</article>

<article id="co-up">
<header>
<a href="http://co-up.de/">
<img src="/wp-content/themes/africahacktrip/images/logos/co-up.png" width="80" height="80" alt="" />
</a>
<h3>
<a href="http://co-up.de/">co.up</a>
</h3>

<p>
A Berlin coworking space providing desks, wi-fi and a friendly atmosphere for independent workers.
</p>
</header>
</article>

<article id="cobot">
<header>
<a href="http://cobot.me/">
<img src="/wp-content/themes/africahacktrip/images/logos/cobot.png" width="80" height="80" alt="" />
</a>
<h3>
<a href="http://cobot.me/">Cobot</a>
</h3>

<p>
Cobot is the leading management software for coworking. Coworking spaces around the world use our software to run their business.
</p>
</header>
</article>

<article id="cowoco">
<header>
<a href="http://coworking-cologne.de/"><img src="/wp-content/themes/africahacktrip/images/logos/cowoco.png" width="80" height="80" alt="" /></a>
<h3>
<a href="http://coworking-cologne.de/">Coworking Cologne</a>
</h3>
<p>
The Cologne coworking network that also operates a community space for coworking and local meetups.
</p>
</header>
</article>

<article id="coworkingde">
<header>
<a href="http://coworking.de/"><img src="/wp-content/themes/africahacktrip/images/logos/coworkingde.png" width="80" height="80" alt="" /></a>
<h3>
<a href="http://coworking.de/">Coworking.de</a>
</h3>
<p>
German coworking directory.
</p>
</header>
</article>

<article id="litewrite">
<header>
<a href="http://litewrite.net"><img src="/wp-content/themes/africahacktrip/images/logos/litewrite.png" width="80" height="80" alt="" /></a>
<h3>
<a href="http://litewrite.net">Litewrite</a>
</h3>
<p>
Distraction-free writing. Works offline and can sync with your remoteStorage.
</p>
</header>
</article>

<article id="halvtone">
<header>
<a href="https://halvtone.com/"><img src="/wp-content/themes/africahacktrip/images/logos/halvtone.png" width="80" height="80" alt="" /></a>
<h3>
<a href="https://halvtone.com/">Halvtone</a>
</h3>
<p>
A startup that lets you transform your photos into wooden art.
</p>
</header>
</article>

<article id="minutes-io">
<header>
<a href="http://minutes.io/"><img src="/wp-content/themes/africahacktrip/images/logos/minutes.io.png" width="80" height="80" alt="" /></a>
<h3>
<a href="http://minutes.io/">minutes.io</a>
</h3>
<p>
The simplest meeting tool since pen &amp; paper.
</p>
</header>
</article>

<article id="opentechschool">
<header>
<a href="http://opentechschool.org/"><img src="/wp-content/themes/africahacktrip/images/logos/opentechschool.png" width="80" height="80" alt="" /></a>
<h3>
<a href="http://opentechschool.org/">OpenTechSchool</a>
</h3>
<p>
OpenTechSchool is a community initiative offering free programming workshops and meetups
to technology enthusiasts of all genders, backgrounds, and experience levels.
</p>
</header>
</article>

<article id="owncloud">
<header>
<a href="http://owncloud.org/"><img src="/wp-content/themes/africahacktrip/images/logos/owncloud.png" width="80" height="80" alt="" /></a>
<h3>
<a href="http://owncloud.org/">ownCloud</a>
</h3>
<p>
ownCloud enables you to sync and share your stuff. It’s a web platform with desktop and mobile apps for syncing. And all open source!
</p>
</header>
</article>

<article id="railsgirls">
<header>
<a href="http://railsgirls.com/"><img src="/wp-content/themes/africahacktrip/images/logos/railsgirls.png" width="80" height="80" alt="" /></a>
<h3>
<a href="http://railsgirls.com/">Railsgirls</a>
</h3>
<p>
Rails Girls aims to give tools for women to build their ideas. We've been involved
in several events and continue to support it.
</p>
</header>
</article>

<article id="remotestorage">
<header>
<a href="http://remotestorage.io/"><img src="/wp-content/themes/africahacktrip/images/logos/remotestorage.png" width="80" height="80" alt="" /></a>
<h3>
<a href="http://remotestorage.io/">remoteStorage</a>
</h3>
<p>
An open protocol for per-user storage. Lets you sync your data across devices, with a provider you trust or on your own server.
</p>
</header>
</article>

<article id="railslove">
<header>
<a href="http://railslove.com/"><img src="/wp-content/themes/africahacktrip/images/logos/railslove.png" width="80" height="80" alt="" /></a>
<h3>
<a href="http://railslove.com/">Railslove</a>
</h3>
<p>
Railslove is a software consultancy from Cologne Germany. Railslove is building web applications and is kinda good at it.
</p>
</header>
</article>


<article id="task-li">
<header>
<a href="http://task.li/"><img src="/wp-content/themes/africahacktrip/images/logos/task.li.png" width="80" height="80" alt="" /></a>
<h3>
<a href="http://task.li/">task.li</a>
</h3>
<p>
A simple, web based app that lets you share tasks via email.
</p>
</header>
</article>

<article id="tosdr">
<header>
<a href="http://tosdr.org/"><img src="/wp-content/themes/africahacktrip/images/logos/tosdr.png" width="80" height="80" alt="" /></a>
<h3>
<a href="http://tosdr.org/">Terms of Service; Didn’t Read</a>
</h3>
<p>
“I have read and agree to the Terms” is the biggest lie on the web.<br>
Terms of Service; Didn’t Read aims to fix that.
</p>
</header>
</article>

<article id="upstream">
<header>
<a href="http://upstre.am/"><img src="/wp-content/themes/africahacktrip/images/logos/upstream.png" width="80" height="80" alt="" /></a>
<h3>
<a href="http://upstre.am/">Upstream</a>
</h3>
<p>
Upstream is a software consultancy based in Berlin, Germany.
We deliver high quality web apps in short timespans.
</p>
</header>
</article>

<article id="unhosted">
<header>
<a href="http://unhosted.org/"><img src="/wp-content/themes/africahacktrip/images/logos/unhosted.png" width="80" height="80" alt="" /></a>
<h3>
<a href="http://unhosted.org/">unhosted web apps</a>
</h3>
<p>
Also known as "serverless", "client-side", or "static" web apps, unhosted web apps do not send your user data to their server. Either you connect your own server at runtime, or your data stays within the browser.
</p>
</header>
</article>

<article id="webmuses">
<header>
<a href="http://webmus.es/"><img src="/wp-content/themes/africahacktrip/images/logos/webmuses.png" width="80" height="80" alt="" /></a>
<h3>
<a href="http://webmus.es/">WebMuses</a>
</h3>
<p>
A women empowered IT-oriented community based in Krakow, interested in everything connected with technology:
from coding to design. We organize women-friendly workshops, meetings, presentations and team coding.
</p>
</header>
</article>

<article id="twestival">
<header>
<a href="http://twestival.com//"><img src="/wp-content/themes/africahacktrip/images/logos/twestival.png" width="80" height="80" alt="" /></a>
<h3>
<a href="http://twestival.com//">Twestival</a>
</h3>
<p>
Twestival is the largest social media fundraising initiative in the world. We're empowering communities
around the world to organize one-of-a-kind offline events in support of a great local cause.
</p>
</header>
</article>
</section>

<section id="The_team" style="margin-top: 30px">
<h2>Who we are</h2>
<article id="Gregor_Martynus">
<header>
<img src="http://www.gravatar.com/avatar/24fc194843a71f10949be18d5a692682?s=80" width="80" height="80" alt="" />
<h3>
Gregor Martynus
<em class="developer">Developer</em>
<small>Initiator. Overall Organization</small>
</h3>
<dl>
<dt>Connect:</dt>
<dd>
<a href="https://twitter.com/gr2m">twitter</a>
</dd>
<dd>
<a href="https://github.com/gr2m">github</a>
</dd>
</dl>
<a href="#Gregor_Martynus" class="toggle more">+</a>
<a href="#" class="toggle less">×</a>
</header>
<div>
<ul>
<li>
<h4>Who are you?</h4>
<p>I'm 28 years old, currently living with my wife in Zurich. I love
being a digital nomad, to travel the world, experience new things and
make new friends. I'd describe myself as pragmatic and a bit naive, but
in a positive way.</p>
</li>
<li>
<h4>Why are you supporting the project?</h4>
<p>I've read Erik Hersman's Article "From Kenya to Madagascar: The
African tech-hub boom" on bbc and wondered, why I worked with designers
and developers from all around the globe, despite Africa. When it comes
to Web Developement, Africa is a blank canvas to me. I'd like to change
that.</p>
</li>
<li>
<h4>What are your expectations?</h4>
<p>I expect to meet talented and motived developers and designers that
use their skills to solve the problems they are surrounded with. I want
to learn what these problems are and how they are approaching them. I'm
looking forward to some fun hacking with the local creatives and hope
that we'll collaborate on projects beyond the trip.</p>
</li>
<li>
<h4>What are your fears?</h4>
<p>I fear that we might get misunderstood.</p>
</li>
<li>
<h4>What should be the goal of the AfricaHackTrip?</h4>
<p>Meet local communities. Exchange experiences and ideas. Collaborate
on projects. Spread the word.</p>
</li>
<li>
<h4>What would you like to contribute?</h4>
<p>I want to make it happen. I take responsibility for the overall
organization.</p>
</li>
</ul>
</div>
</article>

<article id="Vicy_Wenzelmann">
<header>
<img src="http://www.gravatar.com/avatar/ece15919971e6d7ba3d59dcfd8ac18f9.png" width="80" height="80" alt="" />
<h3>
Vicy Wenzelmann
<em class="publisher">Publisher</em>
<small>Press</small>
</h3>
<dl>
<dt>Connect:</dt>
<dd>
<a href="https://twitter.com/myamy_vicy">twitter</a>
</dd>
</dl>
<a href="#Vicy_Wenzelmann" class="toggle more">+</a>
<a href="#" class="toggle less">×</a>
</header>
<div>
<ul>
<li>
<h4>Who are you?</h4>
<p>I am a publisher at eufrika.org, a news platform which aims at creating an African-European public. I spent half my twenties in Africa and have been suffering from a mild form of mal d'Afrique ever since moving back to Berlin. I am curious about people and the connections between the personal, social, political, economic and cultural spheres of life, which got me a master’s degree in Anthropology. I worked in PR, ran a company for a while, and now have a day job as an organisational development consultant focusing on team building, leadership, (social) entrepreneurship, Generation Y and new forms of collaboration.</p>
</li>
<li>
<h4>Why are you supporting the project?</h4>
<p>Because I believe that bridging the digital divide and bridging cultural divides go hand in hand. Serendipity and good friends got me involved with the AfricaHackTrip, which is one of very few projects that will give creative, clever and crazy people from any side of the Mediterranean the chance to meet at eye level.</p>
</li>
<li>
<h4>What are your expectations?</h4>
<p>I expect to learn a lot – and still be more curious after the trip than before. AfricaHackTrip is going to be an awesome experience for us as well as for the people we’ll meet. Having interesting conversations with interesting people is what I look forward to most.</p>
</li>
<li>
<h4>What are your fears?</h4>
<p>Group dynamics.</p>
</li>
<li>
<h4>What should be the goal of the AfricaHackTrip?</h4>
<p>Meaningful connections. And: kicking off awesome projects, getting people everywhere excited through the documentary, and establishing networks. I want there to be an AfricaHackTrip every year from now on, as well as a EuroHackTrip, an AsiaHackTrip, an AussieHackTrip.. You get the idea.</p>
</li>
<li>
<h4>What would you like to contribute?</h4>
<p>Networking skills, basic knowledge of Swahili, experience in PR. Non-tech questions and comments, even if they annoy the hack out of hackers.</p>
</li>
</ul>
</div>
</article>

<article id="Michael_Bumann">
<header>
<img src="http://www.gravatar.com/avatar/22c07ebd300e450d75e9e9ee9e974793?s=80" width="80" height="80" alt="" />
<h3>
Michael Bumann
<em class="developer">Developer</em>
<small>Events</small>
</h3>
<dl>
<dt>Connect:</dt>
<dd>
<a href="https://twitter.com/bumi">twitter</a>
</dd>
<dd>
<a href="https://github.com/bumi">github</a>
</dd>
</dl>
<a href="#Michael_Bumann" class="toggle more">+</a>
<a href="#" class="toggle less">×</a>
</header>
<div>
<ul>
<li>
<h4>Who are you?</h4>
<p>Hacker and open web enthusiast currently living in Cologne,
Germany. Co-founder of Railslove a web development consultancy and
founding member of Coworking Cologne.</p>
</li>
<li>
<h4>Why are you supporting the project?</h4>
<p>I believe there is a lot we can learn from each other and the
AfricaHackTrip is a great project to foster the exchange and build the
start for future collaboration.</p>
</li>
<li>
<h4>What are your expectations?</h4>
<p>I'm super excited about just seeing what the tech scene is like in
a part of the world where I -unknowingly- haven't expected to find such
communities.  I hope to be able to share experiences and to get a
better understanding of the topics and problems the people we'll meet
are confronted with.</p>
</li>
<li>
<h4>What are your fears?</h4>
<p>getting misunderstood</p>
</li>
<li>
<h4>What should be the goal of the AfricaHackTrip?</h4>
<p>Making people aware and connect people. Also the AfricaHackTrip
should be the start for future trips/"exchanges".</p>
</li>
<li>
<h4>What would you like to contribute?</h4>
<p>Whatever is needed. I'd love to help organizing the events and to
develop ideas how continued collaboration could look like.</p>
</li>
</ul>
</div>
</article>

<article id="Alexander_Lang">
<header>
<img src="http://www.gravatar.com/avatar/f29d8b3a51d303cc54b20932fa6c2639?s=80" width="80" height="80" alt="" />
<h3>
Alexander Lang
<em class="developer">Developer</em>
<small>Documentation</small>
</h3>
<dl>
<dt>Connect:</dt>
<dd>
<a href="https://twitter.com/langalex">twitter</a>
</dd>
<dd>
<a href="https://github.com/langalex">github</a>
</dd>
</dl>
<a href="#Alexander_Lang" class="toggle more">+</a>
<a href="#" class="toggle less">×</a>
</header>
<div>
<ul>
<li>
<h4>Who are you?</h4>
<p>I started my own web development company Upstream in 2006. In 2008
we added a coworking space called co.up and in 2010 we released Cobot,
a coworking space management software.</p>
<p>I mostly work too much but when I don't I go indoor climbing, I go
on sailing trips and I make small films.</p>
</li>
<li>
<h4>Why are you supporting the project?</h4>
<p>I want to travel, see new places and cultures. I want to know what
the tech scenes in the country we will be visiting are like.</p>
</li>
<li>
<h4>What are your expectations?</h4>
<p>None. Let's just go and see.</p>
</li>
<li>
<h4>What are your fears?</h4>
<p>Safety?</p>
</li>
<li>
<h4>What should be the goal of the AfricaHackTrip?</h4>
<p>Learn. Meet people. Bring that back home. Connect.</p>
</li>
<li>
<h4>What would you like to contribute?</h4>
<p>My film making skills. Plus whatever else is needed.</p>
</li>
</ul>
</div>
</article>

<article id="Martin_Stadler">
<header>
<img src="/wp-content/themes/africahacktrip/images/xmartin.jpg" width="80" height="80" alt="" />
<h3>
Martin Stadler
<em class="developer">Developer</em>
<small>Uganda Chapter</small>
</h3>
<dl>
<dt>Connect:</dt>
<dd>
<a href="https://twitter.com/xmartin">twitter</a>
</dd>
<dd>
<a href="https://github.com/xmartin">github</a>
</dd>
</dl>
<a href="#Martin_Stadler" class="toggle more">+</a>
<a href="#" class="toggle less">×</a>
</header>
<div>
<ul>
<li>
<h4>Who are you?</h4>
<p>I'm a web frontend and JavaScript app developer from Berlin,
Germany. I'm currently freelancing, enjoying working on many exciting
projects. I'm also getting involved in the Unhosted project that aims
to decentralize personal data on the web and with OpenTechSchool, an
organization helping to get new people into the tech industry and
teaching tech-related subjects in general.</p>
</li>
<li>
<h4>Why are you supporting the project?</h4>
<p>I love to travel when there's the chance to really get to know
countries and people. Meeting people working in the same industry will
be exciting as we will probably have a lot in common and at the same
time things will be very different. It's great to see how people from
the US and Europe cooperate business-wise and also on not-for-profit
and open-source projects. We should do this more around the world.
Working together and understanding each other more makes the world a
better place.</p>
</li>
<li>
<h4>What are your expectations?</h4>
<p>I expect to meet interesting people, find out about the countries
and cities we're going to visit and of course about cool projects in
the tech industry. I hope to learn new ways how to approach solving
real-world problems and I hope people are also interested to find out
about how we do things.</p>
</li>
<li>
<h4>What are your fears?</h4>
<p>That we are not able to communicate our intentions. We do not want
to be simply visitors. Or even worse, a delegation of people to show
“them” how to do things “right”.</p>
</li>
<li>
<h4>What should be the goal of the AfricaHackTrip?</h4>
<p>Connecting communities. Sharing ideas. Promoting cool
projects.Telling everyone by publishing all this.</p>
</li>
<li>
<h4>What would you like to contribute?</h4>
<p>I can help with documentation (video, sound, photos, blog) and I'm
happy to take care for our stay in Uganda.</p>
</li>
</ul>
</div>
</article>

<article id="Jan-C_Borchardt">
<header>
<img src="http://www.gravatar.com/avatar/2fd3f4d5d762955e5b603794a888fa97?s=80" width="80" height="80" alt="" />
<h3>
Jan-Christoph Borchardt
<em class="designer">Designer</em>
</h3>

<dl>
<dt>Connect:</dt>
<dd>
<a href="https://twitter.com/jancborchardt">twitter</a>
</dd>
<dd>
<a href="https://github.com/jancborchardt">github</a>
</dd>
</dl>

<a href="#Jan-C_Borchardt" class="toggle more">+</a>
<a href="#" class="toggle less">×</a>
</header>

<div>
<ul>
<li>
<h4>Who are you?</h4>
<p>I’m a nomadic interaction designer, advisor &amp; educator.
Sharing, remixing and freedom are very important to me, so I mostly
work on open source web projects like ownCloud, Unhosted and
remoteStorage.</p>
</li>
<li>
<h4>Why are you supporting the project?</h4>
<p>I know the tech communities in cities like Berlin, San Francisco,
Tel Aviv and collaborate with many people from various countries. But I
found I know little about what’s going on in Africa and don’t really
work with people from there. Apparently most major tech hubs there all
started in the last two years. I want to see what is relevant for
people there and what we can do together.</p>
</li>
<li>
<h4>What are your expectations?</h4>
<p>Now I read a bit about what is going on there, and it’s very
similar to elsewhere. Hackerspaces, Makerspaces, so I think there’s
lots of opportunity for working together.</p>
</li>
<li>
<h4>What are your fears?</h4>
<p>I fear we might forget something important during organization.</p>
</li>
<li>
<h4>What should be the goal of the AfricaHackTrip?</h4>
<p>Establish long-lasting connections between the different tech
communities. And most importantly to document everything so it’s not
just a one-time trip, but informative for everyone.</p>
</li>
<li>
<h4>What would you like to contribute?</h4>
<p>I like connecting people and have experience organizing usergroups
and meetups. As well as events with more of a cultural focus, like the
Unhosted unconference in the small Czech town of Unhost, and
Hackerbeach in Vietnam.</p>
</li>
</ul>
</div>
</article>

<article id="Sebastian_Kippe">
<header>
<img src="http://www.gravatar.com/avatar/ca68e41e1ab60bd90f18384ef4b47f2a?s=80" width="80" height="80" alt="" />
<h3>
Sebastian Kippe
<em class="developer">Developer</em>
</h3>

<dl>
<dt>Connect:</dt>
<dd>
<a href="https://twitter.com/skddc">twitter</a>
</dd>
<dd>
<a href="https://github.com/skddc">github</a>
</dd>
</dl>

<a href="#Sebastian_Kippe" class="toggle more">+</a>
<a href="#" class="toggle less">×</a>
</header>

<div>
<ul>
<li>
<h4>Who are you?</h4>
<p>Developer, hacker, entrepreneur, nomad, cosmopolite, cinephile,
reader, pirate. Proud wearer of freckles. Most of the time I'm
creating or breaking things on my computer, either for fun and
pleasure or for the startup I founded in late 2011. I love music,
cooking, and my skateboard. Since I gave up my apartment in Berlin in
2010, I'm constantly moving around Europe and sometimes the rest of
the world.</p>
</li>
<li>
<h4>Why are you supporting the project?</h4>
<p>I think it's a great opportunity to learn more about what seems
to be an extremly vibrant new tech scene in East-Africa. I'm sure the
resulting documentary film will be super interesting.</p>
</li>
<li>
<h4>What are your expectations?</h4>
<p>I like to not have any when travelling, so they're always exceeded
and never disappointed.</p>
</li>
<li>
<h4>What are your fears?</h4>
<p>Horrendous airline fees for bringing my skateboard.</p>
</li>
<li>
<h4>What should be the goal of the AfricaHackTrip?</h4>
<p>A common goal I think is of course learning about the places
we're going, getting to know the people and what they do there, and
soaking up as much atmosphere and information as possible. If
possible it would be cool to not only contribute to local projects,
but also build longer-lasting bridges between hackers and projects in
East Africa and wherever my fellow travellers come from.</p>
</li>
<li>
<h4>What would you like to contribute?</h4>
<p>Anything I can.</p>
</li>
</ul>
</div>
</article>

<article id="Tobias_Kraentzer">
<header>
<img src="http://www.gravatar.com/avatar/28bafcdc7327c4570e7cad5eecbebbab?s=80" width="80" height="80" alt="" />
<h3>
Tobias Kräntzer
<em class="developer">Developer</em>
</h3>

<dl>
<dt>Connect:</dt>
<dd>
<a href="https://twitter.com/anagrom_ataf">twitter</a>
</dd>
<dd>
<a href="https://github.com/anagromataf">github</a>
</dd>
</dl>

<a href="#Tobias_Kraentzer" class="toggle more">+</a>
<a href="#" class="toggle less">×</a>
</header>
<div>
<ul>
<li>
<h4>Who are you?</h4>
<p>I'm a 35 years old software developer living in Berlin. I'm working for nxtbgthng, a small developer company focused on iOS & Mac OS X apps. Before that I had a 4 years stay at the Fraunhofer ISST as a research assistant for location-based services. I love to develop the thing under the visible parts, which makes it from time to time a bit complicated explaining exactly what I'm doing. Beside that I do a bit of open source stuff and I have a strong interest in distributed architectures that allow equal access for anybody.</p>
</li>
<li>
<h4>Why are you supporting the project?</h4>
<p>Meeting other culture is always interesting for me. During my career as a developer I didn't get in touch with anybody from Afrika. I would like to see there perspective on things. A different culture may change the way of seeing things and helps looking at it from a different point of view.</p>
</li>
<li>
<h4>What are your expectations?</h4>
<p>Meeting interesting people (not only developer), get to know the local cuisine, and having a beautiful impression of the countries we are visiting.</p>
</li>
<li>
<h4>What are your fears?</h4>
<p>To be honest: The mosquitoes are my biggest fear at the moment.</p>
</li>
<li>
<h4>What should be the goal of the AfricaHackTrip?</h4>
<p>I dont think that there should be a concrete overall goal. But after the trip I would like to see the world, at least for a few persons, a bit more connected.</p>
</li>
<li>
<h4>What would you like to contribute?</h4>
<p>I'll help out whereever it's needed. Also I like to take care of the Tanzania chapter.</p>
</li>
</ul>
</div>
</article>


<article id="Emi_Maj">
<header>
<img src="/wp-content/themes/africahacktrip/images/emi_80.jpg" width="80" height="80" alt="" />
<h3>
Emilia Maj
<em class="designer">Designer</em>
<small>Design</small>
</h3>
<dl>
<dt>Connect:</dt>
<dd>
<a href="https://twitter.com/EmiliaMaj">twitter</a>
</dd>
<dd>
<a href="https://github.com/EmiMaj">github</a>
</dd>
</dl>
<a href="#Emi_Maj" class="toggle more">+</a>
<a href="#" class="toggle less">×</a>
</header>
<div>



</div>
</article>


</section>


<?php get_footer(); ?>