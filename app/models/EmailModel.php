<?php


class EmailModel {
    public $to;
    public $content;

    public function send(){
        require_once 'sendEmail.php';
    }

}
?>