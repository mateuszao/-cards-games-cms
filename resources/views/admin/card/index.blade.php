@extends('layouts.app')

@section('content')
    <style>
        .inicio-home {
            display: flex;
            align-items: center;
        }

        .inicio-home h4 {
            font-size: 30px;
            text-transform: uppercase;
        }

        .inicio-home div:nth-child(2){
            padding-left: 10px;
        }
    </style>
    <div class="mt-5">

        <div class="inicio-home">
            <div>
                <h4>Cadastro informações | Card |</h4>
            </div>
            <div>
                <a href="{{route('admin.card.create')}}" class="btn btn-lg btn-success"> Criar CARD </a>
            </div>
        </div>
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
        @foreach($card as $c)
            <tr>
                <td>{{ $c->id}}</td>
                <td>{{ $c->titulo}}</td>
                <td>{{ $c->descricao }}</td>

                <td>
                    <div class="btn-group">
                        <a href="{{ route('admin.card.edit', ['card' => $c->id])}}" class="btn btn-sm btn-primary mr-2"> Editar </a>
                        <form action="{{route('admin.card.destroy', ['card' => $c->id])}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                        </form>
                    </div>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>

    {{$card->links()}}

@endsection
