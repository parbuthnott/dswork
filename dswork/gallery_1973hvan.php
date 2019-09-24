<?php
session_start();
$pagetype = "gallery";
$pagename = "1973hvan";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1973 HVan HY</b> left hand drive, 4 speed semi-automatic gearbox.</p>

    <?php makeSlideShow('1973 HVan HY', '1973_HVAN_HY_', 12); ?>

</div>
<?php include "connect_down.php"; ?>
