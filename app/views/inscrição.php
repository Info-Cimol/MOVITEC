

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIC</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-white text-white fixed-top ">
        <div class="container">
            <a class="navbar-brand text-white" href="/">MIC</a>
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
    <main>
        <div>
            <h2 class="text-center fw-bold p-5">Inscrições para a MIC 2024</h2>
        </div>
        <div class="container mt-5 text-center col-md-6 col col-sm-10 justify-content-center align-items-center">
            <div class="form-container ">
                <form action="formulario.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                        <label for="titulo" class="form-label">Título:</label>
                        <input type="text" id="titulo" name="titulo" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="tema" class="form-label">Tema:</label>
                        <input type="text" id="tema" name="tema" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="problema" class="form-label">Problema:</label>
                        <textarea id="problema" name="problema" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="justificativa" class="form-label">Justificativa:</label>
                        <textarea id="justificativa" name="justificativa" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="objetivos" class="form-label">Objetivos:</label>
                        <textarea id="objetivos" name="objetivos" class="form-control" rows="10" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="hipoteses" class="form-label">Hipóteses:</label>
                        <textarea id="hipoteses" name="hipoteses" class="form-control" rows="8" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="resumo" class="form-label">Resumo</label>
                        <textarea id="resumo" name="resumo" class="form-control" rows="10" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="projeto_pdf" class="form-label">Projeto em PDF:</label>
                        <input type="file" id="projeto_pdf" name="projeto_pdf" class="form-control" accept=".pdf" required>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Enviar" class="btn btn-primary">
                    </div>
                </form>
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

