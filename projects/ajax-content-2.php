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
				<strong class="project-inner-heading"> SVBLET </strong> <i class="project-tech">Ruby on Rails</i>
				<a href="https://github.com/kevinpanxc/twitchquotes" class="try-it-out">GitHub</a>
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
				<strong class="project-inner-heading"> TwitchQuotes </strong> <i class="project-tech">Ruby on Rails</i>
				<a href="https://github.com/kevinpanxc/twitchquotes" class="try-it-out">GitHub</a>
				<a href="https://twitchquotes.herokuapp.com" class="try-it-out">Visit</a>
			</div>

			<div class="proj-desc">
				Website that showcases funny/silly quotes from the venerable Twitch chat. Users can post their own quotes or sign in with their Facebook account to upvote/downvote quotes.
			</div>

			<div class="proj-hidden proj-img">
				<a href="<?php echo $scriptsAndCSSPath ?>/images/Projects/twitchQuotes/main_page.png" rel="lightbox" id="twitchQuotes">
					<img src = "<?php echo $scriptsAndCSSPath ?>/images/Projects/twitchQuotes/main_page.png" id="screenshot1" /> 
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
				<strong class="project-inner-heading"> 2D Electric Field Simulator </strong> <i class="project-tech">JavaScript</i>
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
	</div>
</div>