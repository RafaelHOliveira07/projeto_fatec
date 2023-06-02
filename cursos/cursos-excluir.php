<?php

require_once 'login/usuario-verifica-adm.php';

require_once '../classes/Curso.php';

$id = $_GET['id'];

$curso = new Curso($id);

$curso->excluir();

header('Location: ../adm.php?dir=cursos&file=cursos-gerenciar');