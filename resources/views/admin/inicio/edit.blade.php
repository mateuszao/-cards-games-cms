@extends('layouts.app')

@section('content')
    <h2 class="my-5">Editar Home</h2>

    <form action="{{route('admin.inicio.update', ['inicio' => $inicio->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")

        <div class="form-group">
            <label>Titulo</label>
            <input type="text" name="nameTitulo" class="form-control @error('name') is-invalid @enderror" value="{{$inicio->titulo}}">

            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{$inicio->descricao}}">

            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Foto</label>
            <div class="custom-file">
                <input type="file" name="fotoPrincipal" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Escolha o arquivo da foto</label>
            </div>

            @error('body')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <hr>
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('storage/' . $inicio->foto)}}" alt="Imagem" class="img-fluid">
            </div>
        </div>

        <hr>


        <div>
            <button type="submit" class="btn btn-lg btn-success">Editar Inicio</button>
        </div>
    </form>
@endsection

