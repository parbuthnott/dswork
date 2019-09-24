<?php
session_start();
$pagetype = "gallery";
$pagename = "1968ds21decop";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1968 DS21 Decapotable</b> left hand drive. 2175cc.</p>

    <?php makeSlideShow('1968 DS21 Decapotable', '1968_DS21_DECAP_', 8); ?>

</div>
<?php include "connect_down.php"; ?>
