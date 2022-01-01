<?php

class Email extends Controller {

    private $email;

    function __construct(){
        $this->$email = $this->model('EmailModel');
    }

    public function index($name = ''){
        $this->view('email/index', ['name' => $user->name]);
    }

    public function preview(){
        $this->$email = $this->model('EmailModel');
        $this->$email->to = $_POST['to'];
        $this->$email->content = $_POST['content'];
        $this->$email->preview();
        $this->view('email/preview', [
            'to' => $email->to, 
            'content' => $email->content
        ]);
    }

    public function send(){
        $email->send();
        $this->view('email/details', [
            'to' => $email->to, 
            'content' => $email->content
        ]);
    }

}