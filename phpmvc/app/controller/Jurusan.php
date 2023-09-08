<?php
class Jurusan extends Controller
{
    public function index()
    {
        $data['judul'] = "Detail Jurusan";
        $data['jurusan'] = $this->model("Jurusan_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('jurusan/index', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if($this->model('Jurusan_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('location: ' . BASE_URL . '/jurusan');
            exit;   
           } else {
               Flasher::setFlash('gagal', 'ditambahkan', 'danger');
               header('location: ' . BASE_URL . '/jurusan');
               exit;
           }
    }
    public function hapus($id)
    {
        if($this->model('Jurusan_model')->hapusDataJurusan($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('location: ' . BASE_URL . '/jurusan');
            exit;   
           } else {
               Flasher::setFlash('gagal', 'dihapus', 'danger');
               header('location: ' . BASE_URL . '/jurusan');
               exit;
           }
    }
}