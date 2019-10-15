
<?php 
    $firstName = $_POST["fName"];
    $lastName = $_POST["lName"];
    $orderQuantity = $_POST["orderQ"];
    $userEmail = $_POST["email"];

    $subject = "Scantron Order Confirmation";
    $message = "Hello " . $firstName . " " . $lastName;
    
    $message .= "\nThank you for ordering " . $orderQuantity . "X scantrons.";
    $message .= "\nYour order will be available in 5 - 7 business days.";

    $fromSender = "gkovalick@bloomu.edu";
    
    $message2 = "$firstName $lastName ordered $orderQuantityX scantrons";

    mail($userEmail, $subject, $message, $fromSender);
    mail($fromSender, $subject, $message2, "Automated email System" );
?>