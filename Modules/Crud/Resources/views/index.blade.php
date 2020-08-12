<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Crud</title>
</head>
<body>
    <div class="container">
        <h3 class="text-center">Usuarios</h3>
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <th> {{$usuario->nome}} </th>
                        <th> {{$usuario->sobrenome}} </th>
                        <th> {{$usuario->email}} </th>
                        <th>
                            <a href=" {{route('editar', $usuario->id)}} ">editar Usuario</a><br>
                            <a href=" {{route('deletar', $usuario->id)}} ">Apagar usuario</a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <a lass="btn btn-sm btn-primary" href="{{route('cadastro')}}">novo usuario</a>
        </div>
    </div>

    
</body>
</html>