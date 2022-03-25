@extends('templates.template')

@section('content')
    <h1 class="text-center">Cadastrar</h1>
    <hr>

    <div class="col-6 m-auto">
        @if (isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach ($errors->all() as $erro)
                    {{$erro}}
                @endforeach
            </div>
        @endif

        <form name="Formulario de Cadastro" id="formCad" method="post" action="{{url('cliente')}}">
            @csrf

            <input class="form-control" type="text" name="name" id="name" placeholder="Nome: " required><br>
            <input class="form-control" type="text" name="cpf" id="cpf" placeholder="CPF:  " required><br>
            <select  class="form-control" name="id_user" id="id_user">
                <option value="">Selecionar User</option>
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select><br>
            <input class="bnt bnt-primary" type="submit" value="CADASTRAR">
        </form>
    </div>
@endsection
