<?php
session_start();
$pagetype = "gallery";
$pagename = "1973ds23efi";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1973 DS23 efi</b> left hand drive, 4 speed semi-automatic gearbox.</p>

    <?php makeSlideShow('1973 DS23 efi', '1973_DS23EFI_', 8); ?>

</div>
<?php include "connect_down.php"; ?>
