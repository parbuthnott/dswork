<?php
session_start();
$pagetype = "sales";
$pagename = "1973ds20";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p><b>1973 DS20 semi auto Pallas</b> - <i>£22500</i> -
        <a href="mailto:info@dsworkshop.co.uk?subject=1973 DS20 Sales Enquiry">Enquiries</a><br/>
        Selling on behalf of customer.<br/>
        Very pleasing colour combination Gris Palladium with full brown leather interior. Tinted windows.
        Older restoration but preserved well. Recent carpets and interior work.
    </p>

    <?php makeSlideShow('1973 DS20 semi auto Pallas', '1973_DS20_', 10); ?>

</div>
<?php include "connect_down.php"; ?>
