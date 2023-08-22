<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Cliente</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="outer-container" style="max-height: 800px;">
    <img src="https://www.upd8.com.br/content/agency2/images/logos/logo-Upd8.png" alt="Logo"> 
        
        <div class="inner-container">
                <h6 class="mt-4">Cadastro de Cliente</h6>
            
            @if(session('success'))
                <div class="alert alert-success mt-3">{{ session('success') }}</div>
            @endif
            
            <form action="/cliente" method="POST" class="row">
                @csrf
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="col-form-label" for="cpf">CPF:</label>
                        <input type="text" class="form-control" name="cpf" id="cpf" required>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" name="nome" id="nome" required>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="data_nascimento">Data de Nascimento:</label>
                        <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" required>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Sexo:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" value="M" required>
                            <label class="form-check-label" for="sexoM">Masculino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" value="F" required>
                            <label class="form-check-label" for="sexoF">Feminino</label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="endereco">Endereço:</label>
                        <input type="text" class="form-control" name="endereco" id="endereco" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="estado">Estado:</label>
                        <select class="form-control" name="estado" id="estado" required>
                            <option value="" disabled selected>Selecione o estado</option>
                            <option value="SP">São Paulo</option>
                            <option value="RJ">Rio de Janeiro</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cidade">Cidade:</label>
                        <select class="form-control" name="cidade" id="cidade" required>
                            <option value="" disabled selected>Selecione o estado primeiro</option>
                        </select>
                    </div>
                </div>
                
                <div class="col-md-12 text-right">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button type="reset" class="btn btn-secondary">Limpar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('script.js') }}"></script>
</body>
</html>
