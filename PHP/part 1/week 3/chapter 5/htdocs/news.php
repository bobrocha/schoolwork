<?php
$includes_path = $_SERVER['DOCUMENT_ROOT'] . "/";
require_once "$includes_path../includes/header.inc";
?>

<div id="content">
        <?php
        	echo "The word \"news\" contains " . strlen( 'news' ) . " characters.";
        ?>
</div>
<?php require_once "$includes_path../includes/footer.inc"; ?>