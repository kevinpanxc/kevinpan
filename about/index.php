<?php 
    $pageName = "ABOUT";
    $title = "About Me";
    $scriptsAndCSSPath = "/kevinpan";
    require( $_SERVER['DOCUMENT_ROOT'] . $scriptsAndCSSPath . "/includes/header.php" );
?>

<?php 
    require( $_SERVER['DOCUMENT_ROOT'] . $scriptsAndCSSPath . "/includes/new_title.php" );
    
    if ( isset( $_GET['partial'] ) && $_GET['partial'] == 2 ) {
        require( "ajax-content-2.php" );
    } else {
        require( "ajax-content-1.php" );
    }
?>

<?php require( $_SERVER['DOCUMENT_ROOT'] . $scriptsAndCSSPath . "/includes/footer.php" ); ?>