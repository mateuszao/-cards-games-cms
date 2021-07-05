@extends('layouts.app')

@section('content')
    <div class="mt-5">
        <h4>Cadastro das informações da home</h4>
    </div>

    <table class="table table-striped mt-5">
        <thead>
        <tr>
            <th>#</th>
            <th>Titulo</th>
            <th>Descrição</th>
            <th>Foto</th>
            <th></th>
        </tr>
        </thead>

        <tbody>
        @foreach($inicio as $i)
            <tr>
                <td>{{ $i->id}}</td>
                <td>{{ $i->titulo}}</td>
                <td>{{ $i->descricao }}</td>

                <td>
                    <div class="btn-group">
                        <a href="{{ route('admin.inicio.edit', ['inicio' => $i->id])}}" class="btn btn-sm btn-primary mr-2"> Editar </a>
                        <form action="" method="post">

                            <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                        </form>
                    </div>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>

    {{$inicio->links()}}

@endsection
