<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Cliente</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Cadastro de Cliente</h1>
        
        @if(session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif
        
        <form action="/cliente" method="POST">
            @csrf
            <div class="form-group">
                <label>CPF:</label>
                <input type="text" class="form-control" name="cpf" required>
            </div>
            
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" class="form-control" name="nome" required>
            </div>

            <div class="form-group">
                <label>Data de Nascimento:</label>
                <input type="date" class="form-control" name="data_nascimento" required>
            </div>

            <div class="form-group">
                <label>Sexo:</label>
                <select class="form-control" name="sexo" required>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </div>

            <div class="form-group">
                <label>Endereço:</label>
                <input type="text" class="form-control" name="endereco" required>
            </div>

            <div class="form-group">
                <label>Estado:</label>
                <input type="text" class="form-control" name="estado" required>
            </div>

            <div class="form-group">
                <label>Cidade:</label>
                <input type="text" class="form-control" name="cidade" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>
</html>
