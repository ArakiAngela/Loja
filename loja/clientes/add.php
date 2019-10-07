<?php
require_once('funcoes.php');
add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Cliente</h2>

<form action="add.php" method="post">
<!-- area de campos do form -->
<hr>

<div class="row">

    <div class="form-group col-md-6">
    <label for="name">Nome</label>
    <input type="text" class="form-control" name="cliente[nome]">
    </div>

    <div class="form-group col-md-3">
    <label for="campo2">Rua</label>
    <input type="text" class="form-control" id="rua" name="cliente[rua]">
    </div>

    <div class="form-group col-md-3">
    <label for="campo3">Numero da Casa</label>
    <input type="text" class="form-control" name="cliente[numero_casa]">
    </div>

    <div class="form-group col-md-3">
    <label for="campo2">Bairro</label>
    <input type="text" class="form-control" name="cliente[bairro]">
    </div>

    <div class="form-group col-md-2">
    <label for="campo3">CPF</label>
    <input type="text" class="form-control" id="CPF" name="cliente[CPF">
    </div>


    <div class="form-group col-md-2">
    <label for="name">RG</label>
    <input type="text" class="form-control" name="cliente[RG]">
    </div>

    <div class="form-group col-md-3">
    <label for="campo1">Telefone</label>
    <input type="text" class="form-control" name="cliente[telefone]">
    </div>

    <div class="form-group col-md-2">
    <label for="campo2">Local de Trabalho</label>
    <input type="text" class="form-control" name="cliente[local_de_trabalho]"> 
    </div>
</div>
<div id="actions" class="row">
<div class="col-md-12">
<button type="submit" class="btn btn-primary">Salvar</button>
<a href="index.php" class="btn btn-default">Cancelar</a>
</div>
</div>

</form>

<?php include(FOOTER_TEMPLATE); ?>