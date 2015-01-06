<?php
/* Set e-mail recipient */
$myemail  = "info@littlebirdgames.com";
$EmailFrom = "info@littlebirdgames.com";

/* Check all form inputs using check_input function */
$subject = "Little Bird Games Contact Form";
$FirstName    = check_input($_POST['FirstName']);
$LastName    = check_input($_POST['LastName']);
$Email    = check_input($_POST['Email']);
$Message = check_input($_POST['Message']);
$codeInput = check_input($_POST['codeInput']);




/* Let's prepare the message for the e-mail */
$message = "
Someone just sent you message from the Little Bird Games contact form.

THEIR INFO:
First Name: $FirstName
Last Name: $LastName
E-mail: $Email

THEIR MESSAGE:
$Message

IS THIS PERSON HUMAN? THEIR PASSCODE:
$codeInput

";

/* Send the message using mail() function */
mail($myemail, $subject, $message, "From: <$EmailFrom>");

/* Prepare autoresponder subject */
$respond_subject = "Thank you for Contacting Little Bird Games";

/* Prepare autoresponder message */
$respond_message = "

Hello $FirstName,

Thank you for contacting Little Bird Games!  Someone will be in touch with you shortly.
";

/* Send the message using mail() function */
mail($Email, $respond_subject, $respond_message,"From: <$EmailFrom>");

/* Redirect visitor to the thank you page */
header('Location: index.html');
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