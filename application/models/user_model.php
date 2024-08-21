<?php
// Each model is a class
class User_Model extends CI_Model {
    
    // Constructor to load the database when the model is instantiated
    public function __construct()
    {
        $this->load->database(); // Loading the database with all the configuration options
    }
    
    // This function retrieves all user information from the 'userinfo' table. 
    // For admin use only to view all users' info in the database.
    public function getAllUsersInfo() {
        $this->db->select()->from("userinfo");
        $query = $this->db->get();
        return $query->result_array(); // This returns an array of records. Use ->result() to return an object.
    }
    
    // Retrieve information for a single user by username.
    public function getUser($userName) {
        //$query =  $this->db->get_where('statformula'array('active'=>1));
        $this->db->select()->from('userinfo')->where(array('ui_username' => $userName));
        $query = $this->db->get();
        return $query->first_row('array'); // Returns user data as an array. Without 'array', it returns an object.
    }
    
    // Insert a new user record into the 'userinfo' table.
    // The user info (fields) array is provided by the controller.
    public function insertUser($userData) {
        $this->db->insert('userinfo', $userData); // $userData could be an object or array but should match the fields.
        return $this->db->insert_id(); // Returns the ID of the last inserted record for further use.
    }
    
    // Update user information based on user ID.
    public function updateUser($userData, $userId) {    
        //echo "The value of id is ".$userId;
        $this->db->where('ui_id', $userId);
        //var_dump($this->db->update('userinfo',$userData));
        return $this->db->update('userinfo', $userData);
    }
 
    // Delete a user record based on user ID.
    public function deleteUser($userId) {
        $this->db->where('ui_id', $userId);
        $this->db->delete('userinfo');
    }
    
    // Validate if a user exists with the provided username and password.
    public function validUser() {
        $this->db->where('ui_username', $this->input->post('username'));
        $this->db->where('ui_password', $this->input->post('password'));
        $query = $this->db->get('userinfo'); // Fetching data from the 'userinfo' table
        
        if ($query->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    } // end validUser
    
    // Validate if the current password is correct for the provided username.
    public function validPassword() {
        $this->db->where('ui_username', $this->input->post('username'));
        $this->db->where('ui_password', $this->input->post('curpassword'));
        $query = $this->db->get('userinfo'); // Fetching data from the 'userinfo' table
        
        if ($query->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    } // end validPassword
    
} // End of main model class
