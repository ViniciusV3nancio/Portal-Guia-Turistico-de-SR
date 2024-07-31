<?php include 'header.php'; ?>

<h2 class="mt-3 text-center">Hospedagem</h2>

<div class="container text-center">
    <img src="img/Texto e Imagens Portal São Roque/Hotel Cordialle.webp" class="w-70 sm-w-100 md-w-80 p-2" alt="Hotel Cordialle">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 text-center">
            <p>São Roque fornece diversos motivos de sobre para sua visita e estadia, como gastronômia, pontos turísitcos dos mais comuns aos exóticos, portanto, como uma cidade turística temos boas hospedagens para trazer todo o conforto para nossos turistas, e vamos deixar uma marca para que você sempre queira voltar. <br> <h5>Endereço Hotel Cordialle: Rua Sotero de Souza, 500.</h5></p>
        </div>
    </div>
</div>


<hr>

<h2 class="mt-3 text-center">Hotéis</h2>

<!--Galeria de imagens que se transforma em carrossel quando a página está em modo mobile-->
<div class="container carrossel-custom text-center">
    <div class="row">
        <div class="col-lg-6 d-none d-lg-block">
            <img src="img/Texto e Imagens Portal São Roque/Hotel Alpino.webp" class="img-fluid" alt="Hotel Alpino">
            <div class="mt-3 text-center">
                <h3>Hotel Alpino</h3>
                <p>Hotel Alpino com aquele cheiro verde com campos e pastos, ótimo para quem gosta de estar perto das árvores. <br> <h5>Endereço: SP-270, KM 57 - Taboão.</h5></p>
            </div>
        </div>
        <div class="col-lg-6 d-none d-lg-block">
            <img src="img/Texto e Imagens Portal São Roque/São Roque Park Hotel.webp" class="img-fluid" alt="São Roque Park Hotel">
            <div class="mt-3 text-center">
                <h3>São Roque Park Hotel</h3>
                <p>Para aqueles que desejam comodidade dentro do próprio centro da cidade! <br> <h5>Endereço: Avenida Antônio Dias Bastos, 318.</h5></p>
            </div>
        </div>
    </div>
    <div class="d-lg-none">
        <div id="carrossel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/Texto e Imagens Portal São Roque/São Roque Park Hotel.webp" class="d-block w-100" alt="São Roque Park Hotel">
                    <div class="mt-3 text-center">
                        <h3>São Roque Park Hotel</h3>
                        <p>Para aqueles que desejam comodidade dentro do próprio centro da cidade! <br> <h5>Endereço: Avenida Antônio Dias Bastos, 318.</h5></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/Texto e Imagens Portal São Roque/Hotel Alpino.webp" class="d-block w-100" alt="Hotel Alpino">
                    <div class="mt-3 text-center">
                        <h3>Hotel Alpino</h3>
                        <p>Hotel com aquele cheiro verde com campos e pastos, ótimo para quem gosta de estar perto das árvores. <br> <h5> Endereço: SP-270, KM 57 - Taboão. </h5> </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/Texto e Imagens Portal São Roque/Hotel Cordialle.webp" class="d-block w-100" alt="Hotel COrdialle">
                    <div class="mt-3 text-center">
                        <h3>Hotel Cordialle</h3>
                        <p>Hotel cheio de charme e comodidade para quem gosta do bom e do melhor! <br> <h5> Rua Sotero de Souza, 500. </h5></p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carrossel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carrossel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>
    </div>
</div>
<!--Fim da primeira galeria-->







<h2 class="mt-3 text-center">Outros Afazeres</h2>

<div class="container">
    <div class="row justify-content-center p-3">
        <div class="col-md-3 box-not-lg">
            <div class="box bg-dark text-white text-center fs-5">
                <h4><a href="gastronomia.php">ONDE COMER?</a></h4>
            </div>
        </div>
        <div class="col-md-3 box-not-lg">
            <div class="box bg-dark text-white text-center fs-5">
                <h4><a href="hospedagem.php">PONTOS TURÍSTICOS</a></h4>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>