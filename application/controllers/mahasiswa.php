<?php 
class mahasiswa extends CI_Controller{
    public function index()
    {
    // akses model mahasiswa
    $this -> load -> model('mahasiswa_models');
    $mahasiswa = $this -> mahasiswa_models -> getAll();
    $data['mahasiswa'] = $mahasiswa;
    // kirim data dan kirim ke dalam view    
    $this -> load -> view('mahasiswa/index', $data);
    }

    public function detail($id){
        //akses model mahasiswa
        $this->load->model('mahasiswa_models');
        $siswa = $this->mahasiswa_models->getById($id);
        $data ['siswa'] = $siswa;

        $this -> load -> view('mahasiswa/detail', $data);
    }
}


?>