<?php
session_start();
$pagetype = "gallery";
$pagename = "1971ds20";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1971 DS20 5-speed</b> left hand drive. Black with black targa interior.</p>

    <?php makeSlideShow('1971 DS20', '1971_DS20_', 9); ?>

</div>
<?php include "connect_down.php"; ?>
