<?php


class EmailModel {
    public $to;
    public $content;

    public function preview(){
        ob_start();
        include '../app/views/email/content.php';
        $content = ob_get_clean();
    }

    public function send(){
        require_once 'sendEmail.php';
    }

}
?>