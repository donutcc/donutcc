<?php
define("TITLE", "Contact | Donuts CC");
include('includes/header.php');
?>
<br><br>
<div class="contact">
    <h1>Get in touch with us</h1>
    <br>

    <?php

    //check for header injections
    function has_header_injection($str)
    {
        return preg_match("/[\r\n]/", $str);
    }

    if (isset($_POST['contact_submit'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $msg = $_POST['message'];

        //check to see if $name or $email have header injections
        if (has_header_injection($name) || has_header_injection($email)) {
            die(); //if true kill the script
        }
        if (!$name || !$email || !$msg) {
            echo '<h4 class="error">All fields required.</h4><a href="contact.php" class="button block">Go back and try again</a>';
            exit;
        }

        //add the recipient to a variable
        $to = "sfartz.alexandra@yahoo.com";

        //create a subject
        $subject = "$name sent you a message via contact form";

        //construct the message
        $message = "Name: $name\r\n";
        $message .= "Email: $email\r\n";
        $message .= "Message:\r\n$msg";

        // if the subscribe box is checked
        if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe') {

            //add a new line to the $message
            $message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
        }
        $message = wordwrap($message, 72); //72 characters per line

        //set the mail headers into a variable
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $headers .= "From: $name <$email> \r\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSMail-Priority: High\r\n\r\n";

        //sent the email
        mail($to, $subject, $message, $headers);

    ?>

        <!-- show success message after mail has sent -->
        <h5>Thanks for contacting Donuts CC!</h5>
        <p>Please allow 24 hours for response</p>
        <p><a href="/final" class="button block">&laquo; Go to Home Page</a></p>

    <?php  } else { ?>

        <form action="" method="post" id="contact-form">
            <label for="name">Your name</label>
            <input type="text" id="name" name="name">
            <label for="email">Your email</label>
            <input type="email" id="email" name="email">
            <label for="message">Your message</label>
            <textarea name="message" id="message"></textarea>
            <br>
            <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe"><label for="subscribe">Subscribe for newsletter</label>
            <br>
            <input type="submit" class="button next" name="contact_submit" value="Send Message">
        </form>

    <?php } ?>

</div>
<br>

<?php include('includes/storeHours.php'); ?>
<br>
<?php include('includes/footer.php'); ?>