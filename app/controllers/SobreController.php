<?php

class SobreController extends Controller {

    public function __construct() {
        AuthMiddleware::verificar();
    }

    public function index() {
        $this->view('sobre/index');
    }
}
