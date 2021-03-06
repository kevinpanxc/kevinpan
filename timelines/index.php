<?php 
    $pageName = "TIMELINES";
    $title = "Timelines";
    $scriptsAndCSSPath = "/kevinpan";
    require( $_SERVER['DOCUMENT_ROOT'] . $scriptsAndCSSPath . "/includes/header.php" );
?>

<div id="timeline-embed"></div>
<script type="text/javascript">
    var timeline_config = {
        width:              '100%',
        height:             '600',
        source:             'san_francisco_2016.json',
        embed_id:           'timeline-embed',               //OPTIONAL USE A DIFFERENT DIV ID FOR EMBED
        start_at_end:       false,                          //OPTIONAL START AT LATEST DATE
        start_at_slide:     '0',                            //OPTIONAL START AT SPECIFIC SLIDE
        start_zoom_adjust:  '0',                            //OPTIONAL TWEAK THE DEFAULT ZOOM LEVEL
        hash_bookmark:      true,                           //OPTIONAL LOCATION BAR HASHES
        font:               'Bevan-PotanoSans',             //OPTIONAL FONT
        debug:              true,                           //OPTIONAL DEBUG TO CONSOLE
        lang:               'en',                           //OPTIONAL LANGUAGE
        maptype:            'watercolor',                   //OPTIONAL MAP STYLE
        css:                '<?php echo $scriptsAndCSSPath ?>/scripts/TimelineJS/css/timeline.css',     //OPTIONAL PATH TO CSS
        js:                 '<?php echo $scriptsAndCSSPath ?>/scripts/TimelineJS/js/timeline-min.js'    //OPTIONAL PATH TO JS
    }
</script>
<script type="text/javascript" src="<?php echo $scriptsAndCSSPath ?>/scripts/TimelineJS/js/storyjs-embed.js"></script>

<?php require( $_SERVER['DOCUMENT_ROOT'] . $scriptsAndCSSPath . "/includes/footer.php" ); ?>