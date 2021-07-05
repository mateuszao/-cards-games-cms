@extends('layouts.app')

@section('content')
    <h2 class="my-5">Criar Home</h2>

    <form action="{{route('admin.inicio.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Titulo</label>
            <input type="text" name="nameTitulo" class="form-control @error('name') is-invalid @enderror" value="{{old('nameTitulo')}}">

            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}">

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

        <div>
            <button type="submit" class="btn btn-lg btn-success">Criar Produto</button>
        </div>
    </form>
@endsection

