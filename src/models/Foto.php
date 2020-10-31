<?php

namespace src\models;

use \core\Model;

class Foto extends Model
{
  public function getFoto($id)
  {
    return $this::select()->where('id_produto', $id)->get();
  }
}
