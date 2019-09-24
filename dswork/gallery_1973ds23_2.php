<?php
session_start();
$pagetype = "gallery";
$pagename = "1973ds23_2";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1973 DS23 Pallas</b> right hand drive in Brun Scarabee with tabac leather and a Webasto sunroof.</p>

    <?php makeSlideShow('1973 DS23 ', '1973_DS23_2_', 9); ?>

</div>
<?php include "connect_down.php"; ?>
