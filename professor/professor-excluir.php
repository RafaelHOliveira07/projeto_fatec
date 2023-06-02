<?php

require_once 'login/usuario-verifica-adm.php';

require_once '../classes/Professor.php';

$id = $_GET['id'];

$professor = new Professor($id);

$professor->excluir();

header('Location: ../adm.php?dir=professor&file=professor-gerenciar');