<?php
session_start();
$pagetype = "gallery";
$pagename = "1974dsuper5_3";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1974 DSuper5</b> left hand drive5 speed manual, Delta blue with black targa interior.</p>

    <?php makeSlideShow('1974 DSuper5', '1974_DSUPER5_3_', 6); ?>

</div>
<?php include "connect_down.php"; ?>
