<?php include 'header.php'; ?>

<h2 class="mt-3 text-center">Lorem Ipsum</h2>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <form class="p-2">
                <div class="mb-3">
                    <label for="inputNome" class="form-label">
                        <h5 class="">Nome</h5>
                    </label>
                    <input type="text" class="form-control" id="inputNome">
                </div>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">
                        <h5 class="">Email</h5>
                    </label>
                    <input type="email" class="form-control" id="inputEmail">
                </div>
                <div class="mb-3">
                    <label for="inputTelefone" class="form-label">
                        <h5 class="">Telefone</h5>
                    </label>
                    <input type="tel" class="form-control" id="telefone" name="telefone">
                </div>
                <div class=" mb-3">
                    <label for="inputMensagem" class="form-label">
                        <h5 class="">Mensagem</h5>
                    </label>
                    <textarea class="form-control" id="inputMensagem" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-purple">Enviar</button>
            </form>
        </div>
    </div>
    <div class="p-5 text-center">
        <img src="img/logo.png" alt="">
    </div>
</div>




<!-- jQuery mask do telefone -->
<script src="jquery.maskedinput.js"></script>
    <script>
        $(document).ready(function() {
            // Aplica a máscara de telefone ao campo de entrada
            $('#telefone').mask('(99) 9999-9999');

            // Outras manipulações do formulário podem ser feitas aqui
        });
    </script>
<!-- Fim -->

<?php include 'footer.php'; ?>