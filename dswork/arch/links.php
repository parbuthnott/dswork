<ul id="links">
    <?php echo ($pagetype == "index") ? "<li class='linkon'>" : "<li>"; ?><a href='index.php'>Home</a></li>
    <?php echo ($pagetype == "sales") ? "<li class='linkon'>" : "<li>"; ?><a href='sales.php'>Sales</a></li>
    <?php echo ($pagetype == "parts") ? "<li class='linkon'>" : "<li>"; ?><a href='parts.php'>Parts</a></li>
    <?php echo ($pagetype == "gallery") ? "<li class='linkon'>" : "<li>"; ?><a href='gallery.php'>Gallery</a></li>
</ul>

<div id="headright">
    POTTERS BAR<br/><br/>
    02034170243<br/><br/>
    <a href="mailto:info@dsworkshop.co.uk" class="tiny">info@dsworkshop.co.uk</a>
</div>

<ul id="pagelinks">
    <?php
    echo "<!-- $pagename ::: $pagetype -->";
    if ($pagetype == "index") {
        echo ($pagename == "home") ? "<li class='linkon'>" : "<li>";
        echo "<a href='index.php'>Home</a></li>";
        echo ($pagename == "weddinghire") ? "<li class='linkon'>" : "<li>";
        echo "<a href='weddinghire.php'>Wedding Hire</a></li>";
        echo ($pagename == "blog") ? "<li class='linkon'>" : "<li>";
        echo "<a href='blog.php'>Blog</a></li>";
        echo ($pagename == "contact") ? "<li class='linkon'>" : "<li>";
        echo "<a href='contact.php'>Contact</a></li>";
    } elseif ($pagetype == "sales") {
        echo ($pagename == "list") ? "<li class='linkon'>" : "<li>";
        echo "<a href='sales.php'>Sales List</a></li>";
        echo ($pagename == "1973ds23") ? "<li class='linkon'>" : "<li>";
        echo "<a href='sales_1973ds23.php'>1973 DS 23</a></li>";
        echo ($pagename == "1968ds21") ? "<li class='linkon'>" : "<li>";
        echo "<a href='sales_1968ds21.php'>1968 DS 21 Decapotable</a></li>";
        echo ($pagename == "1969ds21") ? "<li class='linkon'>" : "<li>";
        echo "<a href='sales_1969ds21confort.php'>1969 DS 21 Confort</a></li>";
        echo ($pagename == "you_get_my") ? "<li class='linkon'>" : "<li>";
        echo "<a href='sales_1973ds23.php'>you get my</a></li>";
        echo ($pagename == "drift") ? "<li class='linkon'>" : "<li>";
        echo "<a href='sales_1973ds23.php'>drift?</a></li>";
        echo ($pagename == "others") ? "<li class='linkon'>" : "<li>";
        echo "<a href='others.php'>Others</a></li>";
    } elseif ($pagetype == "parts") {
        echo ($pagename == "list") ? "<li class='linkon'>" : "<li>";
        echo "<a href='parts.php'>Parts List</a></li>";
    } elseif ($pagetype == "gallery") {
        echo ($pagename == "list") ? "<li class='linkon'>" : "<li>";
        echo "<a href='gallery.php'>Gallery Items</a></li>";
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