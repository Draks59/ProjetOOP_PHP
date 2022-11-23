<?php

namespace App\Controller;

use App;
use Core\Controller\Controller;

class AppController extends Controller
{

    protected $template = 'default';

    function __construct()
    {
        $this->viewPath = ROOT . "/app/Views/";
    }

    protected function loadModel($model_name)
    {

        $this->$model_name = App::getInstance()->getTable($model_name);
    }
    public function index()
    {

        $this->render('templates.index');
    }
}
