<?php
session_start();
$pagetype = "gallery";
$pagename = "1973dsuper5";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1973 DSuper5</b> right hand drive. Bleu Camargue with black targa.</p>

    <?php makeSlideShow('1973 DSuper5', '1973_DSUPER5_', 9); ?>

</div>
<?php include "connect_down.php"; ?>
