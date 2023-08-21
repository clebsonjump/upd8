<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        return view('cadastro');
    }

    public function store(Request $request)
    {
        // Validação dos campos, caso seja necessário
        $cliente = new Cliente();
        $cliente->cpf = $request->input('cpf');
        $cliente->nome = $request->input('nome');
        $cliente->data_nascimento = $request->input('data_nascimento');
        $cliente->sexo = $request->input('sexo');
        $cliente->endereco = $request->input('endereco');
        $cliente->estado = $request->input('estado');
        $cliente->cidade = $request->input('cidade');
        $cliente->save();

        return redirect('/')->with('success', 'Cliente cadastrado com sucesso!');
    }

    public function search(Request $request)
    {
        $cpf = $request->input('cpf');
        $nome = $request->input('nome');
        $data_nascimento = $request->input('data_nascimento');
        $sexo = $request->input('sexo');
        $endereco = $request->input('endereco');
        $estado = $request->input('estado');
        $cidade = $request->input('cidade');

        $clientes = Cliente::when($cpf, function ($query, $cpf) {
                return $query->where('cpf', $cpf);
            })
            ->when($nome, function ($query, $nome) {
                return $query->where('nome', 'like', "%$nome%");
            })
            ->when($data_nascimento, function ($query, $data_nascimento) {
                return $query->where('data_nascimento', $data_nascimento);
            })
            ->when($sexo, function ($query, $sexo) {
                return $query->where('sexo', $sexo);
            })
            ->when($endereco, function ($query, $endereco) {
                return $query->where('endereco', 'like', "%$endereco%");
            })
            ->when($estado, function ($query, $estado) {
                return $query->where('estado', $estado);
            })
            ->when($cidade, function ($query, $cidade) {
                return $query->where('cidade', 'like', "%$cidade%");
            })
            ->get();

        return view('pesquisa', compact('clientes'));
    }
}
