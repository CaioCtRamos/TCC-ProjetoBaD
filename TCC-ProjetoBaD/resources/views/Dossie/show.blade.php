<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Localizador De Dossie</title>
        
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">

    </head>
    <body>
        <h1>DOSSIE SOLICITADO</h1>
        <div class="container text-center">
            <div class="row"> 
                <div class="col">
                    ID
                    <p>{{$dossie->id}}</p>
                </div>    
                <div class="col">
                    ALUNO
                        <p>{{$dossie->nome}}</p>
                </div>
                <div class="col">
                    CURSO
                        <p>{{$dossie->curso}}</p>
                </div>
                <div class="col">
                    TURMA
                        <p>{{$dossie->turma}}</p>
                </div>
                <div class="col">
                    ESTANTE
                        <p>{{$dossie->estante}}</p>
                </div>
                <div class="col">
                    LADO
                        <p>{{$dossie->lado}}</p>
                </div>
                <div class="col">
                    <form action="/dossie/{{$dossie->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn">DELETE</button>
                    </form>
                </div>
            </div>
    </body>