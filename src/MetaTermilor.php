<?php

namespace App;

require_once 'helper.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

class MetaTermilor
{
  private $arquivo;
  private $db;
  public function __construct($arquivo, \App\ConexaoMySQL $conn)
  {
    $this->arquivo = $arquivo;
    $this->db = $conn;
  }

  public function incluirMeta()
  {
    $spreadsheet = IOFactory::load($this->arquivo);

    $worksheet = $spreadsheet->getActiveSheet();
    $rows = $worksheet->toArray();

    for ($i = 1; $i <= count($rows) - 1; $i++) {
      for ($j = 1; $j <= count($rows[$i]) - 1; $j++) {
        $rows[$i][$j] = $rows[$i][$j] === NULL ? 0 : $rows[$i][$j];
        $this->db->executarConsulta("INSERT INTO tab_reprmeta_termilor (Repr, Meta, Mes, Ano, Mes_N) VALUES('" . $rows[$i][0] . "', " . $rows[$i][$j] . ", " . $j . ", 2024, '" . mes_nome($j) . "')");
      }
    }
  }
}
