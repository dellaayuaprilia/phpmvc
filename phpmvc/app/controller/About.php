<?php
class About extends Controller {
    public function index() {
        $data['judul'] = "About";
        $data['nama'] = $this->model('About_model')->getAbout();
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    
}