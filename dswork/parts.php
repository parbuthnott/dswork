<?php
session_start();
$pagetype = "parts";
$pagename = "list";
include "connect_up.php";
?>
<div id='content' class='content'>

    <h2 id="parts">Parts</h2>
    <p>We have a massive range of parts available and ready for delivery and can order specialist items for you if
        even we don't have one in stock. Simply get in touch with us to get a quote and a delivery date.<br/>
        <a href="mailto:info@dsworkshop.co.uk?subject=Parts Enquiry">Parts Enquiries</a>.</p>

    <div class="slideshow-container blacktext">
        <?php
        slideItem('Windscreens', 'parts_windscreens.jpg', '1', '9');
        slideItem('Suspension Components', 'parts_suspensionarm.jpg', '2', '9');
        slideItem('Clock', 'parts_clock.jpg', '3', '9');
        slideItem('Steering Wheel', 'parts_steering.jpg', '4', '9');
        slideItem('Tyres and Wheels', 'parts_tyres.jpg', '5', '9');
        slideItem('Indicators', 'parts_frontindicator.jpg', '6', '9');
        slideItem('Brakes', 'parts_brakes.jpg', '7', '9');
        slideItem('Hydraulic Components', 'parts_centrifugal.jpg', '8', '9');
        slideItem('Pistons', 'parts_pistons.jpg', '9', '9');
        ?>
        <a class="prev" href="#" title="view previous slide">&#171;</a>
        <a class="next" href="#" title="view next slide">&#187;</a>
    </div>
    <div class="slideshow-index">
        <?php writeDots(9); ?>
    </div>

    <h2 id="merch">Merchandise</h2>
    <p>We create a set of DS Workshop merchandise on an infrequent basis. If you would like a MUG, a
        sweatshirt or something else, we may well do a run and deliver one to you.<br/>
        <a href="mailto:info@dsworkshop.co.uk?subject=Merchadise Enquiry">Merchandise Enquiries</a>.</p>

    <h2 id="otherResources">Other Resources</h2>
    <ul>
        <li>PDF manual for DS21</li>
        <li>PDF manual for DSuper5</li>
    </ul>
</div>
<?php include "connect_down.php"; ?>
