<?php
     require_once('config.php');
     require_once(DBAPI);
     $db = open_database();
     include(HEADER_TEMPLATE);
?>

<?php  if($db) : ?>

        <div class="row">
            <div class="col-12">
                <h1>Varoa Valorosa</h1>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-6 col-md-2">
                <a href="<?php echo BASEURL; ?>clientes/add.php" class="btn btn-primary btn-block rounded">
                    <i class="mdi mdi-plus mdi-48px"></i><br>
                    Novo Cliente
                </a>
            </div>
            <div class="col-6 col-md-2">
                <a href="<?php echo BASEURL; ?>clientes" class="btn btn-light btn-block rounded"><i class="mdi mdi-account mdi-48px"></i><br> Clientes </a>
            </div>
        </div>
<!-- Fechamento do conteúdo -->
<?php else : ?>
    <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados</p>
    </div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>
        