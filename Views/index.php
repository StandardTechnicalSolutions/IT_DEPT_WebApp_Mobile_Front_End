<?php
$get = $_GET["location"];

if (isset($get)) {
    switch ($get) {
        case 'home':
            require __DIR__ . "/templates/home.php";
            require __DIR__ . "/webAppTemplate.php";
            break;
        case "equipment":
            require __DIR__ . "/templates/equipment.php";
            require __DIR__ . "/webAppTemplate.php";
            break;
        case "map":
            require __DIR__ . "/templates/map.php";
            require __DIR__  . "/webAppTemplate.php";
            break;
        case "contact":
            require __DIR__ . "/templates/contact.php";
            require __DIR__ . "/webAppTemplate.php";
            break;
        case "orderForm":
            require __DIR__ . "/templates/order.php";
            require __DIR__ . "/webAppTemplate.php";
            break;
        case "reporttype":
            require __DIR__ . "/templates/reporttype.php";
            require __DIR__ . "/webAppTemplate.php";
            break;
        case "email":
            require __DIR__ . "/EmailUser.php";
            require __DIR__ . "/templates/emailSent.php";
            require __DIR__ . "/webAppTemplate.php";
            break;
        default:
            require __DIR__ . "/templates/error404.php";
            require __DIR__ . "/webAppTemplate.php";
            break;
    }
}  else if (isset($_POST["email"])){
    require __DIR__ . "/EmailUser.php";
    require __DIR__ . "/templates/emailSent.php";
    require __DIR__ . "/webAppTemplate.php";
}
else {
    require __DIR__ . "/templates/home.php";
    require __DIR__ . "/webAppTemplate.php";
}
