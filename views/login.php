<?php \Classes\ClassLayout::setHead('Homepage', 'Essa é a home page do site.', 'menu'); ?>
<div class="container-fluid mb-auto bg-secondary conteudo">
    <div class="row m-0">
        <div class="col-12 text-center my-5" style="weight :64x; height:64px;">

            <div class="resultadoForm font-weight-bolder text-light"></div>
        </div>
    </div>
    <div class="row justify-content-center m-auto">
        <div class="col-sm-12 col-md-10 col-lg-3">
            <form name="formLogin" id="formLogin" action="<?php echo DIRPAGE . 'controllers/ControllerLogin'; ?>" method="post">
                <div class="row justify-content-center mb-3">
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <input class="form-control  justify-content-center" type="email" name="email" id="email" placeholder="Email:" autocomplete="off" required>
                        </div>
                        <div class="form-group col-sm-12">
                            <input class="form-control" type="password" name="password" id="senha" placeholder="Senha:" autocomplete="off" required>
                        </div>
                    </div>
                </div>
                <div class="form-row text-center">
                    <div class="col-sm-12">
                        <button class="btn btn-primary" type="submit">ENTRAR</button>
                        <a href="<?php echo DIRPAGE; ?>" class="btn btn-danger">CANCELAR</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php \Classes\ClassLayout::setFooter(); ?>