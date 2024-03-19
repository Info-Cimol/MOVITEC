<?php ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regras e critérios da MOVITEC</title>
    <link rel="stylesheet" href="CSS/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-white text-white fixed-top ">
        <div class="container">
            <a class="navbar-brand text-white" href="/">MOVITEC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav text-center">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="/#regulamentos" onclick="closeMenu()">Regulamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/#estandes" onclick="closeMenu()">Estandes Virtuais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/#inscricoes" onclick="closeMenu()">Inscrições</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/#tutoriais" onclick="closeMenu()">Tutoriais</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        <div>
            <h2 class="text-center p-3 fw-bold fs-1 shadow mb-5">Estandes Virtuais</h2>
            <a href="/#estandes" class="row">
                <i class="bi bi-arrow-left fs-2 col-md-2 col-2"></i>
            </a>
            <div class="card text-center mb-3">
                <div class="card-body">
                    <h5 class="card-title fs-2">Rural Market</h5>
                    <p class="card-text">O desenvolvimento de um site de divulgação de produtos rurais com o intuito de
                        auxiliar produtores rurais nas suas vendas</p>
                    <a href="./midias/Lista E-mail DES.pdf" target="_blank" class="btn btn-primary">Ver PDF do
                        projeto</a>
                </div>
            </div>
            <div class="card text-center mb-3">
                <div class="card-body">
                    <h5 class="card-title fs-2">Rural Market</h5>
                    <p class="card-text">O desenvolvimento de um site de divulgação de produtos rurais com o intuito de
                        auxiliar produtores rurais nas suas vendas</p>
                    <a href="./midias/Lista E-mail DES.pdf" target="_blank" class="btn btn-primary">Ver PDF do
                        projeto</a>
                </div>
            </div>
            <div class="card text-center mb-3">
                <div class="card-body">
                    <h5 class="card-title fs-2">Rural Market</h5>
                    <p class="card-text">O desenvolvimento de um site de divulgação de produtos rurais com o intuito de
                        auxiliar produtores rurais nas suas vendas</p>
                    <a href="./midias/Lista E-mail DES.pdf" target="_blank" class="btn btn-primary">Ver PDF do
                        projeto</a>
                </div>
            </div>
            <div class="card text-center mb-3">
                <div class="card-body">
                    <h5 class="card-title fs-2">Rural Market</h5>
                    <p class="card-text">O desenvolvimento de um site de divulgação de produtos rurais com o intuito de
                        auxiliar produtores rurais nas suas vendas</p>
                    <a href="./midias/Lista E-mail DES.pdf" target="_blank" class="btn btn-primary">Ver PDF do
                        projeto</a>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script>
        function closeMenu() {
            $(".navbar-collapse").collapse('hide');
        }
    </script>
</body>

</html>