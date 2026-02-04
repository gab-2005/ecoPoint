<?php

class HomeController extends Controller {

    public function index() {
        // Apenas carrega a Home
        $this->view('home/index');
    }
}
