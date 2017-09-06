<?php

namespace Project2\Controllers;

use Project2\Models\Users;

class Registration extends Controller
{
    private $model;

    public function index()
    {
        $this->view->render('registration');
    }

    public function new()
    {
        require_once __DIR__ . '/../models/Users.php';
        $this->model = new Users();
        $this->model->registerNewUser(
            $_POST['login'],
            $_POST['password1'],
            $_POST['password2'],
            $_POST['name'],
            $_POST['age'],
            $_POST['description'],
            $_FILES['avatar']
        );
        $data['message'] = $this->model->message;
        if ($this->model->success) {
            $this->view->render('message', $data);
        } else {
            $this->view->render('registration', $data);
        }
    }
}
