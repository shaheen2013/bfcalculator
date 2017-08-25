<?php

/*****
*
* @Author: Nasid Kamal.
*
*****/

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user by id
     */
    function get_user($id)
    {
        $user = $this->db->query("
            SELECT
                *

            FROM
                `users`

            WHERE
                `id` = ?
        ",array($id))->row_array();

        return $user;
    }

    /*
     * Get user by email
     */
    function get_user_by_email($email)
    {
        $user = $this->db->query("
            SELECT
                *

            FROM
                `users`

            WHERE
                `email` = ?
        ",array($email))->row_array();

        return $user;
    }

    /*
     * Get user by id
     */
    function authenticate_user($email, $password)
    {
        $user = $this->db->query("
            SELECT
                *

            FROM
                `users`

            WHERE
                `email` = ? AND `password` = ?
        ",array($email, $password))->row_array();

        return $user;
    }
        
    /*
     * Get all users
     */
    function get_all_users()
    {
        $users = $this->db->query("
            SELECT
                *

            FROM
                `users`

            WHERE
                1 = 1

            ORDER BY `id` DESC
        ")->result_array();

        return $users;
    }
        
    /*
     * function to add new user
     */
    function add_user($params)
    {
        $this->db->insert('users',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user
     */
    function update_user($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('users',$params);
    }
    
    /*
     * function to delete user
     */
    function delete_user($id)
    {
        return $this->db->delete('users',array('id'=>$id));
    }
    
}

?>