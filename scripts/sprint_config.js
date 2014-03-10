Sprint.addPage('HOME',
	{ pageUrl : '/kevinpan/',
		pageHandler : homePageHandler });

Sprint.addPage('RESUME',
	{ pageUrl : '/kevinpan/resume',
		pageHandler : resumePageHandler });

Sprint.addPage('PROJECTS',
	{ pageUrl : '/kevinpan/projects',
		pageHandler : projectsPageHandler });

Sprint.addTransition('typetwo', 2);

function homePageHandler () {
	setUpNavigateButtons("home");

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

function resumePageHandler () {
	setUpNavigateButtons("resume");
}

function projectsPageHandler () {
	$("#kjnklb_overlay").remove();
	$("#kjnklb_lightbox").remove();

	initLightbox();

	setUpNavigateButtons("projects");
}

function setUpNavigateButtons (pageName) {
	var homeButton = document.getElementById("home-button");
	var projectsButton = document.getElementById("projects-button");
	var resumeButton = document.getElementById("resume-button");

	projectsButton.onclick = function () {};
	resumeButton.onclick = function () {};

	if (pageName === "projects") {
		projectsButton.className = "button-focus";
		resumeButton.onclick = function () {
			$(".button-focus").addClass("button").removeClass("button-focus");
			Sprint.navigate('RESUME', 'typetwo', {backButtonPress : false});
			this.className = "button-focus";
			return false;
		}
		homeButton.onclick = function () {
			Sprint.navigate('HOME', 'default', {backButtonPress : false});
			return false;
		}
	} else if (pageName === "resume") {
		resumeButton.className = "button-focus";
		projectsButton.onclick = function () {
			$(".button-focus").addClass("button").removeClass("button-focus");
			Sprint.navigate('PROJECTS', 'typetwo', {backButtonPress : false});
			this.className = "button-focus";
			return false;
		}
		homeButton.onclick = function () {
			Sprint.navigate('HOME', 'default', {backButtonPress : false});
			return false;
		}
	} else if (pageName === "home") {
		resumeButton.onclick = function () {
			Sprint.navigate('RESUME', 'default', {backButtonPress : false});
			return false;
		}
		projectsButton.onclick = function () {
			Sprint.navigate('PROJECTS', 'default', {backButtonPress : false});
			return false;
		}	
	}
}