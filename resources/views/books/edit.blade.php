@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Editar Livro</h3>

            {!! Form::model($book,[
                'route' => ['books.update', 'book' => $book->id
                ], 'class' => 'form', 'method' => 'PUT']) !!}

            {!! Form::open(['route'=>'books.store', 'class'=>'form']) !!}
            <div class="form-group">
                {!! Form::label('title', 'Título') !!}
                {!! Form::text('title',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('subtitle', 'Subtitulo') !!}
                {!! Form::text('subtitle',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('price', 'Preco') !!}
                {!! Form::text('price',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Salvar Livro', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection