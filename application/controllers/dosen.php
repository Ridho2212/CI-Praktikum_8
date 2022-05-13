<?php 
class dosen extends CI_Controller{
    public function index()
    {
    $this -> load -> model('dosen_models');
    $dosen = $this -> dosen_models -> getAll();
    $data['dosen'] = $dosen;
    // kirim data dan kirim ke dalam view   
    $this -> load -> view('dosen/index', $data);
    }

    public function detail($id){
    //akses model mahasiswa
    $this->load->model('dosen_models');
    $ddosen = $this->dosen_models->getById($id);
    $data ['ddosen'] = $ddosen;

    $this -> load -> view('dosen/detail', $data);
    }
}
?>