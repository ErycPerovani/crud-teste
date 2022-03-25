@extends('templates.template')

@section('content')
    <h1 class="text-center">CRUD</h1>
    <hr>

    <div class="text-center">
        <a href="{{url("cliente/create")}}">
            <button class="btn btn-success">Criar</button>
        </a>
    </div>

    <div class="col-6 m-auto">
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Token</th>
                    <th scope="col">Cliente_ID</th>
                    <th scope="col">Ações</th>
                 </tr>
            </thead>
            <tbody>
                @foreach ($cliente as $clientes)
                    @php
                        $user=$clientes->find($clientes->id)->relUsers;
                    @endphp
                    <tr>
                        <th scope="row">{{$clientes->id}}</th>
                        <td>{{$clientes->name}}</td>
                        <td>{{$user->remember_token}}</td>
                        <td>{{$clientes->id_user}}</td>
                        <td>
                            <a href="{{url("cliente/$clientes->id")}}">
                                <button class="btn btn-dark">vizualizar</button>
                            </a>

                            <a href="">
                                <button class="btn btn-primary">Editar</button>
                            </a>

                            <a href="">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
@endsection
