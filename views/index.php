<?php \Classes\ClassLayout::setHead('Homepage', 'Essa é a home page do site.', 'menu'); ?>
<!--INICIO CAROUSEL -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo DIRPAGE . 'img/Example_image.png'; ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo DIRPAGE . 'img/Example_image.png'; ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo DIRPAGE . 'img/Example_image.png'; ?>" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!--FIM CAROUSEL -->
<!-- MODAL LOGIN -->
<div class="modal fade" id="cadModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">CADASTRAR</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form name="formCadastro" id="formCadastro" method="post" action="<?php echo DIRPAGE . 'controllers/ControllerCadastro'; ?>">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-row">
                                    <div class="form-group col-sm-12">
                                        <input class="form-control mb-2 " type="text" placeholder="User" aria-label="User" name="user" autocomplete="off" required>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <input class="form-control mb-2 " type="email" placeholder="Email" aria-label="Email" name="email" autocomplete="off" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input class="form-control mb-2 " type="password" placeholder="Password" aria-label="Password" name="password" autocomplete="off" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input class="form-control mb-2 " type="password" placeholder="Password" aria-label="Password" name="passwordconf" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="retornoCad" style="text-align:center;"></div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">CADASTRAR</button>
                            <button type="button" class="btn btn-outline-Danger" onclick=limpar() data-bs-dismiss="modal" aria-label="Close">CANCELAR</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- FIM MODAL LOGIN -->
<div class="card-group col-11 m-auto mt-2">
    <div class="card">
        <img src="<?php echo DIRPAGE . 'img/Example_image.png'; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                VEJA MAIS
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="<?php echo DIRPAGE . 'img/Example_image.png'; ?>" class="card-img-top" alt="...">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="card">
        <img src="<?php echo DIRPAGE . 'img/Example_image.png'; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <img src="<?php echo DIRPAGE . 'img/Example_image.png'; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
</div>
<!--FIM CARD -->
<hr>
<div class="col-11 m-auto">
    <h2 class="text-center">Titulo</h2>
    <p class="text-center">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </p>
</div>
<hr>
<div class="col-11 m-auto">
    <h2 class="text-center">Contato</h2>
    <div class="m-auto" style="width: 150px;">
        <a href="https://">
            <i class="fa-brands fa-whatsapp" style="font-size: 150px; color: green;"></i>
        </a>
    </div>
</div>
<?php \Classes\ClassLayout::setFooter(); ?>