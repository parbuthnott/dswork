<?php
session_start();
$pagetype = "index";
$pagename = "home";
include "connect_up.php";
?>
<div id='content' class='content'>

    <div class="slideshow-container">
        <?php
        slideItem('Three generations together...', 'index_3gen.jpg', '1', '3');
        slideItem('1973 Citroen Type HY, 1.9, 3 speed.', 'index_hvan.jpg', '2', '3');
        slideItem('1987 CX 20re RHD 5 Speed Manual', 'index_cx.jpg', '3', '3');
        ?>
        <a class="prev" href="#" title="view previous slide">&#171;</a>
        <a class="next" href="#" title="view next slide">&#187;</a>
    </div>
    <div class="slideshow-index">
        <?php writeDots(3); ?>
    </div>

    <h2 id="about">About Us</h2>
    <p>
        At DS Workshop we are primarily Citroen DS enthusiasts, But we
        are by no means limited to D models, we are happy to work on the
        whole classic Citroen family.<br/>
        We have a busy workshop where we can sort out everything from
        simply changing a light bulb and MOT to undertaking full
        restoration and engine rebuilds.<br/>
        We are dedicated to supplying the best possible parts and after
        encountering problems with other parts on the market we have
        developed and invested in our own range including front
        suspension arms and pistons and liners.
    </p>

    <h2 id="contact">Contact</h2>
    <p>
        For sales, parts and service please:<br/>
        Email: <a href="mailto:info@dsworkshop.co.uk?subject=DS Workshop General Enquiry"
                  title="General enquiry mail link">info@dsworkshop.co.uk</a><br/>
        Workshop Telephone: <b>020 3417 0243</b><br/>
        Mobile: <b>0777 965 1802</b>
    </p>

    <h2>Location</h2>
    <p>
        We are located very near M25 Junction 24 for Potters Bar<br/>
        <img src="images/map.gif" alt="map" title="map of location" id="map"/>
    </p>

    <p>
        <a href="http://maps.google.co.uk/maps?f=q&source=s_q&gl=uk&hl=en&g=Barnet,+Hertfordshire+EN4+0PX&q=EN4+0PX"
           title="google map of location">DS Workshop<br/>
            Plumridge Farm<br/>
            Stagg Hill<br/>
            Barnet<br/>
            EN4 0PX</a>.
    </p>

    <h2 id="wedding">Wedding Hire</h2>
    <p>
        We have a range of DS's to choose from for wedding hire and can offer a chauffeur driven
        service for your special day.
    </p>
    <!--
    <?php makeSlideShow('Wedding Hire', 'wedding_hire_', 4); ?>
    -->
    <p>
        We are South East based and have recommended partners in the South West.
        Please get in touch if you would like a quote.
        <a href="mailto:info@dsworkshop.co.uk?subject=DS Workshop Wedding Hire"
           title="Wedding hire mail link">info@dsworkshop.co.uk</a>
    </p>

    <h2 is="why">Why Citroen?</h2>
    <p>
        What started the fascination with the Citroen DS? Watch below...<br/>
        <object width="425" height="344">
            <param name="movie"
                   value="http://www.youtube.com/v/uF9oYC7HhUQ&hl=en_GB&fs=1&rel=0&color1=0x2b405b&color2=0x6b8ab6">
            <param name="allowFullScreen" value="true">
            <param name="allowscriptaccess" value="always">
            <embed src="http://www.youtube.com/v/uF9oYC7HhUQ&hl=en_GB&fs=1&rel=0&color1=0x2b405b&color2=0x6b8ab6"
                   type="application/x-shockwave-flash" allowscriptaccess="always"
                   allowfullscreen="true" width="425" height="344">
        </object>
    </p>

</div>
<?php include "connect_down.php"; ?>
