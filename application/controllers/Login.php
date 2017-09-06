<?php

namespace Project2\Controllers;

use Project2\Models\Users;

class Login extends Controller
{
    private $model;

    public function index()
    {
        $this->view->render('login');
    }

    public function authorization()
    {
        require_once __DIR__ . '/../models/Users.php';
        $this->model = new Users();
        $this->model->authorizeUser(
            $_POST['login'],
            $_POST['password']
        );
        if ($this->model->success) {
            session_start();
            $_SESSION['access'] = 'granted';
            $data['message'] = 'Вы авторизованы';
            $this->view->render('message', $data);
        } else {
            $data['message'] = $this->model->message;
            $this->view->render('login', $data);
        }
    }
}
