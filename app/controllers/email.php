<?php

class Email extends Controller {

    public function index($name = ''){
        // $user = $this->model('User');
        // $user->name = $name;

        $this->view('email/index', ['name' => $user->name]);
    }

    public function send(){
        $email = $this->model('EmailModel');
        $email->to = $_POST['to'];
        $email->content = $_POST['content'];

        $this->view('email/details', [
            'to' => $email->to, 
            'content' => $email->content
        ]);
    }

}