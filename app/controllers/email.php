<?php

namespace Example\Project\Controllers;

class Email extends Controller {

    public $email = "";

    function __construct(){        
        $this->email = $this->model('EmailModel');
    }

    public function index(){
        $this->view('email/index');
    }

    public function preview(){
        $this->email->to = $_POST['to'];
        $this->email->set_poste($_POST['poste']);
        $this->email->preview();
        $tel = $_ENV['TEL'];
        var_dump($this->email);
        $this->view('email/preview', [
            'to' => $this->email->to, 
            'message' => $this->email->message, 
            'tel' => $tel
        ]);
    }

    public function send(){
        var_dump($this->email);
        // $email->send();
        $this->view('email/confirm', [
            'to' => $this->email->to, 
            'message' => $this->email->message,
            'result' => $this->email->get_poste()
        ]);
    }

}