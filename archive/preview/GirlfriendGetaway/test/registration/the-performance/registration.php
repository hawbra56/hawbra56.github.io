<?php
/* Set e-mail recipient  */
$myemail  = "info@gfgetaway.com, cfoor@cindyfoor.com";
$EmailFrom = "info@gfgetaway.com";

/* Check all form inputs using check_input function */
$subject = "Girlfriend Getaway Registration";
$ConferenceName    = check_input($_POST['ConferenceName']);
$FirstName    = check_input($_POST['FirstName']);
$LastName    = check_input($_POST['LastName']);
$Email    = check_input($_POST['Email']);
$Phone  = check_input($_POST['Phone']);
$StreetAddress = check_input($_POST['StreetAddress']);
$City  = check_input($_POST['City']);
$State  = check_input($_POST['State']);
$ZipCode  = check_input($_POST['ZipCode']);
$ChurchAffiliation  = check_input($_POST['ChurchAffiliation']);
$DateVenue  = check_input($_POST['DateVenue']);
$NumberOfPeople  = check_input($_POST['NumberOfPeople']);
$NamesOfPeople  = check_input($_POST['NamesOfPeople']);




/* Let's prepare the message for the e-mail */
$message = "
Someone Registered for a conference here are their details.

CONFERENCE NAME:
$ConferenceName

BASIC INFO:
First Name: $FirstName
Last Name: $LastName
E-mail: $Email
Phone: $Phone
Street Address: $StreetAddress 
City: $City
State: $State
Zip Code: $ZipCode
Church Affiliation (if any): $ChurchAffiliation

Date and Venue: $DateVenue

Number of People Being Registered:$NumberOfPeople
Names of people being registered: $NamesOfPeople
";

/* Send the message using mail() function */
mail($myemail, $subject, $message, "From: <$EmailFrom>");

/* Prepare autoresponder subject */
$respond_subject = "Thank you for Registering!";

/* Prepare autoresponder message */
$respond_message = "

Hello $FirstName,

Thank you for registering for Girlfriend Getaway!  
We look forward to seeing you at our Registration Table at the conference on Saturday morning between 9:15 and 10:00 am. The sessions begin promptly at 10:00. You can contact us at info@gfgetaway.com if you have any questions. 

Please note:  Your registration is not complete until your payment has been confirmed.

CONFERENCE NAME:
$ConferenceName

YOUR BASIC INFO:
First Name: $FirstName
Last Name: $LastName
E-mail: $Email
Phone: $Phone
Street Address: $StreetAddress
City: $City
State: $State
Zip Code: $ZipCode
Church Affiliation (if any): $ChurchAffiliation

Date and Venue: $DateVenue

Number of People Being Registered:$NumberOfPeople
Names of people being registered: $NamesOfPeople

Thank you


DISCLAIMER - Please know that registration is done via a “first-come, first served” basis and we have a limited number of conference seats available. If the conference you’ve chosen sells out, or if we are unable to accommodate your request in any way, we will contact you. We are not able to accept any registrations without payment in full, and your payment is non-refundable unless the conference has sold out.


";

/* Send the message using mail() function */
mail($Email, $respond_subject, $respond_message,"From: <$EmailFrom>");

/* Redirect visitor to the thank you page */

if ($DateVenue == 'October 5, 2013 / Doubletree at BWI, Baltimore/Wash DC area'){
		header("Location: 2013-10-05/");
		exit;
	}
	
if ($DateVenue == 'November 16, 2013 / Eden Resort, Lancaster, PA'){
		header("Location: 2013-11-16/");
		exit;
	}
	
if ($DateVenue == 'March 29, 2014 / Shawnee Inn, Poconos, PA'){
		header("Location: 2014-03-29/");
		exit;
	}
	
if ($DateVenue == 'May 3, 2014 / Four Points by Sheraton, Mars, PA'){
		header("Location: 2014-05-03/");
		exit;
	}	
		
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