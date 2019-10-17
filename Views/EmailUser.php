
<?php 
    $firstName = $_POST["fName"];
    $lastName = $_POST["lName"];
    $orderQuantity = $_POST["orderQ"];
    $userEmail = $_POST["email"];

    $subject = "Scantron Order Confirmation";
    $message = "Hello " . $firstName . " " . $lastName;
    
    $message .= "\nThank you for ordering " . $orderQuantity . "pack(s) of scantrons.";
    $message .= "\nYour order will be available within 24 hours";

    $fromSender = "gkovalick@bloomu.edu";
    
    $message2 = "$firstName $lastName ordered $orderQuantity pack(s) of scantrons";

    mail($userEmail, $subject, $message, $fromSender);
    mail($fromSender, $subject, $message2, "Automated email System" );
?>