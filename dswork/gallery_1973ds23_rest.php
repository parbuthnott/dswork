<?php
session_start();
$pagetype = "gallery";
$pagename = "1973ds23_rest";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1973 DS23 Restoration</b> right hand drive currently under restoration.</p>

    <?php makeSlideShow('1973 DS23 ', '1973_DS23_REST_', 3); ?>

</div>
<?php include "connect_down.php"; ?>
