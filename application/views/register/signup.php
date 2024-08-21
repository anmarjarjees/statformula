<?php echo heading($pageH1, 1, "class=NotDeclared"); ?>

<p>
    You can register in StatFormula, and it's free. Once registered, you can insert as many values as needed and save them.
</p>
<hr>

<?php
// Display validation errors if they exist from the previous submission
echo "<div class='errorMsg'>";
if (!$loginSubmit) {
    echo validation_errors();
}
echo "</div>";

echo '<div class="formDiv">';
// Open the form, setting the action to 'sfmain/userSignupFormValidation'
echo form_open('sfmain/userSignupFormValidation');
?>

<fieldset>
    <legend>Personal Information</legend>
    <div>
        <label for="firstname">First Name:*</label>
        <input id="firstname" name="firstname" type="text" placeholder="First Name" value="<?php echo set_value('firstname'); ?>" required autofocus />
    </div>

    <div>
        <label for="lastname">Last Name:*</label>
        <input id="lastname" name="lastname" type="text" placeholder="Last Name" value="<?php echo set_value('lastname'); ?>" required />
    </div>
</fieldset>

<fieldset>
    <legend>Contact and Business Information</legend>
    <div>
        <label for="email">Email:*</label>
        <input id="email" name="email" type="email" placeholder="name@domain.com" value="<?php echo set_value('email'); ?>" required />
    </div>

    <div>
        <label for="url">Website:</label>
        <input id="url" name="url" type="text" placeholder="http://www.domain.com" value="<?php echo set_value('url'); ?>" />
    </div>

    <div>
        <label for="occupation">Occupation:</label>
        <input id="occupation" name="occupation" type="text" placeholder="Job Title" value="<?php echo set_value('occupation'); ?>" />
    </div>
</fieldset>

<fieldset>
    <legend>Login Credentials and Values</legend>
    <div>
        <label for="username">Username:*</label>
        <input id="username" name="username" type="text" placeholder="Your login name" value="<?php echo set_value('username'); ?>" required />
    </div>

    <div>
        <label for="password">Password:*</label>
        <input id="password" name="password" type="password" placeholder="Min: 4 characters, Max: 12 characters" value="<?php echo set_value('password'); ?>" required />
    </div>

    <div>
        <label for="cpassword">Password Confirmation:*</label>
        <input id="cpassword" name="cpassword" type="password" placeholder="Re-type the same password" value="<?php echo set_value('cpassword'); ?>" required />
    </div>

    <div>
        <label for="values">Values:</label>
        <textarea id="values" name="values" rows="3" required><?php echo set_value('values'); ?></textarea>
    </div>
</fieldset>

<?php
// Submit button for the form
echo form_submit('submit', 'Register Now!');

// Close the form
echo form_close();
?>
</div>
