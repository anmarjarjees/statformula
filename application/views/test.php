<?php echo doctype("html5"); ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This blog contains important tips and useful articles about protecting yourself while browsing or surfing the internet.">
    <meta name="keywords" content="Antivirus, Internet Security, Safe Surfing, Malware Protection, Spyware Protection, Personal Data Protection, Strong Passwords, Family Safety">
    
    <title><?php echo $title; ?></title>
    
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
    <link href="<?php echo base_url('css/SFStyles.css'); ?>" type="text/css" rel="stylesheet" />
    <script src="<?php echo base_url('js/SFScript.js'); ?>"></script>
</head>
<body>
    <div id="container"> <!-- Container div wraps all page content -->
    
        <header id="pageHeader">
            <img src="./images/banner.jpg" alt="Main Banner" />
        </header>
        
        <div id="noScript" class="errorMsg"> <!-- JavaScript warning box -->
            <p>This website has many features that depend on JavaScript. Please ensure that your browser settings have JavaScript enabled.</p>
        </div> <!-- End of JavaScript warning box -->

        <nav id="mainNav"> <!-- Main navigation section -->
            <h1 class="outline">Main Navigation</h1>
            <ul>
                <li><a href="<?php echo base_url(); ?>index.php/statformula/homePage">Home</a></li> 
                <li><a href="<?php echo base_url(); ?>index.php/statformula/formulaPage">Formulas</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/statformula/aboutPage">About Us</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/statformula/contactPage">Contact Us</a></li>    
            </ul>
        </nav> 

        <section id="mainContent"> <!-- Main content section -->
            <h1>Heading 1</h1>
            <h2>Heading 2</h2>
            <h3>Heading 3</h3>
            <h4>Heading 4</h4>
            <p>You can enter your numbers in the box below, separated by commas.</p>
            <hr>
        </section> <!-- End of section#mainContent -->
        
        <footer id="pageFooter"> <!-- Footer section -->
            <ul>
                <li><a href="home.php">Home</a></li> 
                <li><a href="about.php">About Us</a></li>
                <li><a href="blog.php">Our Blog</a></li>
                <li><a href="contact.php">Contact Us</a></li>    
            </ul>
            Developed by: Anmar
        </footer> <!-- End of footer section -->
        
    </div> <!-- End of container div -->
</body>
</html>
