<?php

class Hubungi_kami extends CI_Controller{

  public function index(){
    $data['hubungi'] = $this->hubungi_model->tampil_data('hubungi')->result();

    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/hubungi_kami', $data);
    $this->load->view('templates_administrator/footer');
  }

  public function kirim_email($id){
    $where = array('id_hubungi'=>$id);
    $data['hubungi'] = $this->hubungi_model->kirim_data($where, 'hubungi')->result();

    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/form_kirim_email', $data);
    $this->load->view('templates_administrator/footer');
  }

  public function kirim_email_aksi(){
    $to_email = $this->input->post('email');
    $subject = $this->input->post('subject');
    $message = $this->input->post('pesan');

    $config = [
      'mailtype'  => 'html',
      'charset'   => 'utf-8',
      'protocol'  => 'smtp',
      'smtp_host' => 'smtp.gmail.com',
      'smtp_user' => 'emai_pengirim@gmail.com',  // Email gmail
      'smtp_pass'   => '123456789',  // Password gmail
      'smtp_crypto' => 'ssl',
      'smtp_port'   => 465,
      'crlf'    => "\r\n",
      'newline' => "\r\n"
    ];

    $this->load->library('email', $config);

    $this->email->from('emai_pengirim@gmail.com', 'Universitas Pekanbaru');
    $this->email->to($to_email);
    $this->email->subject($subject);
    $this->email->message($message);

    if($this->email->send()){
      $this->session->set_flashdata(
        'pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Pesan terkirim
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
      );
      redirect('administrator/hubungi_kami');
    }
    else{
      $this->session->set_flashdata(
        'pesan',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Pesan tidak terkirim
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
      );
      redirect('administrator/hubungi_kami');
    }
  }

  public function delete($id){
    $where = array('id_hubungi' => $id);
    $this->hubungi_model->hapus_data($where, 'hubungi');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data pesan user berhasil dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('administrator/hubungi_kami');
  }


}