<?php
session_start();
$pagetype = "gallery";
$pagename = "1970ds21";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1970 DS21 efi Pallas</b> right hand drive, semi Auto.
        Bleu d' Orient and black leather interior right hand drive.</p>

    <?php makeSlideShow('1970 DS21 Pallas', '1970_DS21_', 12); ?>

</div>
<?php include "connect_down.php"; ?>
