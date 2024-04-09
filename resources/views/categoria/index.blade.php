@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Categoria</div>

                    <div class="card-body">


                                                    @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif



                        <a class="btn btn-success" href="{{ url('/categoria/create') }}" type="button" >CRIAR</a>


                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Nome</th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($categorias as $value)
                                    <tr>
                                    <th scope="row">{{ $value->id }}</th>
                                    <td>{{ $value->nome }}</td>
                                    <td><a class="btn btn-info" href="{{ url('/categoria/' . $value->id) }}" type="button" >Visualizar</a></td>
                                    <td><a class="btn btn-warning" href="{{ url('/categoria/' . $value->id . '/edit') }}" type="button" >Editar</a></td>

                                    <td>


                                        <form method="POST" action="{{ url('/categoria/' . $value->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="form-control" value="DELETAR">

                                        </form>

                                    </td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
