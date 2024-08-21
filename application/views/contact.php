<?php echo heading($pageH1, 1, "class=NotDeclared"); 

// Load the form helper to use its libraries
// The form helper is loaded here because this view contains the contact form
// URL and HTML helpers are used across all views, so they are autoloaded in config/autoload.php

// Display any email result messages
echo $emailResult;

/* Display validation errors if they exist from the last submission */
echo "<div class='errorMsg'>"; 
echo validation_errors();
echo "</div>";

echo "<div class='formDiv'>";

// Open the form, specifying the action URL
// The form will be submitted to the send_email function inside the site controller
echo form_open("sfmain/sendEmail");

/* Full Name input field */
echo form_label("Full Name: ", "fullName");

// Form input for Full Name
$data = array(
    "id" => "fullName",
    "name" => "fullName",
    "value" => set_value("fullName") // Populate user input if available
);
echo form_input($data);

/* Email input field */
echo form_label("Email: ", "email");

// Form input for Email
$data = array(
    "id" => "email",
    "name" => "email",
    "value" => set_value("email") // Populate user input if available
);
echo form_input($data);

/* Subject input field */
echo form_label("Subject: ", "subject");

// Form input for Subject
$data = array(
    "id" => "subject",
    "name" => "subject",
    "value" => set_value("subject") // Populate user input if available
);
echo form_input($data);

/* Message textarea field */
echo form_label("Message: ", "message");

// Form textarea for Message
$data = array(
    "id" => "message",
    "name" => "message",
    "value" => set_value("message") // Populate user input if available
);
echo form_textarea($data);

/* Submit button */
echo form_submit("contactSubmit", "Send");

echo form_close(); // Close the form tag
echo "</div>";
?>
