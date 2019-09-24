<?php
session_start();
$pagetype = "gallery";
$pagename = "1968ds21";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1968 DS21 Confort</b> left hand drive, semi automatic. Gris meteor wit Gold cloth interior.</p>

    <?php makeSlideShow('1968 DS21', '1968_DS21_', 9); ?>

</div>
<?php include "connect_down.php"; ?>
