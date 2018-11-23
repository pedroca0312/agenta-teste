<?php
require_once __DIR__."/../Models/CrudTipoAtividade.php";
require_once __DIR__."/../Models/BDConection.php";
require_once __DIR__."/../Models/TipoAtividade.php";

$crud = new TipoAtividade();

$tipo_atividade = $crud->GetTipoAtividade();

$tipo_atividade->getTipoAtividade();

print_r($tipo_atividade);





?>
