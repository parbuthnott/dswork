<ul id="links">
    <?php
    echo ($pagetype == "index") ? "<li class='linkon'>" : "<li>";
    echo "<a href='index.php' title='Home'>Home</a></li>";
    echo ($pagetype == "sales") ? "<li class='linkon'>" : "<li>";
    echo "<a href='sales.php'>Sales</a></li>";
    echo ($pagetype == "parts") ? "<li class='linkon'>" : "<li>";
    echo "<a href='parts.php'>Parts</a></li>";
    echo ($pagetype == "gallery") ? "<li class='linkon'>" : "<li>";
    echo "<a href='gallery.php'>Gallery</a></li>";
    ?>
    <li><a href="https://www.instagram.com/ds_workshop/" title="Link to instagram - ds_workshop"><img
                    src="images/instagram_icon.jpg" alt="instagram icon"/></a></li>
</ul>

<ul id="pagelinks">
    <?php
    echo "<!-- $pagename ::: $pagetype -->";
    if ($pagetype == "index") {
        echo ($pagename == "home") ? "<li class='linkon'>" : "<li>";
        echo "<a href='index.php'>Home</a></li>";

    } elseif ($pagetype == "sales") {
        echo ($pagename == "list") ? "<li class='linkon'>" : "<li>";
        echo "<a href='sales.php'>Sales List</a></li>";
        echo ($pagename == "1966ds21") ? "<li class='linkon'>" : "<li>";
        echo "<a href='sales_1966ds21.php'>1966 DS21</a></li>";
        echo ($pagename == "1973ds20") ? "<li class='linkon'>" : "<li>";
        echo "<a href='sales_1973ds20.php'>1973 DS20</a></li>";

    } elseif ($pagetype == "parts") {
        echo ($pagename == "list") ? "<li class='linkon'>" : "<li>";
        echo "<a href='parts.php'>Parts List</a></li>";

    } elseif ($pagetype == "gallery") {
        echo ($pagename == "list") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery.php' title='Gallery Index'>Gallery Index</a></li>";
        echo ($pagename == "1968ds21") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1968ds21.php' title='1968 DS21'>1968 DS21</a></li>";
        echo ($pagename == "1968ds21decop") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1968ds21decop.php' title='1968 DS21 Decapotable'>1968 DS21 Decapotable</a></li>";
        echo ($pagename == "1968ds21safari") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1968ds21safari.php' title='1968 DS21 Safari'>1968 DS21 Safari</a></li>";
        echo ($pagename == "1969ds21confort") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1969ds21confort.php' title='1969 DS21 Confort'>1969 DS21 Confort</a></li>";
        echo ($pagename == "1970ds21") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1970ds21.php' title='1970 DS21 Pallas'>1970 DS21 Pallas</a></li>";
        echo ($pagename == "1970ds21_2") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1970ds21_2.php' title='1970 DS21 Pallas'>1970 DS21 Pallas</a></li>";
        echo ($pagename == "1971ds20") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1971ds20.php' title='1971 DS20'>1971 DS20</a></li>";
        echo ($pagename == "1971ds21") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1971ds21.php' title='1971 DS21 Pallas'>1971 DS21 Pallas</a></li>";
        echo ($pagename == "1971dsuper5") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1971dsuper5.php' title='1971 DSuper 5'>1971 DSuper 5</a></li>";
        echo ($pagename == "1972ds21") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1972ds21.php' title='1972 DS21'>1972 DS21</a></li>";
        echo ($pagename == "1972ds21_2") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1972ds21_2.php' title='1972 DS21'>1972 DS21</a></li>";
        echo ($pagename == "1972ds23") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1972ds23.php' title='1972 DS23 Pallas'>1972 DS23 Pallas</a></li>";
        echo ($pagename == "1972ds23efi") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1972ds23efi.php' title='1972 DS23 Pallas EFI'>1972 DS23 Pallas EFI</a></li>";
        echo ($pagename == "1973ds23") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1973ds23.php' title='1973 DS23'>1973 DS23</a></li>";
        echo ($pagename == "1973ds23_2") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1973ds23_2.php' title='1973 DS23'>1973 DS23</a></li>";
        echo ($pagename == "1973ds23_rest") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1973ds23_rest.php' title='1973 DS23 Restoration'>1973 DS23 Restoration</a></li>";
        echo ($pagename == "1973ds23efi") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1973ds23efi.php' title='1973 DS23 EFI'>1973 DS23 EFI</a></li>";
        echo ($pagename == "1973dsuper5") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1973dsuper5.php' title='1973 DSuper 5'>1973 DSuper5</a></li>";
        echo ($pagename == "1973dsuper5_2") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1973dsuper5_2.php' title='1973 DSuper 5'>1973 DSuper5</a></li>";
        echo ($pagename == "1973dsuper5_3") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1973dsuper5_3.php' title='1973 DSuper 5'>1973 DSuper5</a></li>";
        echo ($pagename == "1973hvan") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1973hvan.php' title='1973 HVan HY'>1973 HVan HY</a></li>";
        echo ($pagename == "1974ds23") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1974ds23.php' title='1974 DS23'>1974 DS23</a></li>";
        echo ($pagename == "1974ds23efi") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1974ds23efi.php' title='1974 DS23 EFI'>1974 DS23 EFI</a></li>";
        echo ($pagename == "1974dsuper5") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1974dsuper5.php' title='1974 DSuper 5'>1974 DSuper5</a></li>";
        echo ($pagename == "1974dsuper5_2") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1974dsuper5_2.php' title='1974 DSuper 5'>1974 DSuper5</a></li>";
        echo ($pagename == "1974dsuper5_3") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1974dsuper5_3.php' title='1974 DSuper 5'>1974 DSuper5</a></li>";
        echo ($pagename == "1980peug") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1980peug.php' title='1980 Peugot 504'>1980 Peugot 504</a></li>";
        echo ($pagename == "1987cx20re") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery_1987cx20re.php' title='1987 CX 20 RE'>1987 Citroen CX 20 RE</a></li>";
    }
    ?>
</ul>
<script type="text/javascript">//<![CDATA[
    /* for Mozilla */
    if (document.addEventListener) {
        document.addEventListener("DOMContentLoaded", externalLinks, false);
    }
    /* for Internet Explorer */
    /*@cc_on @*/
    /*@if (@_win32)
       document.write("<script defer src=ie_onload.js><"+"\/script>");
    /*@end @*/
    /* for other browsers */
    window.onload = externalLinks;
    //]]>
</script>
