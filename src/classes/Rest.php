<?php

namespace src\classes;

class Rest
{
  static public function response($data, $status, $msg)
  {
    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");
    http_response_code($status);
    $json = [
      'message' => $msg,
      'data' => $data
    ];
    echo json_encode($json);
    return;
  }
}
