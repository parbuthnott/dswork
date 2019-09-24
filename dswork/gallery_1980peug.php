<?php
session_start();
$pagetype = "gallery";
$pagename = "1980peug";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1980 Peugot 504</b> left hand drive, 4 speed semi-automatic gearbox.</p>

    <?php makeSlideShow('1980 Peugot 504', '1980_PEUG_504_', 5); ?>

</div>
<?php include "connect_down.php"; ?>
