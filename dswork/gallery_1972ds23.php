<?php
session_start();
$pagetype = "gallery";
$pagename = "1972ds23";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1972 DS23 Pallas</b> left hand drive, 4 speed semi-automatic gearbox.</p>

    <?php makeSlideShow('1972 DS23 Pallas', '1972_DS23_PALLAS_', 5); ?>

</div>
<?php include "connect_down.php"; ?>
