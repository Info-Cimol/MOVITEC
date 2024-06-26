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
    <nav class="navbar navbar-expand-lg navbar-white text-white fixed-top ">
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
    <main class="container pt-5">
        <div>
            <?php
            if (isset($_GET['sucesso']) && $_GET['sucesso'] == 'inserido') {
                echo '<div class="alert alert-success" role="alert">Tarefa inserida com sucesso!</div>';
            }
            ?>
            <?php
            if (isset($_GET['sucess']) && $_GET['sucess'] == 'inserido') {
                echo '<div class="alert alert-success" role="alert">Projeto inserido com sucesso!</div>';
            }
            ?>
        </div>

        <section id="estandes" class="pt-2">
            <h2 class="text-center p-3 fw-bold fs-1 shadow mb-5">Estandes Virtuais</h2>
            <div class="container mt-5">
            <div class="row  justify-content-around">
            <?php if (!empty($projetos)): ?>
                <?php foreach ($projetos as $projeto): ?>
                    <div class="col-md-4">
                        <div class=" card border-0 mb-3 text-center" style="height:240px;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><?php echo $projeto['titulo']; ?></h5>
                                <p class="card-text temacard "><?php echo $projeto['tema']; ?></p>
                                <a href="/projeto/<?php echo $projeto['id']; ?>" class="btn btn-primary">Ver o Projeto</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Nenhum projeto encontrado.</p>
            <?php endif; ?>
            </div>
        </section>

    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script>
        function closeMenu() {
            $(".navbar-collapse").collapse('hide');
        }
        setTimeout(function() {
            document.querySelector('.alert').remove();
        }, 5000);
</script>
    </script>
</body>

</html>

