<?php
session_start();
$pagetype = "gallery";
$pagename = "1972ds21";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1972 DS21 Pallas</b> right hand drive semi auto. Tabac leather interior.</p>

    <?php makeSlideShow('1972 DS21', '1972_DS21_', 9); ?>

</div>
<?php include "connect_down.php"; ?>
