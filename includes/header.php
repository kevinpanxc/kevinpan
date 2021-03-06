<?php if ( !( isset( $_GET['ajax'] ) && $_GET['ajax'] ) ) { ?>

	<!DOCTYPE html>

	<html>
		<head>
			<title>Kevin Pan: <?php echo $title ?></title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
			<link type="text/css" rel="stylesheet" href="<?php echo $scriptsAndCSSPath ?>/css/main.css"/>

			<!-- jQuery -->
			<script type="text/javascript" src="<?php echo $scriptsAndCSSPath ?>/scripts/jquery-1.11.0.min.js"></script>

			<!-- LoadingBar.js by Pete R -->
			<script type="text/javascript" src="<?php echo $scriptsAndCSSPath ?>/scripts/youtube_loading_bar/js/jquery.loadingbar.js"></script>
			<link rel="stylesheet" href="<?php echo $scriptsAndCSSPath ?>/scripts/youtube_loading_bar/css/loadingbar.css" type="text/css"/>

			<!-- SprintJS -->
			<script type="text/javascript" src="<?php echo $scriptsAndCSSPath ?>/scripts/sprint.js"></script>
			<script type="text/javascript" src="<?php echo $scriptsAndCSSPath ?>/scripts/sprint_config.js"></script>

			<!-- Google Fonts -->
			<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Lato" rel="stylesheet" type="text/css">

			<!-- KJNKPhotoGalleryJS -->
			<script type="text/javascript" src="<?php echo $scriptsAndCSSPath ?>/scripts/KJNKPhotoGalleryJS/lightboxCustom.js"></script>
			<script type="text/javascript" src="<?php echo $scriptsAndCSSPath ?>/scripts/KJNKPhotoGalleryJS/mCustomScrollbar/jquery.mCustomScrollbar.js"></script>
			<link rel="stylesheet" href="<?php echo $scriptsAndCSSPath ?>/scripts/KJNKPhotoGalleryJS/css/lightbox.css" type="text/css">
			<link rel="stylesheet" href="<?php echo $scriptsAndCSSPath ?>/scripts/KJNKPhotoGalleryJS/mCustomScrollbar/jquery.mCustomScrollbar.css">

			<script>
				kjnklb_setThumbnailMode(true);
				kjnklb_setPathToImageFolder('<?php echo $scriptsAndCSSPath ?>/images/Projects/');
				kjnklb_setPathToKJNKPhotoGalleryJS('<?php echo $scriptsAndCSSPath ?>/scripts/');
			</script>

			<script type="text/javascript">

				var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-37350827-1']);

				(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				})();

			</script>
		</head>

		<body>

			<div class="pageInfo infoContainer" data-pagename="<?php echo $pageName ?>"></div>

			<div id="ajaxContent_1">

<?php } ?>