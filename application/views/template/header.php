<?php echo doctype("html5"); ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This website contains the main statistical formulas">
    <meta name="keywords" content="The Median, The Mean, The Mode, The Standard Deviation, The Average" />

    <title><?php echo $title; ?></title>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="<?php echo base_url('css/SFStyles.css'); ?>" type="text/css" rel="stylesheet" />
</head>
<body>
    <div id="container"> <!-- Container Div wraps all page content -->
    
    <header id="pageHeader">
        <img src="<?php echo base_url('images/banner.png'); ?>" alt="Main Banner" />
    </header>

    <nav id="mainNav"> <!-- Main navigation section -->
        <h1 class="outline">Main Navigation</h1>
        <ul>
            <!-- Conditional navigation links based on user login status -->
            <?php if (!$this->session->userdata('user_logged_in')) : ?> 
                <li><a href="<?php echo base_url();?>sfmain/homePage">Home</a></li> 
            <?php else: ?>
                <li><a href="<?php echo base_url();?>sfmain/homeUserPage">Home</a></li> 
            <?php endif; ?>
                
            <?php if (!$this->session->userdata('user_logged_in')) : ?> 
                <li><a href="<?php echo base_url();?>sfmain/formulaPage">Formula Results</a></li>
            <?php else: ?>
                <li><a href="<?php echo base_url();?>sfmain/formulaUserPage">Formula Results</a></li>
            <?php endif; ?>
          
            <li><a href="<?php echo base_url();?>sfmain/formulaHelpPage">Formula Help</a></li>
            <li class='last'><a href="<?php echo base_url();?>sfmain/contactPage">Contact Us</a></li>
        </ul>
    </nav>

    <aside id="sidebar">
        <?php if ($this->session->userdata('user_logged_in')) : ?>
            <!-- Display user information and logout option if logged in -->
            <div class="titleBox">
                Welcome: <?php echo $userInfoArray['ui_firstname'] . " " . $userInfoArray['ui_lastname']; ?>
                <hr />
                Username: <?php echo $userInfoArray['ui_username']; ?>
            </div>
            <div class="titleBox">
                <a href='<?php echo base_url() . "sfmain/logout"; ?>'>Logout</a>
            </div>
        <?php else: ?>
            <!-- Display login form and signup link if not logged in -->
            <div id="loginBox">
                <h2>Already a member</h2>
                <div id="login">
                    <?php 
                    if (isset($loginSubmit) && $loginSubmit) {
                        echo "<div class='errorMsg'>";
                        echo validation_errors();
                        echo "</div>";
                    }
                    echo form_open('sfmain/userLoginFormValidation');
                    ?>
                        <div>
                            <label for="username">User name:</label>
                            <input name="username" id="username" type="text" value="<?php echo set_value('username'); ?>" />
                        </div>
                        <div>
                            <label for="password">Password:</label>
                            <input name="password" id="password" type="password" value="<?php echo set_value('password'); ?>" />
                        </div>
                        <?php
                        echo form_submit('loginSubmit', 'Sign In');
                        echo form_close();
                        ?>
                </div> <!-- End of loginBox -->
            </div>

            <div id="signupBox">
                <h2>Become a member</h2>
                <p>Sign up with StatFormula and save your values</p>
                <div id="signup">
                    <a href='<?php echo base_url() . "sfmain/signupPage"; ?>'>Create a new account</a>
                </div>
            </div> <!-- End of signupBox -->
        <?php endif; ?>
    </aside>
        
    <section id="mainContent"> <!-- Main content section -->
        <div id="noScript" class="errorMsg"> <!-- JavaScript warning box -->
            <p>This website has many features that depend on JavaScript. Please make sure that your browser has JavaScript enabled.</p>
        </div> <!-- End of JavaScript warning box -->
