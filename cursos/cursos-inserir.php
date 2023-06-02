<?php

require_once 'login/usuario-verifica-adm.php';

?>
<link rel="stylesheet" href="./assets/css/forms.css">
<div class="central">
    <form action="./cursos/cursos-gravar.php" method="post">
        <h2>Adicionar Curso</h2>
        <div class="inputs">
            <label for="img_curso">Insira a imagem de fundo relacionada ao Curso</label>
            <label for="img_curso" class="file">Selecione a imagem</label>
            <input type="file" name="img_curso" id="img_curso">
        </div>
        <div class="inputs">
            <label for="nome_curso">Insira o Nome correspondente ao Curso</label>
            <input type="text" name="nome_curso" id="nome_curso" placeholder="Ex: Gestão da Produção Industrial">
        </div>
        <div class="inputs">
            <label for="sigla_curso">Insira a Sigla correspondente ao Curso</label>
            <input type="text" name="sigla_curso" id="sigla_curso" placeholder="Ex: GPI">
        </div>
        <div class="inputs">
            <label for="desc_curso">Insira uma breve descrição sobre o Curso</label>
            <textarea name="desc_curso" id="desc_curso" cols="30" rows="10"></textarea>
        </div>
        <button>Confirmar</button>
    </form>
</div>