<!DOCTYPE html>
<html>
<head>
    <title>Pesquisa de Clientes</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">  
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="outer-container" style="max-height: 800px;">
        <img src="https://www.upd8.com.br/content/agency2/images/logos/logo-Upd8.png" alt="Logo"> 
        
        <div class="inner-container">
            <h6 class="mt-4">Pesquisa de Clientes</h6>
        <form action="/pesquisa" method="GET" class="row">
            
             <div class="col-md-3">
            <div class="form-group">
                    <label class="col-form-label" for="cpf">CPF:</label>
                    <input type="text" class="form-control" name="cpf" id="cpf">
                </div>
            </div>

            <div class="col-md-3">
            <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" id="nome">
                </div>
            </div>
            
            <div class="col-md-3">
            <div class="form-group">
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" class="form-control" name="data_nascimento" id="data_nascimento">
                </div>
            </div>
            
            <div class="col-md-3">
            <div class="form-group">
                    <label>Sexo:</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" value="M">
                        <label class="form-check-label" for="sexoM">Masculino</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" value="F">
                        <label class="form-check-label" for="sexoF">Feminino</label>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
            <div class="form-group">
                    <label for="estado">Estado:</label>
                    <select class="form-control" name="estado" id="estado">
                        <option value="" disabled selected>Selecione o estado</option>
                        <option value="SP">São Paulo</option>
                        <option value="RJ">Rio de Janeiro</option>
                    </select>
                </div>
            </div>
            
            <div class="col-md-4">
            <div class="form-group">
                    <label for="cidade">Cidade:</label>
                    <select class="form-control" name="cidade" id="cidade">
                        <option value="" disabled selected>Selecione o estado primeiro</option>
                    </select>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Pesquisa</button>
                <button type="reset" class="btn btn-secondary">Limpar</button>
            </div>
        </form>
    </div>
        
    <div class="inner-container" style="margin-top: 20px;">     
        <h6 class="mt-4">Resultados da Pesquisa:</h6>
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
    <script src="{{ asset('script.js') }}"></script>
</body>
</html>
