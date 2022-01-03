<?php

class Email extends Controller {

    public $email = "";

    function __construct(){
        
    }

    public function index($name = ''){
        $this->view('email/index', ['name' => $user->name]);
    }

    public function preview(){
        $this->email = $this->model('EmailModel');
        $this->email->to = $_POST['to'];
        $this->email->poste = $_POST['poste'];
        $this->email->preview();
        $this->view('email/preview', [
            'to' => $this->email->to, 
            'message' => $this->email->message
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