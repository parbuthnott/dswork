<?php
session_start();
$pagetype = "gallery";
$pagename = "1969ds21confort";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1969 DS21 Confort</b> left hand drive. 2175cc.</p>

    <?php makeSlideShow('1969 DS21 Confort', '1969_DS21_CONFORT_', 15); ?>

</div>
<?php include "connect_down.php"; ?>
