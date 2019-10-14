<?php 
    /**
     * The placeholder content that will fill the main web page template
     * when the user wants to visit the home page
     */
    $placeholderHeader = "";
    $placeholder1 = "<li><a href='/?location=home'>Home</a></li>";
    $placeholder2 = "<li><a href='/?location=equipment'>Equipment</a></li>";
    $placeholder3 = "<li><a href='/?location=map'>Map</a></li>";
    $placeholder4 = "<li><a href='/?location=contact'>Contact</a></li>";
    $placeholder5 = "<li><a href='/?location=orderForm'>Order Scantron</a></li>";
    $placeholder6 = "<li><a href='/?location=reporttype'>Report Type</a></li>";

    $content_placeholder = "
        <h1 id='order-form-heading'>Scantron Order Form</h1>
         <form class='order-styles' action='/?location=email' method='POST'>
    <input class='input-styles' type='text' name='fName' placeholder='First Name' required>
    <input class='input-styles' type='text' name='lName' placeholder='Last Name' required>
    <input class='input-styles' type='text' name='orderQ' placeholder='Order Quantity' required>
    <input class='input-styles' type='email' name='email' placeholder='Email@company.com' required>
    <input id='input-button' class='input-styles' type='submit'>
</form>
    ";
    $extraJsFunction = "";
