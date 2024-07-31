<?php include 'header.php'; ?>

<h2 class="mt-3 text-center">Home</h2>

<!--Carrossel-->
<div id="carrossel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carrossel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carrossel" data-bs-slide-to="1"></li>
        <li data-bs-target="#carrossel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/Texto e Imagens Portal São Roque/Praça da Republica (Preguiça).webp" class="d-block w-100" alt="Praça da República">
        </div>
        <div class="carousel-item">
            <img src="img/Texto e Imagens Portal São Roque/Vistal São Roque Carrossel.webp" class="d-block w-100" alt="Vista de São Roque do Morro do Cruzeiro">
        </div>
        <div class="carousel-item">
            <img src="img/Texto e Imagens Portal São Roque/São Roque Carrossel.webp" class="d-block w-100" alt="Logo de São Roque da Praça Matriz">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carrossel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carrossel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
    </a>
</div>
<!--Fim do carrossel-->

<div class="container-sm">
    <p>
    </p>
</div>

<h2 class="mt-3 text-center">Tópicos</h2>

<!--Primeira galeria de imagens que se transforma em carrossel quando a página está em modo mobile-->
<div class="container carrossel-custom text-center">
    <div class="row">
        <div class="col-lg-4 d-none d-lg-block">
        <img src="img/Texto e Imagens Portal São Roque/Morro do Cruzeiro.webp" class="img-fluid w-70 sm-w-100 md-w-80 p-2" alt="Imagem do Morro do Cruzeiro">
            <div class="mt-3 text-center">
                <a href="historia.php"><p><h3>História</h3></p></a>
            </div>
        </div>
        <div class="col-lg-4 d-none d-lg-block">
        <img src="img/Texto e Imagens Portal São Roque/Hotel Cordialle.webp" class="img-fluid w-70 sm-w-100 md-w-80 p-2" alt="Hotel Cordialle">
            <div class="mt-3 text-center">
                <a href="hospedagem.php"><p><h3>Hospedagem</h3></p></a>
            </div>
        </div>
        <div class="col-lg-4 d-none d-lg-block">
        <img src="img/Texto e Imagens Portal São Roque/Casa da Luiza.webp" class="img-fluid w-70 sm-w-100 md-w-80 p-2" alt="Imagem Casa da Luiza">
            <div class="mt-3 text-center">
                <a href="gastronomia.php"><p><h3>Gastronomia</h3></p></a>
            </div>
        </div>
    </div>
    <div class="d-lg-none">
        <div id="carrossel2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/Texto e Imagens Portal São Roque/Morro do Cruzeiro.webp" class="d-block w-100" alt="Morro do Cruzeiro">
                    <div class="mt-3 text-center">
                    <a href="historia.php"><p><h3>História</h3></p></a>
                    </div>
                </div>
                <div class="carousel-item">
                <img src="img/Texto e Imagens Portal São Roque/Hotel Cordialle.webp" class="d-block w-100" alt="Hotel COrdialle">
                    <div class="mt-3 text-center">
                    <a href="hospedagem.php"><p><h3>Hospedagem</h3></p></a>
                    </div>
                </div>
                <div class="carousel-item">
                <img src="img/Texto e Imagens Portal São Roque/Casa da Luiza.webp" class="d-block w-100" alt="Imagem Casa da Luiza">
                    <div class="mt-3 text-center">
                    <a href="gastronomia.php"><p><h3>Gastronomia</h3></p></a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carrossel2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carrossel2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>
    </div>
</div>
<!--Fim da primeira galeria-->

<!--Segunda galeria de imagens que se transforma em carrossel quando a página está em modo mobile-->
<div class="container carrossel-custom text-center">
    <div class="row">
        <div class="col-lg-4 d-none d-lg-block">
            <<img src="img/Texto e Imagens Portal São Roque/Roteiro do Vinho, Portal.webp" class="img-fluid w-70 sm-w-100 md-w-80 p-2" alt="Imagem do Roteiro do Vinho">
            <div class="mt-3 text-center">
            <a href="turismo.php"><p><h3>Turismo</h3></p></a>
            </div>
        </div>
        <div class="col-lg-4 d-none d-lg-block">
        <img src="img/Texto e Imagens Portal São Roque/Estação Ferroviária.webp" class="img-fluid w-70 sm-w-100 md-w-80 p-2" alt="Imagem da Estação Ferroviária de São Roque">
            <div class="mt-3 text-center">
            <a href="sobre.php"><p><h3>Sobre</h3></p></a>
            </div>
        </div>
        <div class="col-lg-4 d-none d-lg-block">
        <img src="img/Texto e Imagens Portal São Roque/Brasital.webp" class="img-fluid w-70 sm-w-100 md-w-80 p-2" alt="Centro Cultural Brasital">
            <div class="mt-3 text-center">
            <a href="contato.php"><p><h3>Contato</h3></p></a>
            </div>
        </div>
    </div>

    <div class="d-lg-none">
        <div id="carrossel3" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <<img src="img/Texto e Imagens Portal São Roque/Roteiro do Vinho, Portal.webp" class="d-block w-100" alt="Imagem do Roteiro do Vinho">
                    <div class="mt-3 text-center">
                    <a href="turismo.php"><p><h3>Turismo</h3></p></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="mt-3 text-center">
                    <img src="img/Texto e Imagens Portal São Roque/Estação Ferroviária.webp" class="d-block w-100" alt="Imagem da Estação Ferroviária de São Roque">
                    <a href="sobre.php"><p><h3>Sobre</h3></p></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="mt-3 text-center">
                    <img src="img/Texto e Imagens Portal São Roque/Brasital.webp" class="d-block w-100" alt="Centro Cultural Brasital">
                    <a href="contato.php"><p><h3>Contato</h3></p></a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carrossel3" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carrossel3" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>
    </div>
</div>
<!--Fim da segunda galeria-->

<?php include 'footer.php'; ?>

</html>