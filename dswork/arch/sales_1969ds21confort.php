<?php
session_start();
$pagetype = "sales";
$pagename = "1969ds21confort";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1968 DS21, left hand drive, 4 speed semi-automatic gearbox.</b> MOT'd and Tax exempt<br/>
        Confort specification, Gris Meteor with gold cloth interior. Sought after model as
        it was the first year of production with the fared in headlights but the last to
        retain the dual tone dashboard.<br/><br/>
        Other features:<br/>
        Rear blind<br/>
        Stainless steel exhaust system<br/>
        123 electronic ignition<br/>
        Rear seatbelts</p>

    <div class="slideshow-container">
        <?php
        $total = 15;
        for ($n = 1; $n <= $total; $n++) {
            slideItem('1969 DS21 Confort ' . $n, '1969_DS21_CONFORT_' . $n . '.jpg', $n, $total);
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
