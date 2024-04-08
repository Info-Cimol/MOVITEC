<!DOCTYPE html>
<html lang="pt-br">
<?php
include 'config.php';

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIC</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-white text-white fixed-top" style="background-color:#1B2F49;">
        <div class="container">
            <a class="navbar-brand  me-5 text-white" href="/"><img class="logo" width="130" src="/midias/MICLOGO.png" alt="LOGO"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav text-center">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="/regulamentos" onclick="closeMenu()">Regulamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/estandes" onclick="closeMenu()">Estandes Virtuais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/inscricao" onclick="closeMenu()">Inscrições</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/tutoriais" onclick="closeMenu()">Tutoriais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/tarefa" onclick="closeMenu()">Tarefas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container mt-5"style="padding-top:90px;">
        <div>

        <?php
        
            if (!empty($projeto)): ?>

            <h2 class="text-center p-3 fw-bold fs-1 shadow mb-5"><?php echo $projeto['titulo']; ?></h2>
            <a href="/" class="row">
                <i class="bi bi-arrow-left fs-2 col-md-2 col-2"></i>
            </a>
            <div class=" text-center mb-3">
                <div class="card-body">
                    <div class="accordion p-5" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button text-primary fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Tema
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <div class="text-center p-2">
                                <p class="card-text"><?php echo $projeto['tema']; ?></p>
                            </div>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-primary fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Problema
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="card-text p-4"><?php echo $projeto['problema']; ?></p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-primary fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Justificativa
                            </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="card-text p-4"><?php echo $projeto['justificativa']; ?></p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-primary fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Objetivos
                            </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="card-text p-4"><?php echo $projeto['objetivos']; ?></p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed  text-primary fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Hipóteses
                            </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="card-text p-4"><?php echo $projeto['hipoteses']; ?></p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-primary fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Resumo do Projeto
                            </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="card-text p-4"><?php echo $projeto['resumo']; ?></p>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="pb-3">
                    <?php if (!empty($projeto['arquivo_pdf'])): ?>
                        <p class='card-text'><p class='card-text'><strong>Arquivo PDF:</strong><a href="/uploads/<?php echo basename($projeto['arquivo_pdf']); ?>" target="_blank">PDF do Projeto</a></p>

                    <?php else: ?>
                        <p class='card-text'><strong>Arquivo PDF:</strong> Não disponível</p>
                    <?php endif; ?>
                    </div>
                </div>
                   
            </div>
            <?php else: ?>
            <p>Detalhes do projeto não encontrados.</p>
            <?php endif; ?>
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