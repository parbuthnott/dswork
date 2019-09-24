<?php
session_start();
$pagetype = "gallery";
$pagename = "1973dsuper5_2";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1973 DSuper5</b> right hand drive, Ivoire Borely with grey cloth interior.</p>

    <?php makeSlideShow('1973 DSuper5', '1973_DSUPER5_2_', 8); ?>

</div>
<?php include "connect_down.php"; ?>
