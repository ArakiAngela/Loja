<?php
require_once('funcoes.php');
edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Alterar Cliente</h2>

<form action="edit.php?id=<?php echo $cliente['idcliente']?>" method="post">
<!-- area de campos do form -->
<hr>

<div class="row">

    <div class="form-group col-md-6">
    <label for="name">Nome</label>
    <input type="text" class="form-control" name="cliente[nome]" value="<?php echo $cliente['nome'] ?>">
    </div>

    <div class="form-group col-md-3">
    <label for="campo2">Rua</label>
    <input type="text" class="form-control"  name="cliente[rua]" value="<?php echo $cliente['rua'] ?>">
    </div>

    <div class="form-group col-md-3">
    <label for="campo3">Numero</label>
    <input type="text" class="form-control" name="cliente[numero_casa]" value="<?php echo $cliente['numero_casa'] ?>">
    </div>

    <div class="form-group col-md-5">
    <label for="campo1">Bairro</label>
    <input type="text" class="form-control" name="cliente[bairro]" value="<?php echo $cliente['bairro'] ?>">
    </div>

    <div class="form-group col-md-3">
    <label for="campo2">CPF</label>
    <input type="text" class="form-control" name="cliente[CPF]" value="<?php echo $cliente['CPF'] ?>">
    </div>

    <div class="form-group col-md-2">
    <label for="campo3">RG</label>
    <input type="text" class="form-control" name="cliente[RG]" value="<?php echo $cliente['RG'] ?>">
    </div>

    <div class="form-group col-md-3">
    <label for="campo1">Telefone</label>
    <input type="text" class="form-control" name="cliente[telefone]" value="<?php echo $cliente['telefone'] ?>">
    </div>

    <div class="form-group col-md-2">
    <label for="campo2">Local De Trabalho</label>
    <input type="text" class="form-control" name="cliente[local_de_trabalho]" value="<?php echo $cliente['local_de_trabalho'] ?>"> 
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