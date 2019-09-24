<?php
session_start();
$pagetype = "gallery";
$pagename = "1974ds23efi";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1974 DS23 efi Pallas</b> Left hand drive, Beige Tholonet with brown leather interior.</p>

    <?php makeSlideShow('1974 DS23 efi', '1974_DS23_EFI_', 5); ?>

</div>
<?php include "connect_down.php"; ?>
