<?php


class EmailModel {
    
    public $to;
    public $poste;
    public $message;

    public function preview(){     
        $this->message = "Candidature au poste de " . $this->poste;
    }

    public function send(){
        require_once 'sendEmail.php';
    }

}
?>