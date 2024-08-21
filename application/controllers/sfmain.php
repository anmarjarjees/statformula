<?php
if ( !defined( 'BASEPATH' ) ) {
  exit( 'No direct script access allowed' );
}

class SFmain extends CI_Controller {
  private $values; // Create a global variable to be used with functions

  // The first function (default) is loaded when the controller is launched

  // We need to load the m_user model for every function in the class, so we add a constructor to be executed directly
  function __construct() {
    // Here we can add any variables that we need to execute directly
    parent::__construct(); // We have to call the constructor method of the parent class, which is the CI class
    $this->values = "";
    // Using the load object to load the model file
    $this->load->model( 'user_model' ); // We need to load the model to connect to the DB and use its functions to get the records
    // Now the user_model is available for any function  
  }

  public function index() {
    // We can also create variables to make it more dynamic by using the $data object that can contain our variables
    // So we can use anything in this data object to become local variables in the calling view classes, e.g., header.php
    $data[ 'title' ] = "StatFormula: Statistical Formulas Solutions";
    // echo "<pre>"; print_r($data['user']); echo"</pre>"; 

    $this->homePage(); // Loading the home function   
    //$this->load->view("test");

    //$this->load->view('homeAdmin',$data);
  }

  function loadTemplate( $template, $data = "" ) {
    if ( $template == "header" || $template == "h" ) {
      $this->load->helper( "form" );
      if ( $this->session->userdata( 'user_logged_in' ) ) {
        $data[ "userInfoArray" ] = $this->user_model->getUser( $this->session->userdata( 'username' ) );
      }
      $this->load->view( '/template/header', $data ); // Appended as an argument to the view function
    } else {
      $this->load->view( '/template/footer' );
    }
  }

  // Now the hello function will not be loaded automatically; we need to call it in the browser
  // localhost/statformula/index.php/statformula/hello
  public function hello() {
    echo "Hello, I am another function";
  }

  public function homePage() {
    $data[ "title" ] = "Welcome to StatFormula";
    $data[ "pageH1" ] = "Welcome to StatFormula";
    // Calling the view method of the load object:
    // $this->load->view('header'); // Header refers to header.php
    // Or we can add it as a parameter, then it will be used inside the header.php in any line of code, NOT only inside the title
    $this->loadTemplate( "h", $data );
    $this->load->view( 'home' );
    $this->loadTemplate( "f" );
  }

  public function formulaPage( $results = "" ) {
    $this->load->helper( "form" );
    $data[ "title" ] = "Statistics Formula";
    $data[ "pageH1" ] = "Statistics Formula";
    $data[ "formulaArray" ] = $results;
    // Calling the view method of the load object:
    // $this->load->view('header'); // Header refers to header.php
    // Or we can add it as a parameter, then it will be used inside the header.php in any line of code, NOT only inside the title
    $this->loadTemplate( "h", $data );
    $this->load->view( 'formula' );
    $this->loadTemplate( "f" );
  }

  public function formulaUserPage( $results = "" ) { // In PHPAC: members()
    if ( $this->session->userdata( 'user_logged_in' ) ) // If this is true, 1
    {
      $data[ "title" ] = "Members Formula Page";
      $data[ "pageH1" ] = "Member Page";
      $data[ "formulaArray" ] = $results;
      $this->load->model( "user_model" );
      $data[ "userInfoArray" ] = $this->user_model->getUser( $this->session->userdata( 'username' ) );
      $this->loadTemplate( "h", $data );
      $this->load->view( 'user/formulaUser', $data );
      $this->loadTemplate( "f" );
    } else {
      redirect( 'sfmain/restrictedPage' );
    }
  }

  public function formulaHelpPage() {
    $data[ "title" ] = "Statistics Formula Help";
    $data[ "pageH1" ] = "Statistics Formulas Quick Reference";
    // Calling the view method of the load object:
    // $this->load->view('header'); // Header refers to header.php
    // Or we can add it as a parameter, then it will be used inside the header.php in any line of code, NOT only inside the title
    $this->loadTemplate( "h", $data );
    $this->load->view( 'formulaHelp' );
    $this->loadTemplate( "f" );
  }

  public function aboutPage() {
    $data[ "title" ] = "About StatFormula";
    $data[ "pageH1" ] = "About StatFormula";
    // Calling the view method of the load object:
    // $this->load->view('header'); // Header refers to header.php
    // Or we can add it as a parameter, then it will be used inside the header.php in any line of code, NOT only inside the title
    $this->loadTemplate( "h", $data );
    $this->load->view( 'about' );
    $this->loadTemplate( "f" );
  }

  public function contactPage( $input = "" ) {
    $this->load->helper( "form" );
    $this->load->library( 'form_validation' );
    $data[ "title" ] = "Contact StatFormula Dev.";
    // Very Important Note: ************************************************
    // Check the change below *********************************************
    // I changed the h1 element of the contact page as shown below:
    // I had to stop it due to the many irrelevant/junk emails!
    $data[ "pageH1" ] = "Dear visitors, this contact form has been stopped since Nov 2020, <br>so no email message will be sent. <br>I had to stop it due to the many irrelevant emails!";
    $data[ 'emailResult' ] = $input;
    // Calling the view method of the load object:
    // $this->load->view('header'); // Header refers to header.php
    // Or we can add it as a parameter, then it will be used inside the header.php in any line of code, NOT only inside the title
    $this->loadTemplate( "h", $data );
    $this->load->view( 'contact' );
    $this->loadTemplate( "f" );
  }
  /*********************************************************************************************************/
  public function signupPage( $loginSubmitValue = "" ) {
    $this->load->helper( "form" );
    $data[ "title" ] = "StatFormula Registration";
    $data[ "pageH1" ] = "Registration Form";
    $data[ 'loginSubmit' ] = $loginSubmitValue;
    // Calling the view method of the load object:
    // $this->load->view('header'); // Header refers to header.php
    // Or we can add it as a parameter, then it will be used inside the header.php in any line of code, NOT only inside the title
    $this->loadTemplate( "h", $data );
    $this->load->view( '/register/signup' );
    $this->loadTemplate( "f" );
  }

  public function formSuccessPage() {
    $data[ "title" ] = "Form Submission";
    $data[ "pageH1" ] = "";
    // Calling the view method of the load object:
    // $this->load->view('header'); // Header refers to header.php
    // Or we can add it as a parameter, then it will be used inside the header.php in any line of code, NOT only inside the title
    $this->loadTemplate( "h", $data );
    $this->load->view( '/register/formSuccess' );
    $this->loadTemplate( "f" );
  }

  public function savedUserPage() {
    $data[ 'title' ] = "New User";
    $data[ "pageH1" ] = "Welcome to StatFormula Community";
    // Calling the view method of the load object:
    // $this->load->view('header'); // Header refers to header.php
    // Or we can add it as a parameter, then it will be used inside the header.php in any line of code, NOT only inside the title
    $this->loadTemplate( "h", $data );
    $this->load->view( '/register/savedUser' );
    $this->loadTemplate( "f" );
  }

  // User Login Form Validation
  public function userLoginFormValidation() {
    $this->load->library( 'form_validation' );
    $this->form_validation->set_rules( 'username', 'Username', 'trim|required|xss_clean|callback_validateCredentials' );
    $this->form_validation->set_rules( 'password', 'Password', 'trim|required|xss_clean' );

    if ( $this->form_validation->run() ) {
      // If validation is successful, create session data and redirect
      $data = [
        'username' => $this->input->post( 'username' ),
        'user_logged_in' => 1
      ];
      $this->session->set_userdata( $data );
      redirect( 'sfmain/formulaUserPage' );
    } else {
      $this->signupPage( TRUE ); // Reload signup page with errors
    }
  }

  // Validate login credentials
  public function validateCredentials() {
    if ( $this->user_model->validUser() ) {
      return TRUE; // Credentials are valid
    } else {
      $this->form_validation->set_message( 'validateCredentials', "Username or Password is incorrect" );
      return FALSE; // Credentials are invalid
    }
  }

  public function editUserProcessUser( $id ) {
    $this->load->library( 'form_validation' );
    $this->form_validation->set_rules( 'firstname', 'First Name', 'trim|required|alpha|xss_clean' );
    $this->form_validation->set_rules( 'lastname', 'Last Name', 'trim|required|alpha|xss_clean' );
    $this->form_validation->set_rules( 'email', 'Email', 'trim|required|valid_email|xss_clean' );
    $this->form_validation->set_rules( 'occupation', 'Occupation', 'trim|xss_clean' );
    $this->form_validation->set_rules( 'url', 'Website', 'trim|prep_url|valid_url|xss_clean' );
    $this->form_validation->set_rules( 'username', 'Username', 'trim|required|is_unique[userinfo.ui_username]|xss_clean' );
    $this->form_validation->set_rules( 'password', 'Password', 'trim|required|min_length[4]|max_length[12]|xss_clean' );
    $this->form_validation->set_rules( 'cpassword', 'Password Confirmation', 'trim|required|matches[password]|xss_clean' );
    $this->form_validation->set_rules( 'values', 'Values', 'trim|required|xss_clean' );

    if ( $this->form_validation->run() == FALSE ) {
      // If validation fails, reload home user page
      $this->homeUserPage();
    } else {
      $postdata = [
        'ui_firstname' => $this->input->post( 'firstname' ),
        'ui_lastname' => $this->input->post( 'lastname' ),
        'ui_email' => $this->input->post( 'email' ),
        'ui_occupation' => $this->input->post( 'occupation' ),
        'ui_url' => $this->input->post( 'url' ),
        'ui_username' => $this->input->post( 'username' ),
        'ui_password' => $this->input->post( 'password' ),
        'ui_values' => $this->input->post( 'values' )
      ];
      // Save user data
      $this->user_model->updateUser( $id, $postdata );
      redirect( 'sfmain/viewUser/' . $id );
    }
  }
}
