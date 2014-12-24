<div id="main-wrapper">
	<div id="title-wrapper"> 
		Projects
		<div id="support-social-buttons-wrapper">
			<a href="https://github.com/kevinpanxc"><img src="<?php echo $scriptsAndCSSPath ?>/images/github.png" id = "gitHub"></a>
			<a href="http://ca.linkedin.com/pub/kevin-pan/62/660/8b2"><img src="<?php echo $scriptsAndCSSPath ?>/images/linkedin4.jpg" id = "linkedIn"></a>
		</div>
	</div>

	<div id ="project-body">
		<div class="project-block">
			<div class="project-heading">
				<strong class="project-inner-heading"> Flappy Birds </strong> <i class="project-tech">Node.js with Express and Socket.IO</i>
				<a href="https://github.com/kevinpanxc/flappy-birds" class="try-it-out">GitHub</a>
				<a href="https://flappy-bird-s.herokuapp.com" class="try-it-out">Try it Out!</a>
			</div>

			<div class="proj-desc">
				The second iteration of the Flappy Birds project. Uses the same set of technologies. This iteration includes a much improved client that uses client-side prediction and lerping to accurately and smoothly display the positions of other players. Also adds the ability to spectate games.
			</div>

			<div class="proj-hidden proj-img">
				<a href="<?php echo $scriptsAndCSSPath ?>/images/Projects/flappyBirdsNew/flappyBirdsNew_1.png" rel="lightbox" id="flappyBirdsNew">
					<img src = "<?php echo $scriptsAndCSSPath ?>/images/Projects/flappyBirdsNew/flappyBirdsNew_1.png" id="screenshot1" /> 
				</a>
			</div>

			<div class="proj-hidden">
				The old client for Flappy Birds was just a slightly modified version of an HTML5 Flappy Bird game I found on the web. The problem was that almost all animations were done with CSS and it was difficult to adapt it to provide a clean multiplayer experience.
				</br></br>
				The previous iteration only stored the x positions of other birds. When one client jumps, the jump information is sent to other clients so that the y positions are marginally accurate. However, this leads to very unnatural behaviour wherein other players would appear to go past the map boundaries.
				</br></br>
				This version of Flappy Birds stores both the x and y positions of other birds. Client-side prediction is used to smooth out horizontal motion of other players and lerping is used to smooth out vertical motion. The client was also completely reworked such that animations are mostly handled by the canvas which allows for a greater degree of control (at least for me, since I don't know CSS animations that well). These changes also allowed me to quickly and easily build in a spectating system for the game.
			</div>
		</div>

		<div class="project-block">
			<div class="project-heading">
				<strong class="project-inner-heading"> TwitchQuotes </strong> <i class="project-tech">Ruby on Rails</i>
				<a href="https://github.com/kevinpanxc/twitchquotes" class="try-it-out">GitHub</a>
				<a href="https://twitchquotes.herokuapp.com" class="try-it-out">Visit</a>
			</div>

			<div class="proj-desc">
				Website that showcases funny/silly quotes from Twitch.tv's IRC chat channels. Users can sign up to vote on their favorite quotes. One of my largest and most successful projects to date.</br>
				<div style="text-align:right">
					<div><strong>Pages/session:</strong> 5.41</div>
					<div><strong>Average session duration:</strong> 03:52</div>
					<div><strong>Bounce rate:</strong> 45.15%</div>
					<div style="font-size:12px">last updated: 2014/12/24 </div>
				</div>
			</div>

			<div class="proj-hidden proj-img">
				<a href="<?php echo $scriptsAndCSSPath ?>/images/Projects/twitchQuotes/main_page.png" rel="lightbox" id="twitchQuotes">
					<img src = "<?php echo $scriptsAndCSSPath ?>/images/Projects/twitchQuotes/main_page.png" id="screenshot1" /> 
				</a>
			</div>
		</div>

		<div class="project-block">
			<div class="project-heading">
				<strong class="project-inner-heading"> Tether </strong> <i class="project-tech">Node.js with Box2DJS, Express, and Socket.IO</i>
				<a href="https://github.com/alvinlao/charm" class="try-it-out">GitHub</a>
			</div>

			<div class="proj-desc">
				Tether is a four player game with two two-player teams. A player plays as a spaceship that is tethered via an elastic rope to her/his team member and they need to work together to swing asteroids to break the other team's tether.
			</div>

			<div class="proj-hidden proj-img">
				<a href="<?php echo $scriptsAndCSSPath ?>/images/Projects/tether/tether_2.png" rel="lightbox" id="tether">
					<img src = "<?php echo $scriptsAndCSSPath ?>/images/Projects/tether/tether_2.png" id="screenshot1" /> 
				</a>
			</div>			

			<div class="proj-hidden">
				Other team members include: <a href="" class="unobtrusive-link">Geoffrey Golmer</a>, <a href="https://github.com/luckytoilet" class="unobtrusive-link">Bai Li</a>, <a href="https://github.com/alvinlao" class="unobtrusive-link">Alvin Lao</a>, and <a href="https://github.com/" class="unobtrusive-link">Raymond Cheng</a>. The game has a thin client with the Box2D physics engine residing on the server. The tether is a non-elastic rope that is modelled as a series of connected Box2D resolute joint entities.
				</br></br>
				Box2D is awesome! :D
			</div>
		</div>

		<div class="project-block">
			<div class="project-heading">
				<strong class="project-inner-heading"> Rubber Band Simulator </strong> <i class="project-tech">JavaScript (HTML5 Canvas)</i>
				<a href="https://github.com/kevinpanxc/rubber-band-simulator" class="try-it-out">GitHub</a>
				<a href="<?php echo $scriptsAndCSSPath ?>/projects/rubber-band-simulator/" class="try-it-out">Try it Out!</a>
			</div>

			<div class="proj-desc">
				A simple rubber band simulator. The rubber band is modelled as a series of nodes linked by springs.
			</div>
		</div>

		<div class="project-block">
			<div class="project-heading">
				<strong class="project-inner-heading"> Ping </strong> <i class="project-tech">JavaScript (HTML5 Canvas)</i>
				<a href="https://github.com/kevinpanxc/ping" class="try-it-out">GitHub</a>
				<a href="<?php echo $scriptsAndCSSPath ?>/projects/ping/" class="try-it-out">Try it Out!</a>
			</div>

			<div class="proj-desc">
				Ping is a more dynamic version of the 2D electric field visualizer project. Although it doesn't display electric field lines, electric charge elements are able to move around.
			</div>
		</div>

		<div class="project-block">
			<div class="project-heading">
				<strong class="project-inner-heading"> 2D Electric Field Visualizer </strong> <i class="project-tech">JavaScript (HTML5 Canvas)</i>
				<a href="https://github.com/kevinpanxc/ElectricFieldVectors" class="try-it-out">GitHub</a>
				<a href="<?php echo $scriptsAndCSSPath ?>/projects/electric-field-vectors/" class="try-it-out">Try it Out!</a>
			</div>

			<div class="proj-desc">
				A web application that models how point charges and line charges alter the electric field around them. The electric field is represented by a vector field that changes as the user moves the charges around. 
			</div>

			<div class="proj-hidden proj-img">
				<a href="<?php echo $scriptsAndCSSPath ?>/images/Projects/electricFieldVectors/efv.png" rel="lightbox" id="electricFieldVectors">
					<img src = "<?php echo $scriptsAndCSSPath ?>/images/Projects/electricFieldVectors/efv.png" id="screenshot1" /> 
				</a>
			</div>
		</div>

		<div class="project-block">
			<div class="project-heading">
				<strong class="project-inner-heading"> SprintJS </strong> <i class="project-tech">JavaScript</i>
				<a href="https://github.com/kevinpanxc/sprintjs" class="try-it-out">GitHub</a>
				<a href="https://github.com/kevinpanxc/sprintjs#sprintjs" class="try-it-out">Learn More</a>
			</div>

			<div class="proj-desc">
				Sprint is a small JavaScript module that helps to build ajax-navigation-based websites (think super fast page navigation).
			</div>

			<div class="proj-hidden">
				<h3>How it works</h3>
				On each page change, Sprint fetches HTML from the server via ajax and replaces existing content on the page. CSS and JS files are not reloaded each time and site navigation is significantly faster. Sprint keeps the back and forward buttons working by changing the browser history stack on each page navigation. This website is currently using Sprint!</br></br>

				Sprint was developed after working on KJNKBlog (which also uses ajax as a means of page navigation). Sprint is a consolidation of the page navigation code I wrote for KJNKBlog.</br></br>

				Sprint aims to do the exact same thing as pjax and Turbolinks. I wasn't aware of their existence until after development of Sprint.
			</div>
		</div>

		<div class="project-block">
			<div class="project-heading">
				<strong class="project-inner-heading"> KJNKBlog </strong> <i class="project-tech">JavaScript, MySQL, PHP</i>
				<a href="https://github.com/kevinpanxc/KJNKBlog" class="try-it-out">GitHub</a>
			</div>

			<div class="proj-desc">
				Blogging system built with PHP. Blog posts are written in Markdown. Full ajax navigation that maintains browser history.
			</div>

			<div class="proj-hidden proj-img">
				<a href="<?php echo $scriptsAndCSSPath ?>/images/Projects/kjnkBlog/kjnkBlog.jpg" rel="lightbox" id="kjnkBlog">
					<img src = "<?php echo $scriptsAndCSSPath ?>/images/Projects/kjnkBlog/kjnkBlog.jpg" id="screenshot2" />
				</a>
			</div>
		</div>

		<div class="project-block">
			<div class="project-heading">
				<strong class="project-inner-heading"> SVBLET </strong> <i class="project-tech">Ruby on Rails</i>
				<a href="https://github.com/svblet/svblet" class="try-it-out">GitHub</a>
			</div>

			<div class="proj-desc">
				SVBLET is a sleek solution for finding your next home. Built in collaboration with <a href="http://www.pluszero.ca" class="unobtrusive-link">Anojh Gnanachandran</a>.
			</div>

			<div class="proj-hidden proj-img">
				<a href="<?php echo $scriptsAndCSSPath ?>/images/Projects/svblet/svblet.png" rel="lightbox" id="svblet">
					<img src = "<?php echo $scriptsAndCSSPath ?>/images/Projects/svblet/svblet.png" id="screenshot1" /> 
				</a>
			</div>
		</div>

		<div class="project-block">
			<div class="project-heading">
				<strong class="project-inner-heading"> GradeTrackr </strong> <i class="project-tech">Android App</i>
				<a href="https://github.com/kevinpanxc/gradebook-android" class="try-it-out">GitHub</a>
			</div>

			<div class="proj-desc">
				GradeTrackr is an android application that keeps track of academic grades.
			</div>

			<div class="proj-hidden proj-img">
				<a href="<?php echo $scriptsAndCSSPath ?>/images/Projects/gradeTrackr/gradeTrackr.jpg" rel="lightbox" id="gradeTrackr">
					<img src = "<?php echo $scriptsAndCSSPath ?>/images/Projects/gradeTrackr/gradeTrackr.jpg" id="screenshot2" /> 
				</a>				
			</div>
		</div>

		<div class="project-block">
			<div class="project-heading">
				<strong class="project-inner-heading"> PRESENT </strong> <i class="project-tech">JavaScript</i>
				<a href="https://github.com/kevinpanxc/simple-photo-gallery-plugin" class="try-it-out">GitHub</a>
			</div>

			<div class="proj-desc">
				JS photogallery plug-in built for this website.
			</div>
		</div>

		<div class="project-block">
			<div class="project-heading">
				<strong class="project-inner-heading"> Flappy Birds (old) </strong> <i class="project-tech">Node.js with Express and Socket.IO</i>
				<a href="https://github.com/kevinpanxc/flappy-birds-old" class="try-it-out">GitHub</a>
			</div>

			<div class="proj-desc">
				An experimental online multiplayer Flappy Bird game built on node.js with Express and Socket.IO
			</div>

			<div class="proj-hidden proj-img">
				<a href="<?php echo $scriptsAndCSSPath ?>/images/Projects/flappyBirds/flappyBirds_1.png" rel="lightbox" id="flappyBirds">
					<img src = "<?php echo $scriptsAndCSSPath ?>/images/Projects/flappyBirds/flappyBirds_1.png" id="screenshot1" /> 
				</a>
			</div>

			<div class="proj-hidden">
				Currently, Flappy Birds is really just a backend component built on top of <a href="http://nebezb.com/" class="unobtrusive-link">Nebez Briefkani's</a> JS/CSS/HTML recreation of <a href="http://www.dotgears.com/" class="unobtrusive-link">Dong Nguyen's</a> massively popular Flappy Bird game. Using Briefkani's frontend code was both a blessing and a curse. It allowed me to quickly start developing the game's backend (which was what I was interested in). However, this forced the majority of the game logic to reside on the clientside. In addition, since this client was written specifically for a singleplayer game, it was extremely difficult to adapt the client for a multiplayer experience without rewriting a significant portion of the code or resorting to using ugly hacks.</br></br>

				Moving forward, I plan to rewrite the client and have (ideally) all the game logic reside on the serverside.
			</div>
		</div>
	</div>
</div>