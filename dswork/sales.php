<?php
session_start();
$pagetype = "sales";
$pagename = "list";
include "connect_up.php";
?>
<div id='content' class='content'>

    <p>We sell all sorts, the current few are shown below.</p>
    <ul id="linkedlist">
        <li><a href="sales_1966ds21.php"><img src="pictures/1966_DS21_1.jpg" alt="1966 DS21" title="1966 DS21"/>1966
                DS21</a></li>
        <li><a href="sales_1973ds20.php"><img src="pictures/1973_DS20_1.jpg" alt="1973 DS20" title="1973 DS20"/>1973
                DS20</a></li>
    </ul>
</div>
<?php include "connect_down.php"; ?>
