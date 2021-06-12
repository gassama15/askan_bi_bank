<?php

namespace App\Controllers;

use App\Utils\Session;

abstract class Controller
{
    protected $model;
    protected $modelName;
    protected $session;

    public function __construct()
    {
        $this->model = new $this->modelName();
        $this->session = Session::getInstance();
    }

    public function formateNumber(float $number)
    {
        return number_format($number, 0, ',', ' ');
    }

    public function formateDate(string $date)
    {
        return date('d-m-Y', strtotime($date));
    }
}