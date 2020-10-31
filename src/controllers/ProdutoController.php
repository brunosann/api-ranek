<?php

namespace src\controllers;

use \core\Controller;
use \src\classes\Rest;
use \src\models\Produto;

class ProdutoController extends Controller
{
    protected $request;
    protected $modelProduto;
    public function __construct()
    {
        $this->request = json_decode(file_get_contents('php://input'));
        $this->modelProduto = new Produto();
    }

    public function getAll()
    {
        $data = $this->modelProduto->getAll();
        Rest::response($data, 200, 'success');
    }

    public function get($params)
    {
        $data = $this->modelProduto->get($params['id']);
        $msg = !empty($data) ? 'success' : 'produto não encontrado';
        Rest::response($data, 200, $msg);
    }
}
