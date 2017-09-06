<?php

namespace Project2\Controllers;

class Main extends Controller
{
    public function index()
    {
        $this->view->render('index');
    }
}
