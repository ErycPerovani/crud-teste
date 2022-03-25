@extends('templates.template')

@section('content')
    <h1 class="text-center">CRUD</h1>
    <hr>

    <div class="text-center">
        <a href="">
            <button class="btn btn-success">Criar</button>
        </a>
    </div>

    <div class="col-6 m-auto">
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Cliente_ID</th>
                    <th scope="col">Ações</th>
                 </tr>
            </thead>
            <tbody>
                @foreach ($user as $users)
                    @php
                        $cliente=$user->find($users->id)->relCliente;
                    @endphp
                    <tr>
                        <th scope="row">{{$users->id}}</th>
                        <td>{{$users->name}}</td>
                        <td>{{$cliente->id}}</td>
                        <td>
                            <a href="">
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
