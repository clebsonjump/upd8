<!DOCTYPE html>
<html>
<head>
    <title>Pesquisa de Clientes</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Pesquisa de Clientes</h1>
        
        <form action="/pesquisa" method="GET" class="mt-3">
            
            <div class="form-group">
                <label>CPF:</label>
                <input type="text" class="form-control" name="cpf">
            </div>

            <div class="form-group">
                <label>Nome:</label>
                <input type="text" class="form-control" name="nome">
            </div>
            
            <div class="form-group">
                <label>Data de Nascimento:</label>
                <input type="date" class="form-control" name="data_nascimento">
            </div>
            
            <div class="form-group">
            <label>Sexo:</label>
                <select class="form-control" name="sexo">
                    <option value="">Selecione</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Endereço:</label>
                <input type="text" class="form-control" name="endereco">
            </div>
            
            <div class="form-group">
                <label>Estado:</label>
                <input type="text" class="form-control" name="estado">
            </div>

            <div class="form-group">
                <label>Cidade:</label>
                <input type="text" class="form-control" name="cidade">
            </div>
            
            <button type="submit" class="btn btn-primary">Pesquisar</button>
        </form>
        
        <h2 class="mt-4">Resultados da Pesquisa:</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Sexo</th>
                    <th>Endereço</th>
                    <th>Estado</th>
                    <th>Cidade</th>
                </tr>
                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->cpf }}</td>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->data_nascimento }}</td>
                        <td>{{ $cliente->sexo }}</td>
                        <td>{{ $cliente->endereco }}</td>
                        <td>{{ $cliente->estado }}</td>
                        <td>{{ $cliente->cidade }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>
