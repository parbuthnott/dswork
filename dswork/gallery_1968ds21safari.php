<?php
session_start();
$pagetype = "gallery";
$pagename = "1968ds21safari";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1968 DS21 Safari Pallas</b> left hand drive 5 speed Semi Auto. Bleu Royal (AC619) with cream leather.
        Split tailgate, huge boot space with folding rear seats.</p>

    <?php makeSlideShow('1968 DS21 Safari', '1968_DS21_SAFARI_', 12); ?>

</div>
<?php include "connect_down.php"; ?>
