<?php

namespace Example\Project\Controllers;

class Email extends Controller {

    public $email = "";

    function __construct(){
        
    }

    public function index(){
        $this->view('email/index');
    }

    public function preview(){
        $this->email = $this->model('EmailModel');
        $this->email->to = $_POST['to'];
        $this->email->poste = $_POST['poste'];
        $this->email->preview();
        $tel = $_ENV['TEL'];
        $this->view('email/preview', [
            'to' => $this->email->to, 
            'message' => $this->email->message, 
            'tel' => $tel
        ]);
    }

    public function send(){
        $email->send();
        $this->view('email/details', [
            'to' => $email->to, 
            'message' => $email->message
        ]);
    }

}