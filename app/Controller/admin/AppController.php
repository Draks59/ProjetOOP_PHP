<?php
namespace App\Controller\Admin;

use \App;
use \Core\Auth\DBAuth;

class AppController extends \App\Controller\AppController{

    protected $template = 'admin';
    
    function __construct() {
        parent::__construct();
        // AUTH 
        $app = App::getInstance();
        $auth = new DBAuth($app->getDb());
        if (!$auth->logged()){
            $this->forbidden();
        }
    }

    public function index(){

        $this->render('admin.index');
    }
}