<?php 
    /**
     * The placeholder content that will fill the main web page template
     * when the user wants to visits the Map page
     */
    $placeholderHeader = "
    <div class='temp-header'>
        <div class='map-headers'>
            <a class='mobile-m map' href='#'>Directions</a>
            <a  class='mobile-m map ben-frank-map' href='#'>Map</a>
        </div>
    </div>
    ";
    $placeholder1 = "<li><a id='desktop-map' class='' href='#'>Directions</a></li>";
    $placeholder2 = "<li><a class='ben-frank-map' href='#'>Map</a></li>";
    $placeholder3 = "<li><a href='/?location=home'>Home</a></li>";
    $placeholder4 = "<li><a href='/?location=equipment'>Equipment</a></li>";
    $placeholder5 = "<li><a href='/?location=map'>Map</a></li>";
    $placeholder6 = "<li><a href='/?location=contact'>Contact</a></li>";
    $placeholder7 = "<li><a href='/?location=orderForm'>Order Scantron</a></li>";
    $placeholder8 = "<li><a href='/?location=reporttype'>Report Type</a></li>";

    // $content_placeholder = "<div id='display-map-area'></div>";
    $extraJsFunction = "javascript/mapFunctions.js";
    $apiScripts = "<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAaiiLsJ0gLod9K76eZZwh5E1RirZajhRk'> </script>";
