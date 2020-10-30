<?php

namespace src\models;

use \core\Model;

class Produto extends Model
{
  public function getAll()
  {
    return $this::select()->get();
  }
}
