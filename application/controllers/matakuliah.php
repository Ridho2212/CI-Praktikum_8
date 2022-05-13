<?php 
class matakuliah extends CI_Controller{
    public function index()
    {
    $this -> load -> model('matakuliah_models');
    $matakuliah = $this -> matakuliah_models -> getAll();
    $data['matakuliah'] = $matakuliah;
    // kirim data dan kirim ke dalam view   
    $this -> load -> view('matakuliah/index', $data);    
    }
}

?>