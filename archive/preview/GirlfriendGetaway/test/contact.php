<?php
/* Set e-mail recipient */
$myemail  = "info@gfgetaway.com, cfoor@cindyfoor.com";
$EmailFrom = "info@gfgetaway.com";

/* Check all form inputs using check_input function */
$subject = "Girlfriend Getaway Contact Form";
$FirstName    = check_input($_POST['FirstName']);
$LastName    = check_input($_POST['LastName']);
$Email    = check_input($_POST['Email']);
$Phone  = check_input($_POST['Phone']);
$Message = check_input($_POST['Message']);




/* Let's prepare the message for the e-mail */
$message = "
Someone just sent you message from the Girlfriend Getaway contact page.

THEIR INFO:
First Name: $FirstName
Last Name: $LastName
E-mail: $Email
Phone: $Phone

THEIR MESSAGE:
$Message

";

/* Send the message using mail() function */
mail($myemail, $subject, $message, "From: <$EmailFrom>");

/* Prepare autoresponder subject */
$respond_subject = "Thank you for Contacting Girlfriend Getaway";

/* Prepare autoresponder message */
$respond_message = "

Hello $FirstName,

Thank you for contacting Girlfriend Getaway!  Someone will be in touch with you shortly
";

/* Send the message using mail() function */
mail($Email, $respond_subject, $respond_message,"From: <$EmailFrom>");

/* Redirect visitor to the thank you page */
header('Location: contact-thanks.php');
exit();



/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>