<?php

namespace src\models;

use \core\Model;
use \src\models\Foto;

class Produto extends Model
{
  protected $modelFoto;

  public function __construct()
  {
    $this->modelFoto = new Foto();
  }

  public function getAll()
  {
    $produtos = $this::select()->get();
    $data = [];
    foreach ($produtos as $produto) {
      $data[] = [
        'id_produto' => $produto['id_produto'],
        'nome' => $produto['nome'],
        'preco' => $produto['preco'],
        'descricao' => $produto['descricao'],
        'vendido' => $produto['vendido'],
        'fotos' => $this->modelFoto->getFoto($produto['id_produto']),
      ];
    }
    return $data;
  }

  public function get($id)
  {
    $produto = $this::select()->where('id_produto', $id)->get();

    if (empty($produto)) return [];

    $foto = $this->modelFoto->getFoto($id);
    $data = [];
    foreach ($produto as $prod) {
      $data[] = [
        'id_produto' => $prod['id_produto'],
        'nome' => $prod['nome'],
        'preco' => $prod['preco'],
        'descricao' => $prod['descricao'],
        'vendido' => $prod['vendido'],
        'fotos' => $foto,
      ];
    }

    return $data;
  }
}
