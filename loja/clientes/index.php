<?php
require_once('funcoes.php');
index();
 ?>

 <?php include(HEADER_TEMPLATE); ?>

<header>
<div class="row">
<div class="col-sm-6">
<br>
<h2>Clientes</h2>
</div>
<div class="col-sm-6 text-right h2">
<br>
<form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquisar</button>
  </form>
</div>
</div>
</header>

<!-- Mensagem de alerta caso haja uma session message -->
<?php if(!Empty($_SESSION['message'])) : ?>
<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dimissible" role="alert">
<button type="button" class="close" data-dimiss="alert" aria-label="Close"><span aria-hidden="true">&times</span></button>
<?php echo $_SESSION['message']; ?>
</div>
<?php endif; ?>

<!-- Tabela com os dados dos clientes -->
<table class="table table-hover">
<thead>
<tr>
<th>ID</th>
<th>Nome</th>
<th>Rua</th>
<th>N°</th>
<th>Bairro</th>
<th>CPF</th>
<th>RG</th>
<th>Telefone</th>
<th>Local De Trabalho</th>
<th>Opcões</th>
</tr>
</thead>
<tbody>

<?php if($cliente) : ?>
    <?php foreach($cliente as $cliente) : ?>
        <tr>
            <td> <?php echo $cliente['idcliente']; ?> </td>
            <td> <?php echo $cliente['nome']; ?> </td>
            <td> <?php echo $cliente['rua']; ?> </td>
            <td> <?php echo $cliente['numero_casa']; ?> </td>
            <td> <?php echo $cliente['bairro']; ?> </td>
            <td> <?php echo $cliente['CPF']; ?> </td>
            <td> <?php echo $cliente['RG']; ?> </td>
            <td> <?php echo $cliente['telefone']; ?> </td>
            <td> <?php echo $cliente['local_de_trabalho']; ?> </td>
            <td class="actions text-right">
            <a href="view.php?id=<?php echo $cliente['idcliente']?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar </a>
            <a href="edit.php?id=<?php echo $cliente['idcliente']?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil-alt"></i> Editar </a>
            <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-cliente="<?php echo $cliente['idcliente'];?>"><i class="fa fa-trash"></i> Excluir </a>
            </td>
        </tr>
    <?php endforeach; ?>
<?php else : ?>

<?php endif; ?>

</tbody>
</table>
<?php include('modal.php'); ?>
<script>
$('#delete-modal').on('show.bs.modal', function (event){
//pegar o botão(informação)
var button = $(event.relatedTarget);
//pegar o id do cliente e passar depois via GET
var id = button.data('cliente');

var modal = $(this);
modal.find('.modal-title').text('Excluir Cliente #' + id);
modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})

</script>

<?php include(FOOTER_TEMPLATE); ?>
