<?php
session_start();
$pagetype = "index";
$pagename = "home";
include "connect_up.php";
?>
<div id='content' class='content'>

    <div class="slideshow-container">
        <?php
        slideItem('Three generations together...','index_3gen.jpg','1','3');
        slideItem('1973 Citroen Type HY, 1.9, 3 speed.','index_hvan.jpg','2','3');
        slideItem('1987 CX 20re RHD 5 Speed Manual','index_cx.jpg','3','3');
        ?>
        <a class="prev" href="#">&#171;</a>
        <a class="next" href="#">&#187;</a>
    </div>
    <br/>
    <div style="text-align:center">
        <?php writeDots(3); ?>
    </div>

</div>
<?php include "connect_down.php"; ?>
