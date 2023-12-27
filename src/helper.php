<?php
function mes_nome($numero)
{
  $mes = '';
  switch ($numero) {
    case 1:
      $mes = 'JAN';
      break;
    case 2:
      $mes = 'FEV';
      break;
    case 3:
      $mes = 'MAR';
      break;
    case 4:
      $mes = 'ABR';
      break;
    case 5:
      $mes = 'MAI';
      break;
    case 6:
      $mes = 'JUN';
      break;
    case 7:
      $mes = 'JUL';
      break;
    case 8:
      $mes = 'AGO';
      break;
    case 9:
      $mes = 'SET';
      break;
    case 10:
      $mes = 'OUT';
      break;
    case 11:
      $mes = 'NOV';
      break;
    case 12:
      $mes = 'DEZ';
      break;
  }
  return $mes;
}
