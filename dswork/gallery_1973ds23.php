<?php
session_start();
$pagetype = "gallery";
$pagename = "1973ds23";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1973 DS23 efi Pallas</b> left hand drive 5 speed manual. Brun Scarabee with gold velour.</p>

    <?php makeSlideShow('1973 DS23 ', '1973_DS23_', 15); ?>

</div>
<?php include "connect_down.php"; ?>
