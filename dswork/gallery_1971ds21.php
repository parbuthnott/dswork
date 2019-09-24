<?php
session_start();
$pagetype = "gallery";
$pagename = "1971ds21";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1971 DS21 Pallas efi</b> right hand drive. Semi Auto
        Blue Platine (AC632) with matching blue velour interior.</p>

    <?php makeSlideShow('1971 DS21 Pallas', '1971_DS21_PALLAS_', 12); ?>

</div>
<?php include "connect_down.php"; ?>
