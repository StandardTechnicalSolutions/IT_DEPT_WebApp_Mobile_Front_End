<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>BU IT DEPT</title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/layout.css">

<body>
    <div id="main-container">
        <!-- This div needs to be a grid container -->
        <header class="main--header" id="header">
            <!-- This header element is flex container and it is also assigned grid-area: header -->
            <div id="bu-logo">
                <a id="home" href="/?location=home"><img src="images/logo.png"></a>
                <a id="bu-main-menu"><span>&#9776</span></a>
                <ul id="tablet-desktop-links">
                    <li><a href="/?location=equipment">Equipment</a></li>
                    <li><a href="/?location=map">Map</a></li>
                    <li><a href="/?location=contact">Contact</a></li>
                    <li><a href="/?location=orderForm">Order Form</a></li>
                    <li><a href="/?location=reporttype">Report Type</a></li>
                </ul>
            </div>
        </header>
        <?php echo $placeholderHeader ?>
        <header id="header-links">
            <!-- <div id="content-filler">&nbsp;</div> -->
            <ul class="main--header__link--container">
                <!-- Flex child who is centered during mobile who will also be a flex container that centers its children when the mobile display is active -->
                <li><a href="/?location=equipment">Equipment</a></li> <!-- Flex child who is centered during the mobile display and is vertically layed out, when the display is larger than mobile then this items will be displayed with space between and it will layed out horizontally -->
                <li><a href="/?location=map">Maps</a></li> <!-- Flex child who is centered during the mobile display and is vertically layed out, when the display is larger than mobile then this items will be displayed with space between and it will layed out horizontally -->
                <li><a href="/?location=contact">Contact</a></li> <!-- Flex child who is centered during the mobile display and is vertically layed out, when the display is larger than mobile then this items will be displayed with space between and it will layed out horizontally -->
                <li><a href="/?location=orderForm">Order Form</a></li>
                <li><a href="/?location=reporttype">Report Type</a></li>
        </header>
        <!-- Grid element who is also a grid container. When the display grows larger than normal then this grid container will be in use -->
        <main id="main-content">
            <div id="main-content-container">
                <!--<a id="displaymap" href="#">Show Map</a>-->
                <!-- <ul id="equipLink">
                    <li><a id='Scan' href='#'>Scantron OpScan6</a></li>
                    <li><a id='OMR' href='#'>Remark Classic OMR v5.0</a></li>
                    <li><a id='EliteDesk' href='#'>HP EliteDesk 800 G1</a></li>
                    <li><a id='Windows' href='#'>Microsoft Windows 10 Education</a></li>
                </ul> -->
                <!-- <?php //echo $placeholderHeader 
                        ?> -->
                <div id="sidebar--links">
                    <!-- Grid element who is also flex container that centers its children in a vertical display when the display is in tablet or computer mode -->
                    <ul class="main--content__sidebar-link--container">
                        <!-- Flex child who is centered during tablet and computer mode and is also a Flex container that centers it children in a vertical display when the display is in tablet or computer mode -->
                        <!-- <li id="map"><a href="#">Link One</a></li> <!-- Flex child who is centered and displayed vertically -->
                        <!--<li><a href="#">Link Two</a></li> <!-- Flex child who is centered and displayed vertically -->
                        <!--<li><a href="#">Link Three</a></li> <!-- Flex child who is centered and displayed vertically -->
                        <!--<li><a href="#">Link Four</a></li> <!-- Flex child who is centered and displayed vertically -->
                        <!--<li><a href="#">Link Five</a></li>
                        <li><a href="#">Link Six </a></li> -->
                        <?php for ($i = 1; $i <= 8; $i++) {
                            echo ${"placeholder" . $i};
                        } ?>
                    </ul>
                </div>
                <div id="main-content--Display--area">
                    <!-- A grid element who is also a flex container that centers its children vertically when its display is set to mobile and horizontally when its display is either tablet or computer -->
                    <!--<div id="map-area"></div>-->
                    <?php echo $content_placeholder; ?>
                    <!-- A flex child and flex container who is centered vertically when display is set to mobile and horizontally when the display is set to tablet or computer -->
                    <!-- When the $content_placeholder above is a flex container its centers its children either vertically or horizontally depending upon the display -->
                </div>
            </div>
        </main>
        <footer id="footer">
            <!-- A grid element who is also a flex container who centers its children vertically or horizontally depending upon the display -->
            <p><a href="https://github.com/StandardTechnicalSolutions">Standard Tech <span>&copy;</span> <?php echo "<span>" . date("Y") . "</span>" ?></a></p>
        </footer>
    </div>
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaiiLsJ0gLod9K76eZZwh5E1RirZajhRk"> </script> -->
    <script src="/javascript/app.js"></script>
    <script src=<?php echo $extraJsFunction ?>></script>
    <?php echo $apiScripts ?>
</body>

</html>