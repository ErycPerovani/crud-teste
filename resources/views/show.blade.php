@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1>

    <div class="col-8 m-auto">
        @php
            $user=$cliente->find($cliente->id)->relUsers;
        @endphp
        ID: {{$cliente->id}}<br>
        Nome: {{$cliente->name}}<br>
        CPF: {{$cliente->CPF}}<br>
        Email: {{$user->email}}<br>
        User_id: {{$cliente->id_user}}<br>
        Token: {{$cliente->remember_token}}<br>
    </div>
@endsection
