<?php

namespace App;

use PDO;
use PDOException;

class ConexaoMySQL
{
  private $host = '127.0.0.1';
  private $usuario = 'root';
  private $senha = '';
  private $banco = 'perfilor';
  private $port = '3306';
  // private $host = '192.168.1.7';
  // private $usuario = 'scp';
  // private $senha = '';
  // private $banco = 'perfilor';
  // private $port = '3080';
  private $conexao;

  public function __construct()
  {
    $this->conectar();
  }

  // Método para conectar ao banco de dados
  private function conectar()
  {
    try {
      $dsn = "mysql:host={$this->host};dbname={$this->banco};port={$this->port}";
      $this->conexao = new PDO($dsn, $this->usuario, $this->senha);
      $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die('Erro na conexão: ' . $e->getMessage());
    }
  }

  // Método para executar uma consulta no banco de dados
  public function executarConsulta($sql)
  {
    try {
      $stmt = $this->conexao->query($sql);
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      die('Erro na consulta: ' . $e->getMessage());
    }
  }

  // Método para fechar a conexão com o banco de dados
  public function fecharConexao()
  {
    $this->conexao = null;
  }
}