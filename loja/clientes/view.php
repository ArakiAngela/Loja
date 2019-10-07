<?php
require_once('funcoes.php');
view($_GET['idcliente']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cliente <?php echo $cliente['idcliente']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?>
</div>
<?php endif; ?>
<dl class="row">
<dt class="col-sm-2"> Nome: </dt>
<dd class="col-sm-10"><?php echo $cliente['nome']; ?></dd>

<dt class="col-sm-2"> Rua: </dt>
<dd class="col-sm-10"><?php echo $cliente['rua']; ?></dd>

<dl class="row">
<dt class="col-sm-2"> N°: </dt>
<dd class="col-sm-10"><?php echo $cliente['numero_casa']; ?></dd>

<dt class="col-sm-2"> Bairro: </dt>
<dd class="col-sm-10"><?php echo $cliente['bairro']; ?></dd>

<dt class="col-sm-2"> CPF: </dt>
<dd class="col-sm-10"><?php echo $cliente['CPF']; ?></dd>

<dl class="row">
<dt class="col-sm-2"> RG: </dt>
<dd class="col-sm-10"><?php echo $cliente['RG']; ?></dd>

<dt class="col-sm-2"> Telefone: </dt>
<dd class="col-sm-10"><?php echo $cliente['telefone']; ?></dd>

<dt class="col-sm-2"> Local de trabalho: </dt>
<dd class="col-sm-10"><?php echo $cliente['local_de_trabalho']; ?></dd>

<div id="actions" class="row">
<div class="col-md-12">
<a href="edit.php?id=<?php echo $cliente['idcliente']?>" class="btn btn-primary"><i class="fa fa-pencil-alt"></i> Editar </a>
<a href="index.php" class="btn btn-default"> Voltar </a>
</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>