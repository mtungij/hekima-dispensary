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
        $staff = $this->StaffModel->get_single_staff($id);
        $this->load->view('staff/staff_profile', ["staff" => $staff]);
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
        $config['upload_path']          = './public/uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';

                $this->load->library('upload', $config);

                $uplaod = $this->upload->do_upload('image_url');
                $error = $this->upload->display_errors();

                if ( ! $uplaod && preg_match_all("/You did not select a file to upload./i", $error) < 1 ){
                    $this->session->set_flashdata('uploadError', $error);
                    return redirect('staff');
                } else {
                    $data = $this->upload->data();
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
                        "image_url" => "public/uploads/".$data["file_name"],
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



     public function update() {
        $data = array(
            "id" => $this->input->post('id'),
            "first_name" => $this->input->post('first_name'),
            "last_name" => $this->input->post('last_name'),
            "username" => $this->input->post('username'),
            "email" => $this->input->post('email'),
            "phone_number" => $this->input->post('phone_number'),
            "departiment" => $this->input->post('departiment'),
            "position" => $this->input->post('position'),
            "gender" => $this->input->post('gender'),
            "password" => $this->input->post('password'),
            //"image_url" => $this->input->post('image_url'),
            //"attachment_url" => $this->input->post('attachment_url')
        );

        $q = $this->StaffModel->update_staff($data);
        if($q) {
            $this->session->set_flashdata('updateSuccess', 'Staff is updated successifuly.');
            redirect('staff/staff_profile/'.$data["id"]);
        } 
        
    }

    public function update_status($status, $id) {
        if($status == "active") {
            $staff_status = array(
                "status" => "blocked"
            );
            $this->StaffModel->block_staff($staff_status, $id);
            $this->session->set_flashdata('blocked', 'Staff is now blocked!');
            redirect("staff/staff_profile/".$id);
        } else {
            $staff_status = array(
                "status" => "active"
            );
            $this->StaffModel->block_staff($staff_status, $id);
            $this->session->set_flashdata('unblocked', 'Staff is unblocked successfully!');
            redirect("staff/staff_profile/".$id);
        }
    }

    public function delete($id) {
        $q = $this->StaffModel->delete_staff($id);
        if($q) {
            $this->session->set_flashdata('staffDeleted', 'Staff was deleted successfully!');!
            redirect('staff/staffs');
        }
    }
}