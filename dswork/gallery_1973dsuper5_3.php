<?php
session_start();
$pagetype = "gallery";
$pagename = "1973dsuper5_3";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1973 DSuper5</b> right hand drive, Brun Scarabée with black Targa.</p>
    
    <?php makeSlideShow('1973 DSuper5', '1973_DSUPER5_3_', 6); ?>

</div>
<?php include "connect_down.php"; ?>
