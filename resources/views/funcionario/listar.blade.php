<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>listarFuncionario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: grey; color:white; height: 30px;" >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/sispizza/public/" style="color: white; font-size: 14px; font-family: Arial;"> Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>


</br>
</br>


<div class="container">

    <h1 style="font-size: 20px; font-family: Arial;">Funcionarios</h1>
</br>

<div id="funcionario"></div>


<div id="list" class="row">
   
    <div class="table-responsive col-md-12">
     
        <table class="table table-striped" cellspacing="0" cellpadding="0">
          
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cpf</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Rua</th>
                    <th class="actions"></th>
                    <th class="actions"></th>
                </tr>
            </thead>
            <tbody>
             @foreach($funcionarios as $c)
             <tr>
                <td> <a href="{{ route('funcionario.show', $c->id) }}"> {{$c->nome}} </a> </td>
                <td> {{$c->cpf}}</td>
                <td>{{$c->email}}</td>
                <td> {{$c->telefone}}</td>
                <td>{{$c->rua}}</td>
                <td><a class="btn btn-warning btn-xs" href="funcionario/{{$c->id}}/edit">Editar</a>   
                </td>
                <td><form action="{{ route('funcionario.destroy',$c->id) }}" method="post">
                    @csrf {{ csrf_field() }} 
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </tr>
            
            @endforeach
        </tbody>
        
    </table>
    
    
</div>
</div> 

<br>
<div id="actions" class="row">
    <div>
       <button id='btn-cadastrar-funcionario'  type="submit" class="btn btn-success" style="background-color: grey; border-color: white;">
        <a style="text-decoration: white;" href="{{route('funcionario.create') }}">Adicionar</a></button>

        <br>
        <br>
    </div>
</div>


</div>


<footer style="background-color: white;">

</footer>

<script src="../../bundle/babelpolyfill.bundle.js"></script>
<script src="../../bundle/index.bundle.js"></script>
<script src="../../bundle/relestoqueController.bundle.js"></script>

</body>

</html>