<?php

function makeSlideShow($title, $imageprefix, $total)
{
    echo "<div class='slideshow-container'>";
    for ($n = 1; $n <= $total; $n++) {
        slideItem($title . " " . $n, $imageprefix . $n . '.jpg', $n, $total);
    }
    echo "<a class='prev' href='#' title='view previous slide'>&#171;</a>";
    echo "<a class='next' href='#' title='view next slide'>&#187;</a>";
    echo "</div>";
    echo "<div class='slideshow-index'>";
    writeDots($total);
    echo "</div>";
}

function slideItem($title, $image, $number, $total)
{
    echo "<div class='mySlides fade'>";
    echo "  <div class='numbertext'>" . $number . " / " . $total . "</div>";
    echo "  <img src='pictures/" . $image . "' alt='" . $title . "' title='" . $title . "' style='width:100%' >";
    echo "  <div class='text'>" . $title . "</div >";
    echo "</div >";
    echo "<style type='text/css'>#dot" . $number . " { background: #083865 url(pictures/" . $image . ")no-repeat top center / cover; }";
    echo "</style>";
}

function writeDots($total)
{
    for ($n = 1; $n <= $total; $n++) {
        echo "<span class='dot' id='dot" . $n . "' title='view slide " . $n . "'></span>";
        echo "<script type='text/javascript'>";
        echo "  document.querySelector('#dot" . $n . "').addEventListener('click', function (e) {";
        echo "    currentSlide(" . $n . ");";
        echo "    e.preventDefault();";
        echo "  }, false);";
        echo "</script>";
    }
}

?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en' xml:lang='en'>
<head>
    <meta http-equiv='Content-type' content='text/html;charset=UTF-8'/>
    <meta name='viewport' content='width=device-width, initial-scale=1'/>
    <title>www.dsworkshop.co.uk - <?php echo $pagetype . " : " . $pagename ?></title>
    <link rel='stylesheet' href='dswork.css' type='text/css'/>
    <script type="application/javascript" src="dswork.js"></script>
</head>
<body>
<div id="main-front">
	<span id="heading">
		<span id="lefthead"><img src="images/top_left.jpg" alt="top left image"/></span>
		<span id="righthead"><img src="images/top_right.jpg" alt="top right image"/></span>
	</span>
    <?php include "links.php"; ?>
