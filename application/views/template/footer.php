<!-- Footer Template -->
</section> <!-- End of section#mainContent -->

<footer id="pageFooter">
    <ul>
        <!-- Conditional footer links based on user login status -->
        <?php if (!$this->session->userdata('user_logged_in')) : ?> 
            <li class='active'><a href="<?php echo base_url(); ?>sfmain/homePage">Home |</a></li> 
        <?php else: ?>
            <li><a href="<?php echo base_url(); ?>sfmain/homeUserPage">Home |</a></li> 
        <?php endif; ?>
                
        <?php if (!$this->session->userdata('user_logged_in')) : ?> 
            <li><a href="<?php echo base_url(); ?>sfmain/formulaPage">Formula Results |</a></li>
        <?php else: ?>
            <li><a href="<?php echo base_url(); ?>sfmain/formulaUserPage">Formula Results |</a></li>
        <?php endif; ?>
        
        <li><a href="<?php echo base_url(); ?>sfmain/formulaHelpPage">Formula Help |</a></li>
        <!--<li><a href="<?php echo base_url(); ?>sfmain/aboutPage">About Us</a></li>-->
        <li class='last'><a href="<?php echo base_url(); ?>sfmain/contactPage">Contact Us</a></li>    
    </ul>
    Designed and Developed By: 
    <a href="http://www.linkedin.com/in/anmarjarjees" target="_blank" title="Anmar Jarjees LinkedIn">Anmar Jarjees</a>
</footer> <!-- End of pageFooter -->

</div> <!-- End of div#container, the div that contains all page sections --> 

<!-- JavaScript files -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('js/jquery.fittext.js'); ?>"></script>
<script src="<?php echo base_url('js/SFScript.js'); ?>"></script>

</body>
</html>