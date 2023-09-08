<?php
class About_model {
    private $nama = "Selamat Datang";
    public function getAbout()
    {
        return $this->nama;
    }
}