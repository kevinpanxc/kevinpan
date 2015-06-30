Sprint.addPage('HOME',
	{ pageUrl : '/kevinpan/',
		pageHandler : homePageHandler });

Sprint.addPage('ABOUT',
	{ pageUrl : '/kevinpan/about',
		pageHandler : aboutPageHandler });

Sprint.addPage('PROJECTS',
	{ pageUrl : '/kevinpan/projects',
		pageHandler : projectsPageHandler });

Sprint.addPage('RESUME',
	{ pageUrl : '/kevinpan/resume',
		pageHandler : resumePageHandler });

Sprint.addPage('TIMELINES',
    { pageUrl : '/kevinpan/timelines',
        pageHandler : function () {} });

Sprint.addTransition('typetwo', 2);

function homePageHandler () {
	setUpNavigationButtons("home");

	$("#name").mouseover(function(){
		$("#simple-description").fadeTo("fast", 1.0);
		$("#home-nav-wrapper").fadeTo("fast", 0.3);
		$("#blue-line").fadeTo("fast", 0.5);
	});
	$("#name").mouseout(function(){
		$("#simple-description").fadeTo("fast", 0.0);
		$("#home-nav-wrapper").fadeTo("fast", 1.0);
		$("#name").fadeTo("fast", 1.0);
		$("#blue-line").fadeTo("fast", 1.0);
	});
}

function resumePageHandler () {}

function aboutPageHandler () {
	setUpNavigationButtons("about");
}

function projectsPageHandler () {
	$("#kjnklb_overlay").remove();
	$("#kjnklb_lightbox").remove();

	initLightbox();

	setUpNavigationButtons("projects");

	displayEllipsisButtons();
}

function setUpNavigationButtons (pageName) {
	var homeButton = document.getElementById("home-button");
	var projectsButton = document.getElementById("projects-button");
	var about = document.getElementById("about-button");

	projectsButton.onclick = function () {};
	about.onclick = function () {};

	if (pageName === "projects") {
		projectsButton.className = "button-focus";
		about.onclick = function () {
			$(".button-focus").addClass("button").removeClass("button-focus");
			Sprint.navigate('ABOUT', 'typetwo', {backButtonPress : false});
			this.className = "button-focus";
			return false;
		}
		homeButton.onclick = function () {
			Sprint.navigate('HOME', 'default', {backButtonPress : false});
			return false;
		}
	} else if (pageName === "about") {
		about.className = "button-focus";
		var resumeButton = document.getElementById("resume-button");
		projectsButton.onclick = function () {
			$(".button-focus").addClass("button").removeClass("button-focus");
			Sprint.navigate('PROJECTS', 'typetwo', {backButtonPress : false});
			this.className = "button-focus";
			return false;
		}
		resumeButton.onclick = function () {
			Sprint.navigate('RESUME', 'default', {backButtonPress : false});
			return false;			
		}
		homeButton.onclick = function () {
			Sprint.navigate('HOME', 'default', {backButtonPress : false});
			return false;
		}
	} else if (pageName === "home") {
		about.onclick = function () {
			Sprint.navigate('ABOUT', 'default', {backButtonPress : false});
			return false;
		}
		projectsButton.onclick = function () {
			Sprint.navigate('PROJECTS', 'default', {backButtonPress : false});
			return false;
		}	
	}
}

function displayEllipsisButtons() {
	var hasHiddenElement = function (project_block) {
		return project_block.find(".proj-hidden").size() > 0;
	}

	$(".project-block").each(function(){
		var project_block = $(this);
		var parent = document.createElement("div");
		var button = document.createElement("button");
		parent.className = "ellipsis-button-parent";
		button.className = "ellipsis-button";
		button.innerHTML = "...";
		parent.appendChild(button);
		button.onclick = function () {
			project_block.find(".proj-hidden").toggle();
		}
		if (hasHiddenElement(project_block)) {
			project_block.append(parent);
		}
	});
}
