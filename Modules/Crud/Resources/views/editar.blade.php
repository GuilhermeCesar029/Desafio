<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Crud</title>
</head>
<body>
        <div class="container" >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form class="form-horizontal" id="formProdutos" action="{{route('editar.put', $usuarios->id)}}" method="POST">
                            {{csrf_field()}}

                            <input type="hidden" name="_method" value="put">
                            <div class="modal-header">
                                <h5 class="modal-title">Novo Usuario</h5>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" id="id" class="form-control">
                                <div class="form-group">
                                    <label for="nomeUsuario">Nome</label>
                                    <div class="input-group">
                                        <input 
                                            type="text" name="nome" class="form-control" id="nomeUsuario" required                                        
                                            value=" {{isset($usuarios->nome) ? $usuarios->nome : ''}} "
                                        >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sobrenomeUsuario">Sobrenome</label>
                                    <div class="input-group">
                                        <input 
                                            type="text" name="sobrenome" class="form-control" id="sobrenomeUsuario" required
                                            value=" {{isset($usuarios->sobrenome) ? $usuarios->sobrenome : ''}} "
                                        >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="emailUsuario">Email</label>
                                    <div class="input-group">
                                        <input 
                                            type="email" name="email" class="form-control" id="emailUsuario" required                                            
                                            value=" {{isset($usuarios->email) ? $usuarios->email : ''}} "
                                        >
                                    </div>
                                </div>  
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Salvar</button>                            
                                </div>                          
                            </div>    
                        </form>
                    </div>
                </div>
            </div> 

    
</body>
</html>