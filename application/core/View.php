<?php

namespace Project2\Views;

class View
{
    public function render(String $template, array $data = null)
    {
        require_once __DIR__ . "/../views/$template.php";
    }
}
