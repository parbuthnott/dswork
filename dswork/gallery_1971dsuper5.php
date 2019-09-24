<?php
session_start();
$pagetype = "gallery";
$pagename = "1971dsuper5";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1971 DSuper 5</b> right hand drive, with optional 5 speed gearbox. Red with red velour interior.</p>

    <?php makeSlideShow('1971 DSuper 5', '1971_DSUPER5_', 9); ?>

</div>
<?php include "connect_down.php"; ?>
