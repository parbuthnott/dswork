<?php
session_start();
$pagetype = "gallery";
$pagename = "1974ds23";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1974 DS23 efi Pallas</b> right hand drive,
        4 speed semi-automatic gearbox.
        Vert Argenté (AC527) with green Pallas cloth interior.</p>

    <?php makeSlideShow('1974 DS23 efi', '1974_DS23_', 9); ?>

</div>
<?php include "connect_down.php"; ?>
