<?php
session_start();
$pagetype = "gallery";
$pagename = "1974dsuper5_2";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1974 DSuper5</b> right hand drive, Delta blue with blue velour interior.</p>

    <?php makeSlideShow('1974 DSuper5', '1974_DSUPER5_2_', 15); ?>

</div>
<?php include "connect_down.php"; ?>
