<?php echo heading($pageH1,1,"class=NotDeclared"); ?>    

<pre>
    <?php // Uncomment to display session data
    // print_r($this->session->all_userdata()); 
    ?>
</pre>       
<p>
    You can always change or modify your data using the following form:
</p>
<hr />
<div class="errorMsg"><?php echo validation_errors(); ?></div>

<ul class="accordion">
    <!-- Change Personal Info Section -->
    <li class="active">    
        Change Your Personal Info
        <ul>
            <li>
                <div class="formDiv"> <!-- Start of Personal Info Form -->
                    <?php        
                    // Form action to handle changes in personal info
                    echo form_open('sfmain/userSaveChangesFormValidationPart1'); 
                    ?>
                    <fieldset>
                        <legend>Full Name</legend>
                        <div>
                            <label for="firstname">First Name:*</label>
                            <input id="firstname" name="firstname" type="text" placeholder="First Name" value="<?php echo $userInfoArray['ui_firstname']; ?>" required autofocus /> 
                        </div>
                        <div>
                            <label for="lastname">Last Name:*</label>
                            <input id="lastname" name="lastname" type="text" placeholder="Last Name" value="<?php echo $userInfoArray['ui_lastname']; ?>" required autofocus /> 
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Contact and Business Information</legend>
                        <div>
                            <label for="email">Email:*</label>
                            <input id="email" name="email" type="email" placeholder="name@domain.com" value="<?php echo $userInfoArray['ui_email']; ?>" required /> 
                        </div>
                        <div>
                            <label for="url">Website:</label>
                            <input id="url" name="url" type="url" placeholder="http://www.domain.com" value="<?php echo $userInfoArray['ui_url']; ?>" autofocus /> 
                        </div>
                        <div>
                            <label for="occupation">Occupation:</label>
                            <input id="occupation" name="occupation" type="text" placeholder="Job Title" value="<?php echo $userInfoArray['ui_occupation']; ?>" /> 
                        </div>
                        <div>
                            <input id="userID" name="userID" type="hidden" value="<?php echo $userInfoArray['ui_id']; ?>" />
                        </div>    
                    </fieldset>
                    <?php
                    echo form_submit('submit', 'Save Changes');
                    echo form_close();
                    ?>
                </div> <!-- End of Personal Info Form -->
            </li>
        </ul>
    </li>

    <!-- Change Password Section -->
    <li> 
        Change Your Password
        <ul>
            <li>
                <div class="formDiv"> <!-- Start of Password Change Form -->
                    <?php        
                    // Form action to handle password change
                    echo form_open('sfmain/userSaveChangesFormValidationPart2'); 
                    ?>
                    <fieldset>
                        <legend>Password</legend>
                        <div>
                            <label for="curpassword">Current Password:*</label>
                            <input id="curpassword" name="curpassword" type="password" placeholder="Min: 4 characters, Max:12 characters" value="<?php echo set_value('curpassword'); ?>" required autofocus /> 
                        </div>
                        <div>
                            <label for="newpassword">New Password:*</label>
                            <input id="newpassword" name="newpassword" type="password" placeholder="Re-type the same password" value="<?php echo set_value('newpassword'); ?>" required autofocus /> 
                        </div>
                        <div>
                            <label for="cnewpassword">New Password Confirmation:*</label>
                            <input id="cnewpassword" name="cnewpassword" type="password" placeholder="Re-type the same password" value="<?php echo set_value('cnewpassword'); ?>" required autofocus /> 
                        </div>
                        <div>
                            <input id="userID" name="userID" type="hidden" value="<?php echo $userInfoArray['ui_id']; ?>" />
                        </div>
                    </fieldset>  
                    <?php
                    echo form_submit('submit', 'Save Changes');
                    echo form_close();
                    ?>
                </div> <!-- End of Password Change Form -->
            </li>
        </ul>
    </li>

    <!-- Change List of Numbers Section -->
    <li>
        Change Your List of Numbers
        <ul>
            <li>
                <div class="formDiv"> <!-- Start of List of Numbers Form -->
                    <?php        
                    // Form action to handle changes in list of numbers
                    echo form_open('sfmain/userSaveChangesFormValidationPart3'); 
                    ?>
                    <fieldset>
                        <legend>Values</legend>
                        <div>
                            <label for="values">Values:</label>
                            <textarea id="values" name="values" rows="3" required><?php echo $userInfoArray['ui_values']; ?></textarea>
                        </div>
                        <div>
                            <input id="userID" name="userID" type="hidden" value="<?php echo $userInfoArray['ui_id']; ?>">
                        </div>
                    </fieldset>  
                    <?php
                    echo form_submit('submit', 'Save Changes');
                    echo form_close();
                    ?>
                </div> <!-- End of List of Numbers Form -->
            </li>
        </ul>
    </li>
</ul> 
