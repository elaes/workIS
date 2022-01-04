<?php

namespace Example\Project\Controllers;

class Home extends Controller {

    public function index(){

        $this->view('home/index');
        
    }

}