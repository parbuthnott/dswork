<?php
session_start();
$pagetype = "sales";
$pagename = "1968ds21";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1968 DS21 Decapotable, left hand drive. 2175cc.</b><br/>
        Currently undergoing a thorough and detailed restoration with many new parts including rear wings, doors and
        original boot lid.<br/>
        Rebuilt engine with new pistons and liners, overhauled cylinder head and carburettor.<br/>
        The colour scheme has not been decided so please get in touch to discuss options</p>

    <div class="slideshow-container">
        <?php
        slideItem('1968 DS21 Decapotable 1', '1968_DS21_DECAP_1.jpg', '1', '8');
        slideItem('1968 DS21 Decapotable 2', '1968_DS21_DECAP_2.jpg', '2', '8');
        slideItem('1968 DS21 Decapotable 3', '1968_DS21_DECAP_3.jpg', '3', '8');
        slideItem('1968 DS21 Decapotable 4', '1968_DS21_DECAP_4.jpg', '4', '8');
        slideItem('1968 DS21 Decapotable 5', '1968_DS21_DECAP_5.jpg', '5', '8');
        slideItem('1968 DS21 Decapotable 6', '1968_DS21_DECAP_6.jpg', '6', '8');
        slideItem('1968 DS21 Decapotable 7', '1968_DS21_DECAP_7.jpg', '7', '8');
        slideItem('1968 DS21 Decapotable 8', '1968_DS21_DECAP_8.jpg', '8', '8');
        ?>
        <a class="prev" href="#">&#171;</a>
        <a class="next" href="#">&#187;</a>
    </div>
    <br/>
    <div style="text-align:center">
        <?php writeDots(8); ?>
    </div>

</div>
<?php include "connect_down.php"; ?>
