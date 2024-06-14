<?php
session_start();

if (isset($_SESSION["nome"]) and (isset($_SESSION['email']))) {
    $nome = $_SESSION["nome"];
    $email = $_SESSION["email"];
} else {
    // session_unset();
    // session_destroy();
    // header("Location: index.php");
    // exit;
}

?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SAEP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?php echo $nome; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item">
                        <a class="nav-link imgf" href="dashboard.php?page=cliente" style="font-size: 20px;"><i class="bi bi-person" style="font-size: 30px;"></i> Cliente</a>
                    </li> -->
                </ul>
                <form class="d-flex" role="search">
                    <a href="logout.php" class="btn btn-outline-danger">Sair</a>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid text-light " style="margin-top: 60px;">
        <?php

        if (isset($_GET['page']) && !empty($_GET['page'])) {
            $page = $_GET['page'];

            if ($page == 'cliente') {
                include_once 'cliente.php';
            } else if ($page == 'produto') {
                include_once 'produto.php';
            } else if ($page == 'banner') {
                include_once 'banner.php';
            } else if ($page == 'contato') {
                include_once 'contato.php';
            } else if ($page == 'adm') {
                include_once 'adm.php';
            } else {

                echo '<div class="position-absolute top-50 start-50 translate-middle p-4 text-bg-secondary border border-secondary rounded-pill col-6 fs-1">
            <center><i class="bi bi-ban"></i> Página não encontrada</h1></center>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="position-absolute top-100 start-50 translate-middle mt-1" fill="var(--bs-secondary)" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
        </svg>
      </div>';
            }
        } else {
            echo '<div class="position-absolute top-50 start-50 translate-middle p-4 text-bg-secondary border border-secondary rounded-pill col-6 fs-1">
            <center><i class="bi bi-gear"></i> Página Administrativa</center>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="position-absolute top-100 start-50 translate-middle mt-1" fill="var(--bs-secondary)" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
        </svg>
      </div>';
        }
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>