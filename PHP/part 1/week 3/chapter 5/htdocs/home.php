<?php
$includes_path = $_SERVER['DOCUMENT_ROOT'] . "/";
require_once "$includes_path../includes/header.inc";
require_once "$includes_path../includes/table.php";
?>

<div id="content">
        <?php display_nines_table() ?>
</div>
<?php require_once "$includes_path../includes/footer.inc"; ?>