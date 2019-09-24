<?php
session_start();
$pagetype = "gallery";
$pagename = "list";
include "connect_up.php";

function writeGalleryLink($pageSuffix, $imagePrefix, $altTitleText)
{
    echo "<li><a href='gallery_" . $pageSuffix . ".php'><img src='pictures/" . $imagePrefix . "_1.jpg'" .
        " alt='" . $altTitleText . "' title='" . $altTitleText . "'/><br/>" . $altTitleText . "</a></li>";
}

?>
<div id='content' class='content'>

    <p>Over the years, we have gathered a plethora of pictures from different models. A reasonable
        number are shown below for your enjoyment.</p>
    <ul id="linkedlist" class="smaller"><?php
        writeGalleryLink('1968ds21', '1968_DS21', '1968 DS21');
        writeGalleryLink('1968ds21decop', '1968_DS21_DECAP', '1968 DS21 Decapotable');
        writeGalleryLink('1968ds21safari', '1968_DS21_SAFARI', '1968 DS21 Safari');
        writeGalleryLink('1969ds21confort', '1969_DS21_CONFORT', '1969 DS21 Confort');
        writeGalleryLink('1970ds21', '1970_DS21', '1970 DS21 Pallas');
        writeGalleryLink('1970ds21_2', '1970_DS21_2', '1970 DS21 Pallas');
        writeGalleryLink('1971ds20', '1971_DS20', '1971 DS20');
        writeGalleryLink('1971ds21', '1971_DS21_PALLAS', '1971 DS21 Pallas');
        writeGalleryLink('1971dsuper5', '1971_DSUPER5', '1971 DSuper 5');
        writeGalleryLink('1972ds21', '1972_DS21', '1972 DS21');
        writeGalleryLink('1972ds21_2', '1972_DS21_2', '1972 DS21');
        writeGalleryLink('1972ds23', '1972_DS23_PALLAS', '1972 DS23 Pallas');
        writeGalleryLink('1972ds23efi', '1972_DS23_PALLAS_EFI', '1972 DS23 Pallas EFI');
        writeGalleryLink('1973ds23', '1973_DS23', '1973 DS23');
        writeGalleryLink('1973ds23_2', '1973_DS23_2', '1973 DS23');
        writeGalleryLink('1973ds23_rest', '1973_DS23_REST', '1973 DS23 Restoration');
        writeGalleryLink('1973ds23efi', '1973_DS23EFI', '1973 DS23 Pallas EFI');
        writeGalleryLink('1973dsuper5', '1973_DSUPER5', '1973 DSuper5');
        writeGalleryLink('1973dsuper5_2', '1973_DSUPER5_2', '1973 DSuper5');
        writeGalleryLink('1973dsuper5_3', '1973_DSUPER5_3', '1973 DSuper5');
        writeGalleryLink('1973hvan', '1973_HVAN_HY', '1973 HVan HY');
        writeGalleryLink('1974ds23', '1974_DS23', '1974 DS23');
        writeGalleryLink('1974ds23efi', '1974_DS23_EFI', '1974 DS23 Pallas EFI');
        writeGalleryLink('1974dsuper5', '1974_DSUPER5', '1974 DSuper5');
        writeGalleryLink('1974dsuper5_2', '1974_DSUPER5_2', '1974 DSuper5');
        writeGalleryLink('1974dsuper5_3', '1974_DSUPER5_3', '1974 DSuper5');
        writeGalleryLink('1980peug', '1980_PEUG_504', '1980 Peugot 504');
        writeGalleryLink('1987cx20re', '1987_CX_20RE', '1987 Citroen CX 20 RE');
        ?>
    </ul>
</div>
<?php include "connect_down.php"; ?>
