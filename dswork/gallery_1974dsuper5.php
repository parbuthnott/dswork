<?php
session_start();
$pagetype = "gallery";
$pagename = "1974dsuper5";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1974 DSuper5</b> left hand drive 5 speed manual, Delta blue with matching blue velour interior.</p>

    <?php makeSlideShow('1974 DSuper5', '1974_DSUPER5_', 8); ?>

</div>
<?php include "connect_down.php"; ?>
