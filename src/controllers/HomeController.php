<?php

namespace src\controllers;

use \core\Controller;
use \src\libs\Rest;
use \src\models\Produto;

class HomeController extends Controller
{
    protected $request;

    public function __construct()
    {
        $this->request = json_decode(file_get_contents('php://input'));
    }

    public function getAll()
    {
        var_dump($this->request);
    }
}
