@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Postagem - CRIAR</div>

                    <div class="card-body">



                                                @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif





                        <form method="POST" action={{ url('/postagem/create') }}>
                            @csrf

                            <label for="fname">Categoria:</label><br>

                            <select class="form-control" name="categoria_id">

                                @foreach($categorias as $value)
                                <option value="{{ $value->id }}">{{ $value->nome }}</option>
                                @endforeach

                              </select>
                                <br>

                            <label for="fname">Título:</label><br>
                            <input type="text" class="form-control" name="titulo"><br><br>
                            <label for="fname">Descrição:</label><br>
                            <input type="text" class="form-control" name="conteudo"><br><br>


                            <input type="submit" class="form-control" value="ENVIAR">

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
