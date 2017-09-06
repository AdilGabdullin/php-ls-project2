<?php

namespace Project2\Controllers;

use Project2\Models\Users;

class Files extends Controller
{
    private $model;

    public function index()
    {
        if ($this->access() === 'denied') {
            $data['message'] = 'Доступ только для авторизованых пользователей';
            $this->view->render('message', $data);
            return;
        }
        require_once __DIR__ . '/../models/Users.php';
        $this->model = new Users();
        $this->model->loadAllPhotos();
        $data = $this->model->photos;
        $this->view->render('photos', $data);
    }

    public function change(int $userId = 0)
    {
        if ($this->access() === 'denied') {
            $data['message'] = 'Доступ только для авторизованых пользователей';
            $this->view->render('message', $data);
            return;
        }
        if (!is_numeric($userId)) {
            $data['message'] = 'Ошибка';
            $this->view->render('message', $data);
            return;
        }
        require_once __DIR__ . '/../models/Users.php';
        $this->model = new Users();
        if ($_FILES['avatar']['tmp_name'] != '') {
            $this->model->changePhoto($userId, $_FILES['avatar']);
            header('Location: /files/');
            return;
        }
        $data = $this->model->getNameAndPhoto($userId);
        if ($data['photo'] === null) {
            $data['photo'] = 'default-avatar.png';
        }
        $this->view->render('change-photo', $data);
    }
}
