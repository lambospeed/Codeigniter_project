<?php
// application/controllers/Validation.php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Validation extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();
     
        // load form and url helpers
        $this->load->helper(array('form', 'url'));
         
        // load form_validation library
        $this->load->library('form_validation');
    }
     
    public function basic()
    {
        // basic required field
        $this->form_validation->set_rules('text_field', 'Text Field One', 'required');
         
        // basic required field with minimum length
        $this->form_validation->set_rules('min_text_field', 'Text Field Two', 'required|min_length[8]');
         
        // basic required field with maximum length
        $this->form_validation->set_rules('max_text_field', 'Text Field Three', 'required|max_length[20]');
         
        // basic required field with exact length
        $this->form_validation->set_rules('exact_text_field', 'Text Field Four', 'required|exact_length[12]');
         
        // basic required field but alphabets only
        $this->form_validation->set_rules('alphabets_text_field', 'Text Field Five', 'required|alpha');
         
        // basic required field but alphanumeric only
        $this->form_validation->set_rules('alphanumeric_text_field', 'Text Field Six', 'required|alpha_numeric');
         
        // basic email field with email validation
        $this->form_validation->set_rules('valid_email_field', 'Email Field', 'required|valid_email');
         
        // password field with confirmation field matching
        $this->form_validation->set_rules('password_field', 'Password One', 'required');
        $this->form_validation->set_rules('password_confirmation_field', 'Password Confirmation Field', 'required|matches[password_field]');
         
        // basic required field with IPv4 validation
        $this->form_validation->set_rules('valid_ip_field', 'Valid IP Field', 'required|valid_ip[ipv4]');
         
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('validate_form');
        }
        else
        {
            // load success template...
            echo "It's all Good!";
        }
    }
     
    public function cascade()
    {
        // basic required field with cascaded rules
        $this->form_validation->set_rules('text_field', 'Text Field One', 'required|alpha|min_length[8]|max_length[20]');
          
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('validate_form');
        }
        else
        {
            // load success template...
            echo "It's all Good!";
        }
    }
     
    public function prep()
    {
        // basic required field with trim prepping applied
        $this->form_validation->set_rules('min_text_field', 'Text Field Two', 'trim|required|min_length[8]');
         
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('validate_form');
        }
        else
        {
            // load success template...
            echo "It's all Good!";
        }
    }
     
    public function custom_message()
    {
        // basic required field with trim prepping applied
        $this->form_validation->set_rules('alphabets_text_field', 'Text Field Five', 'required|alpha',
            array('required'=>'Please enter Text Field Five!','alpha'=>'Only alphabets please!'));
         
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('validate_form');
        }
        else
        {
            // load success template...
            echo "It's all Good!";
        }
    }
     
    public function custom_rule()
    {
        // basic required field with trim prepping applied
        $this->form_validation->set_rules('text_field', 'Text Field Five', 'callback_custom_validation');
         
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('validate_form');
        }
        else
        {
            // load success template...
            echo "It's all Good!";
        }
    }
     
    public function custom_validation($field_value) 
    {
        if ($field_value == '' || $field_value == 'demo')
        {
            $this->form_validation->set_message('custom_validation', "Come on, don't act like spammer!");
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
     
    public function configuration()
    {
        // if you pass group id, only elements in that group will be validated
        // $this->form_validation->run('group_one')
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('validate_form');
        }
        else
        {
            // load success template...
            echo "It's all Good!";
        }
    }
}