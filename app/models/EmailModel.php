<?php


class EmailModel {
    
    public $to;
    public $poste;
    public $message;
    public $result;

    public function preview(){     
        $this->message = "Candidature au poste de " . $this->poste;
    }

    public function send(){
        require_once 'sendEmail.php';
    }

    public function set_poste($poste = '') : void {
        $this->poste = $poste;
        $_SESSION["poste"] = $this->poste;
    }

    public function get_poste() : string {
        var_dump($_SESSION);
        return $_SESSION["poste"] ?? "";
    }


}
?>