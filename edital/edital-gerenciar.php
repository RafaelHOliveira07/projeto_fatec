<?php

require_once 'login/usuario-verifica-adm.php';

require_once "classes/Edital.php";

$edital = new Edital();

$lista = $edital->listar();

?>
<link rel="stylesheet" href="./assets/css/tabela.css">
<script src="https://kit.fontawesome.com/9869816a76.js" crossorigin="anonymous"></script>
<div class="titulo">
    <h2>Editais</h2>
</div>
<div class="box-tabela">
    <div class="tabela">
        <div class="linha cabecalho-tabela">
            <div class="celula">
                Código
            </div>
            <div class="celula">
                Número do Edital
            </div>
            <div class="celula">
                Curso
            </div>
            <div class="celula">
                Disciplina
            </div>
            <div class="celula">
                Área
            </div>
            <div class="celula">
                Data/Horário
            </div>
            <div class="celula">
                Ações
            </div>
        </div>
        <?php foreach ($lista as $linha): ?>
            <div class="linha">
                <div class="celula" data-title="Código">
                    <?php echo $linha['edital_id'] ?>
                </div>
                <div class="celula" data-title="Número do Edital">
                    <?php echo $linha['num_edital'] ?>
                </div>
                <div class="celula" data-title="Curso">
                    <?php echo $linha['sigla_curso'] ?>
                </div>
                <div class="celula" data-title="Disciplina">
                    <?php echo $linha['nome_disci'] ?>
                </div>
                <div class="celula" data-title="Área">
                    <?php echo $linha['area_disci'] ?>
                </div>
                <div class="celula" data-title="Data/Horário">
                    <?php echo $linha['data_hora'] ?>
                </div>
                <div class="celula botoes" data-title="Ações">
                    <a class="btn editar" href="disciplinas-editar.php?id=<?= $linha['edital_id'] ?>"><span><i class="fa-regular fa-pen-to-square"></i></span></a>
                    <a class="btn excluir" href="disciplinas-excluir.php?id=<?= $linha['edital_id'] ?>"><span><i class="fa-solid fa-xmark"></i></span></a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>