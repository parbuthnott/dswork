<?php
session_start();
$pagetype = "gallery";
$pagename = "1987cx20re";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1987 Citroen CX 20 RE</b> left hand drive, 4 speed semi-automatic gearbox.</p>

    <?php makeSlideShow('1987 CX 20 RE', '1987_CX_20RE_', 7); ?>

</div>
<?php include "connect_down.php"; ?>
