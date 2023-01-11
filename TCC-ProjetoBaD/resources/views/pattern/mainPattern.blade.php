<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Localizador De Dossie</title>
        
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
        <!-- CSS file -->
        <link rel="stylesheet" href="/css/style.css">
        
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        
        <!-- Bootstrap Js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>   
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    </head>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="nav-item" href="#">
                Corredor x
            </a>
            <div class="nav-item">
                <form class="d-flex">
                    <input type="search" class="form-control me-1" placeholder="Insira o nome do Aluno" aria-label="Search" id="NavSearch">
                    <button class="btn btn-primary btn-sm" type="submit">Pesquisar</button>
                </form>
            </div>

            <a class="nav-item" href="#">
                <i class="bi bi-person-circle"></i>
                Usuário
            </a>
        </div>
    </nav>
    <div class="footer"></div>
    <body>
    </body>
</html>