<?php
session_start();
$pagetype = "gallery";
$pagename = "1972ds21_2";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1972 DS21 Pallas</b> right hand drive semi auto. Sable Metallic and velour interior.</p>

    <?php makeSlideShow('1972 DS21', '1972_DS21_2_', 6); ?>

</div>
<?php include "connect_down.php"; ?>
