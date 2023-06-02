<?php

require_once "./classes/Participante.php";

$participante = new Participante();

$lista = $participante->listar();

?>

<link rel="stylesheet" href="./assets/css/tabela.css">
<script src="https://kit.fontawesome.com/9869816a76.js" crossorigin="anonymous"></script>
<div class="titulo">
    <h2>Participantes</h2>
</div>
<div class="box-tabela">
    <div class="tabela">
        <div class="linha cabecalho-tabela">
            <div class="celula">
                Código
            </div>
            <div class="celula">
                Nome
            </div>
            <div class="celula">
                Número do Edital
            </div>
            <div class="celula">
                Sigla do Curso
            </div>
            <div class="celula">
                CPF
            </div>
            <div class="celula">
                Telefone
            </div>
            <div class="celula">
                Ações
            </div>
        </div>
        <?php foreach ($lista as $linha): ?>
            <div class="linha">
                <div class="celula" data-title="Código">
                    <?php echo $linha['part_id'] ?>
                </div>
                <div class="celula" data-title="Nome">
                    <?php echo $linha['nome'] ?>
                </div>
                <div class="celula" data-title="Número do Edital">
                    <?php echo $linha['nome'] ?>
                </div>
                <div class="celula" data-title="Sigla do Curso">
                    <?php echo $linha['sigla_curso'] ?>
                </div>
                <div class="celula" data-title="CPF">
                    <?php echo $linha['cpf'] ?>
                </div>
                <div class="celula" data-title="Telefone">
                    <?php echo $linha['tel'] ?>
                </div>
                <div class="celula botoes" data-title="Ações">
                    <a class="btn editar" href="cursos-editar.php?id=<?= $linha['part_id'] ?>"><span><i
                                class="fa-regular fa-pen-to-square"></i></span></a>
                    <a class="btn excluir" href="cursos-excluir.php?id=<?= $linha['part_id'] ?>"><span><i
                                class="fa-solid fa-xmark"></i></span></a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>