<?php

class Auth extends CI_Controller{

  public function index(){
    $this->load->view('templates_administrator/header');
    $this->load->view('administrator/login');
    $this->load->view('templates_administrator/footer');
  }
  
  public function proses_login(){

    $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username wajib diisi']);
    $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib diisi']);
    if($this->form_validation->run() == FALSE){
      $this->load->view('templates_administrator/header');
      $this->load->view('administrator/login');
      $this->load->view('templates_administrator/footer');
    }
    else{
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $user = $username;
      $pass = md5($password);

      $cek = $this->login_model->cek_login($user, $pass);

      if($cek->num_rows() > 0){
        foreach($cek->result() as $ck){
          $sess_data['username'] = $ck->username;
          $sess_data['email'] = $ck->email;
          $sess_data['level'] = $ck->level;

          $this->session->set_userdata($sess_data);
        }
        if($sess_data['level'] == 'admin'){
          redirect('administrator/dashboard');
        }
        else{
          $this->session->set_flashdata(
            'pesan',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              Username atau password salah
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>'
          );
          redirect('administrator/auth');
        }
      }
      else{
        $this->session->set_flashdata(
          'pesan',
          '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Username atau password salah
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>'
        );
        redirect('administrator/auth');
      }
    }
  }

  public function logout(){
    $this->session->sess_destroy();
    redirect('administrator/auth');
  }
}