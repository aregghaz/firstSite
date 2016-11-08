<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function singleuser($user_id)
    {
        $this->load->model('user_model');
        $user = $this->User_model->get_user_by_id($user_id);
        $data = array(
            'user' => $user[0]
        );
        $this->load->view('header');
        $this->load->view('user/singleuser', $data);
        $this->load->view('footer');
    }
    function articles() {
        $this->load->model('User_model');
        $username = $this->input->post('login');
        $data = array(
            'items'=> $this -> User_model ->get_articles($username),
        );
        $this->load->view('header');
        $this->load->view('user/loging');
        $this->load->view('footer');
    }
    function articles2() {
        $this->load->model('User_model');
        $name['organisation'] = $this->User_model->get_articless();
        $this->load->view('header');
        $this->load->view('user/home', $name);
        $this->load->view('footer');
    }
    public function index()
    {
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('User_model');
        $name['organisation'] = $this->User_model->get_articless();
        $this->load->view('header');
        $this->load->view('user/home', $name);
        $this->load->view('footer');
    }
    public function login()
    {
        $this->load->library('form_validation');
        $this->load->model('User_model');
        $this->load->view('header');
        $this->session->userdata('item');
        var_dump($this-> session-> userdata('item'));
        $username = $this->input->post('login');
        $password = $this->input->post('password');
        if (isset($_POST['add'])) {
            $name['organisation'] = $this->User_model->get_articles($username, $password);
            if (count($name, COUNT_RECURSIVE) > 1) {
                $this-> session-> set_userdata('username', $username);
                var_dump($this-> session-> userdata('item'));
                $this->load->view('header', $name);
                $this->load->view('user/loging', $name);
            }
                else {
                $name['organisation'] = $this->User_model->get_articless();
                $this->load->view('user/home', $name);
                }
        }
        $this->load->view('footer');
    }
}

/*

}
*/