# StatFormula: A PHP-Based Web Application for Statistical Calculations
This project is a web application for performing statistical calculations. It was developed using the **CodeIgniter Framework**  following the guidelines provided in the **CodeIgniter User Guide Version 2.1.4**. The application demonstrates the full implementation of **CRUD** (Create, Read, Update, Delete) operations by utilizing the **MVC** (Model-View-Controller) design pattern provided by CodeIgniter.

# MVC Folders:
- Model: application/models/
- View: application/views
- Controller: application/controllers

## Project Setup Instructions and Main Code Files
To get started with the StatFormula project, follow these steps:
1. **Database Configuration:**
   Update the "application/config/database.php" file with your database credentials.
```
$db['default']['hostname'] = 'localhost'; // Replace with your database host
$db['default']['username'] = 'root'; // Replace with your database username
$db['default']['password'] = ''; // Replace with your database password
$db['default']['database'] = 'ci_demo'; // Replace with your database name
```
2. **Main Route Configuration:**
   Set the "default_controller" in "application/config/routes.php" to your main controller. In this project, the main default controller is "sfmain":
```
$route['default_controller'] = "sfmain";
```

3. **Base URL:**
   Set the "base_url" in "application/config/config.php" to your local development URL.

4. **Email Configuration:**
   Update "application/config/email.php" with your email server settings.

5. **Environment File:**
   Create a ".env" file for local environment settings if required.

## NOTES:
Please note that optional parameters in a function should not appear before required parameters. Below is an example of deprecated code and its correction:

Deprecated Code:
```
function log_message($level = 'error', $message, $php_error = FALSE) {
    // function body...
}
```

Corrected Code:
```
function log_message($message, $level = 'error', $php_error = FALSE) {
    // function body...
}
```