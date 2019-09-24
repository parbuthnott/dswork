<?php
session_start();
$pagetype = "sales";
$pagename = "1973ds23";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1973 DS23efi</b>, left hand drive, 4 speed semi-automatic gearbox. For sale MOT'd and serviced.<br/>
        DS23 with fuel injection and semi-auto gearbox. Beige Tholonet with recently fitted new leather
        seats and doorcards done to original specification with correct stitching and padding. Tinted windows. Front and
        rear inertia seatbelts.<br/>
        Recently benefited from a new clutch and whilst out the engine was given a check over including new timing chain
        and tensioner.</p>

    <div class="slideshow-container">
        <?php
        $total = 8;
        for ($n = 1; $n <= $total; $n++) {
            slideItem('1973 DS23efi '.$n, '1973_DS23EF_'.$n.'.jpg', $n, $total);
        }
        ?>
        <a class="prev" href="#">&#171;</a>
        <a class="next" href="#">&#187;</a>
    </div>
    <div style="text-align:center">
        <?php writeDots($total); ?>
    </div>

</div>
<?php include "connect_down.php"; ?>
