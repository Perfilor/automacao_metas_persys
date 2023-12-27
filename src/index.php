<?php

namespace App;

require_once '../vendor/autoload.php';

$metaTon = new MetaTon('planilha.xlsx', new ConexaoMySQL);
$metaTon->incluirMeta();


$metaTerm = new MetaTermilor('planilha_termilor.xlsx', new ConexaoMySQL);
$metaTerm->incluirMeta();
