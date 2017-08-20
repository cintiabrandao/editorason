@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h3>Listagem de Livros</h3>
        </div>
        <div class="row">
            <a href="{{route('books.create')}}" class="btn btn-primary">Novo Livro</a>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Subtitulo</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->subtitle }}</td>
                            <td>{{ $book->price }}</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href="{{route('books.edit',['book'=>$book->id])}}">Editar</a>
                                    </li>
                                    <li>
                                        <a href="{{route('books.destroy', ['$book' => $book->id])}}"
                                           onclick="event.preventDefault(); document.getElementById('{{$loop->index}}').submit();">Excluir</a>
                                        {!! Form::open([
                                                    'route' => ['books.destroy', '$book' => $book->id
                                                    ], 'class' => 'form', 'method' => 'DELETE','id'=>"{$loop->index}", 'style'=>'display:none']) !!}
                                        {!! Form::close() !!}
                                    </li>
                                </ul>
                                </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $books->links() }}
        </div>
    </div>

@endsection
