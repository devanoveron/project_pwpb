<?php
class Suratmasuk extends Controller
{
    public function index()
    {
        $data['judul'] = "Surat Masuk";
        $this->view('templates/header', $data);
        $this->view('suratmasuk/index');
        $this->view('templates/header');
    }
}
