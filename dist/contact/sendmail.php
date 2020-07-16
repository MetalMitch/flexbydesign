<?php

if(isset($_POST['how'])) {
    $firstname = htmlspecialchars(stripslashes(trim($_POST['firstname'])));
    $lastname = htmlspecialchars(stripslashes(trim($_POST['lastname'])));
    $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
    $more = htmlspecialchars(stripslashes(trim($_POST['more'])));
    foreach ($_POST['how'] as $how);


    echo $how;

    $email_to = "info@flexbydesign.com";
    $email_subject = "Contact From " . $firstname . " " . $surname . " at: " . $email;
    $message = $email_subject . "\n\n" . $firstname . " Heard about Flex by Design via " . $how . "\n\n" . $firstname . " says:" . "\n\n" . $more;
    $wrappedmsg = wordwrap($message, 300);
    $headers = "From: " . $email . "\n";
    $sent = mail($email_to, $email_subject, $wrappedmsg, $headers);

    if ($sent) {
        $location = "Location: success.html";
        header($location);
    }
    else {
        $email_to = "mitchell@mskee.co.uk";
        $email_subject = "Error in FlexByDesign contact form";


        if(isset($firstname)) {
            $firstname_e = "Set";
        } else {
            $firstname_e = "Not Set";
        }

        if(isset($lastname)) {
            $lastname_e = "Set";
        } else {
            $lastname_ = "Not Set";
        }

        if(isset($email)) {
            $email_e = "Set";
        } else {
            $email_e = "Not Set";
        }

        if(isset($more)) {
            $more_e = "Set";
        } else {
            $more_e = "Not Set";
        }

        if(isset($how)) {
            $how_e = "Set";
        } else {
            $how_e = "Not Set";
        }


        $message = "firstname: " . $firstname_e . "\n" . "lastname: " . $lastname_e . "\n" . "email: " . $email_e . "\n" . "more: " . $more_e . "\n" . "how: " . $how_e . "\n";
        $wrappedmsg = wordwrap($message, 300);
        mail($email_to, $email_subject, $wrappedmsg);
        $location = "Location: failure.html";
        header($location);
    }

}
?>