<?php
	$pageName = "HOME";
	$title = "Software Engineering Student";
	$scriptsAndCSSPath = "/homepage";
	require( $_SERVER['DOCUMENT_ROOT'] . $scriptsAndCSSPath . "/includes/header.php" );
?>

<div id="main-wrapper">

	<div id="home-social-buttons-wrapper">
		<a href="https://github.com/kevinpanxc"><img src="<?php echo $scriptsAndCSSPath ?>/images/github.png" id="gitHub"></a>
		<a href="http://ca.linkedin.com/pub/kevin-pan/62/660/8b2"><img src="<?php echo $scriptsAndCSSPath ?>/images/linkedin4.jpg" id="linkedIn"></a>
	</div>
	
	<div id="name-wrapper">
		<div id="name">Kevin Pan</div>
		<img id="blue-line" src="<?php echo $scriptsAndCSSPath ?>/images/blueLine.png">
		<div id='home-nav-wrapper'>
			<a type='button' class='button' id='resume-button'>resume</a>
			<a type='button' class='button' id='projects-button'>projects</a>
			<a type='button' class='button' id='blog-button' href='<?php echo $scriptsAndCSSPath ?>/KJNKBlog/blog/'>blog</a>
		</div>
	</div>
</div>

<div id="simple-description">Software Engineering Student @ the University of Waterloo</div>

<?php require( $_SERVER['DOCUMENT_ROOT'] . $scriptsAndCSSPath . "/includes/footer.php" ); ?>