<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>editarBebidas</title>
    <link rel="icon" href="../img/ico.png" type="image/gif">
    <link rel="stylesheet" href="./bundle/css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #339966; color:white;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="#" style="color:white; font-size: 20px; font-family: Times New Roman;">Home</a>
                    </li>
                <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-danger btn-lg active" role="button" aria-pressed="true"href="../../index.html">Sair</a>
                </form>
            </div>
        </nav>
</header>

<br>

<div class="container">

    <h1 style="font-size: 20px; font-family: Arial;">Editar Bebida</h1>
    <br>


<div id="formulario">
<form method="POST" action="{{route('bebida.update',$f->id)}}" id="form">
        @csrf
      <!-- area de campos do form -->

      {{method_field('PUT')}}
      <div class="row">
         <div class="form-group col-md-4">
           <label for="campo1">Nome</label>
           <input type="text" class="form-control" id="nome" name="nome" value="{{$f->nome}}">
         </div>
     
         <div class="form-group col-md-4">
           <label for="campo1">Tipo</label>
           <input type="text" class="form-control" id="tipo" name="tipo" value="{{$f->tipo}}">
         </div>

         <div class="form-group col-md-4">
           <label for="campo2">Quantidade</label>
           <input type="text" class="form-control" id="quantidade" name="quantidade" value="{{$f->quantidade}}">
         </div>


      <hr />
      <div id="actions" class="row">
        <div class="col-md-12">
          <button id='btn-cadastrar-bebida' type="submit" class="btn btn-success mr-sm-2">Salvar</button>
          <!--<a href="index.html" class="btn btn-default">Cancelar</a>-->
          <br>
        <br>
        </div>
      </div>
    </form>
</div>

    <br>

</div>

 <footer style="background-color: #339966;">
        
    </footer>

<script src="../../bundle/babelpolyfill.bundle.js"></script>
<script src="../../bundle/index.bundle.js"></script>
<script src="../../bundle/bebidaController.bundle.js"></script>

</body>

</html>