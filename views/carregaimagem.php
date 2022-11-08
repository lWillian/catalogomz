<?php #\Classes\ClassLayout::setHeadRestrito();
#$img = new \Models\ClassImage();
?>
<?php \Classes\ClassLayout::setHead('Cadastrar produto', 'Exclusivo membro', 'menu'); ?>

<div class="container mb-3">
    <form name="formUpload" id="formUpload"  method="post" action="<?php echo DIRPAGE . 'controllers/ControllerUpload';?>">
        <div class="row">
            <div class="mt-3 col-2">
                <label for="Codigo" class="form-label">Código</label>
                <input type="text" class="form-control" id="codigo" name="codigo" aria-describedby="codigo" maxlength="7" >
            </div>
            <div class=" mt-3 col-9">
                <label for="Descrição" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" aria-describedby="codigo" />
            </div>
        </div>
        <div class="row">
            <div class=" mt-3 col-2">
                <label for="Valor" class="form-label">Valor</label>
                <input type="text" class="form-control" id="valor" name="valor" aria-describedby="valor" />
            </div>
            <div class=" mt-3 col-8">
                <label for="imagem" class="form-label">Carregar Imagem</label>
                <input type="file" class="form-control" id="imagem" name="imagem" aria-describedby="imagem" />
                <small id="alertImg" class="form-text "></small>
            </div>
            <div class="mt-5 col-2">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Material Ativo</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-12">
                <button type="button" class="btn btn-primary">Novo Cadastro</button>
                <button type="submit " class="btn btn-warning">Alterar Cadastro</button>
                <button type="button" class="btn btn-outline-danger">Cancelar</button>
                <div class="retornoCad" style="text-align:center;"></div>
            </div>
        </div>
    </form>
</div>

<?php \Classes\ClassLayout::setFooter(); 
?>