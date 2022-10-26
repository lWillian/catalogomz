<?php #\Classes\ClassLayout::setHeadRestrito();
$img = new \Models\ClassImage();
?>
<?php \Classes\ClassLayout::setHead('Area Restrita', 'Exclusivo membro', 'menu'); ?>
<a class="btn btn-transparent btn-sm text-dark" href="<?php echo DIRPAGE . 'controllers/controllerLogout'; ?>">Sair</a></h1>
<div class="container ">
    <div class="row">
    <?php foreach ($img->getProductImage() as $key => $value) : ?>
        <div class="col-sm-5 col-md-3">
            <div class="card mb-5">
                <img src="<?php echo $value['foto']; ?>" width="246px" height="246px;">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $value['nome']; ?></h4>
                    <h5 class="card-subtitle mb-2 text-muted">R$ <?php echo $value['vendav']; ?></h5>
                    <!-- <p class="card-text">Texto de exemplo</p> -->
                </div>
                <!-- <ul class="list-group list-group-flush">
                <li class="list-group-item">Text one for exemple</li>
                <li class="list-group-item">Text two for exemple</li>
                <li class="list-group-item">Text tree for exemple</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">????</a>
                <a href="#" class="card-link">Test</a>
            </div> -->
                <div class="card-footer text-muted">
                    exemplo
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>
<?php \Classes\ClassLayout::setFooter(); ?>

