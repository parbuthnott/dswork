<?php
session_start();
$pagetype = "gallery";
$pagename = "1970ds21_2";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1970 DS21 efi Pallas</b> right hand drive semi auto Gris Palladium with black leather interior.</p>

    <?php makeSlideShow('1970 DS21 Pallas', '1970_DS21_2_', 6); ?>

</div>
<?php include "connect_down.php"; ?>
