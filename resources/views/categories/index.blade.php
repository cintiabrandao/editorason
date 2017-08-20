@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h3>Listagem de Categorias</h3>
        </div>
        <div class="row">
            <a href="{{route('categories.create')}}" class="btn btn-primary">Nova Categoria</a>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Acões</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href="{{route('categories.edit',['category'=>$category->id])}}">Editar</a>
                                    </li>
                                    <li>
                                        <a href="{{route('categories.destroy', ['category' => $category->id])}}"
                                           onclick="event.preventDefault(); document.getElementById('{{$loop->index}}').submit();">Excluir</a>
                                        {!! Form::open([
                                                    'route' => ['categories.destroy', 'category' => $category->id
                                                    ], 'class' => 'form', 'method' => 'DELETE','id'=>"{$loop->index}", 'style'=>'display:none']) !!}
                                        {!! Form::close() !!}
                                    </li>
                                </ul>
                                </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $categories->links() }}
        </div>
    </div>

@endsection
