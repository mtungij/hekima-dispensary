<?php

class Staff extends CI_controller 
{
    public function __construct() {
        parent::__construct();
        $this->load->model('StaffModel');
        $this->load->model('DepartimentModel');
        $this->load->model('PositionModel');
    }

    public function index() {
        $staffs = $this->StaffModel->all_staff();
        $departiments = $this->DepartimentModel->get_all_departiments();
        $positions = $this->PositionModel->get_all_positions();
        $this->load->view('staff/add_staff', ["staffs" => $staffs, 'departiments' => $departiments, "positions" => $positions]);
    }

    public function staffs() {
        $staffs = $this->StaffModel->all_staff();
        $this->load->view('staff/all_staff', array("staffs" => $staffs));
    }

    public function staff_profile($id) {
        $this->load->view('staff/staff_profile');
    }

    public function login_index()
    {
        $this->load->view('login');   
    }

    public function login() {
        $data = array(
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password')
        );

        $result = $this->StaffModel->get_staff($data);
        
        if(count($result) === 0) {
            $this->session->set_flashdata('errorLogin', 'Invalid username or password.');
            redirect("staff/login_index");
        } else {
            $userdata = array(
                'user_id' => $result->id,
                'username' => $result->username,
                'email' => $result->email,
                'img' => $result->img,
            );
            
            $this->session->set_userdata( $userdata );
            
            redirect('');
        }
    }

    public function create() {
        $data = array(
            "first_name" => $this->input->post('first_name'),
            "last_name" => $this->input->post('last_name'),
            "username" => $this->input->post('username'),
            "email" => $this->input->post('email'),
            "phone_number" => $this->input->post('phone_number'),
            "departiment" => $this->input->post('departiment'),
            "position" => $this->input->post('position'),
            "gender" => $this->input->post('gender'),
            "password" => $this->input->post('password'),
            "image_url" => $this->input->post('image_url'),
            //"attachment_url" => $this->input->post('attachment_url')
        );

        $q = $this->StaffModel->create_staff($data);
        if($q) {
            $this->session->set_flashdata('registerSuccess', 'Staff is registered succcessfully.');
            redirect('staff');
        } else {
            $this->session->set_flashdata('userExist', 'Staff with this username already exist');
            redirect('staff');
        }
        
    }
}